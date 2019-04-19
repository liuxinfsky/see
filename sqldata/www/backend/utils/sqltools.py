#coding=utf-8
import configparser
import subprocess
import pymysql
from rest_framework.exceptions import ParseError
from django.conf import settings
from .dbcrypt import prpcrypt
from sqlmng.models import InceptionConnection
import re

class Inception(object):

    def __init__(self, sql, dbname = ''):
        self.sql = sql
        self.dbname = dbname

    @property
    def get_inception_conn(self):
        instance = InceptionConnection.objects.first()
        return {
            'host':instance.host,
            'port':int(instance.port)
        }

    @property
    def get_inception_backup(self):
        conf = configparser.ConfigParser()
        file_path = settings.INCEPTION_SETTINGS.get('file_path')
        conf.read(file_path)
        return {
            'host': conf.get('inception', 'inception_remote_backup_host'),
            'port': int(conf.get('inception', 'inception_remote_backup_port')),
            'user': conf.get('inception', 'inception_remote_system_user'),
            'passwd': conf.get('inception', 'inception_remote_system_password')
        }

    def inception_handle(self, dbaddr,triggerstmp=''):
        status = 0
        sql = '/* {} */\
          inception_magic_start;\
          use {}; {} inception_magic_commit;'.format(dbaddr, self.dbname, self.sql)
        try:
            conn = pymysql.connect(user='', passwd='', db='', use_unicode=True, charset="utf8", **self.get_inception_conn)
            cur = conn.cursor()
            if triggerstmp:
                cur.execute("inception set inception_osc_on=0;")
            else:
                cur.execute("inception set inception_osc_on=1;")
            cur.execute(sql)
            result = cur.fetchall()
            cur.close()
            conn.close()
        except pymysql.Error as e:
            status = -1
            result = "Mysql Error {}: {}".format(e.args[0], e.args[1])
        return {'result': result, 'status': status}

    def manual(self):
        conn = pymysql.connect(db=self.dbname, charset='utf8', **self.get_inception_backup)
        conn.autocommit(True)
        cur = conn.cursor()
        try:
            cur.execute(self.sql)
        except pymysql.err.ProgrammingError:
            return []
        return cur.fetchall()

    def get_back_table(self):
        return self.manual()[0][0]

    def get_back_sql(self):
        per_rollback = self.manual()
        back_sql = ''
        for i in per_rollback:
            back_sql += i[0]
        return back_sql

    def get_index_list(self):
        res = self.manual()[3:]
        return [index_info[0] for index_info in res]

class SoarParams(object):
    allow_online = '-allow-online-as-test'
    only_syntax = '-only-syntax-check'
    fingerprint = '-report-type=fingerprint'
    pretty = '-report-type=pretty'

class HandleConn(object):

    def __init__(self):
        self.conn_conf = {
            'use_unicode': True,
            'charset': 'utf8'
        }

    @classmethod
    def convert_params(cls, params):
        params['port'] = int(params.get('port', 0))
        return params

    def main(self, params, sql, select=False):   # 查询目标库/表结构
        params.update(self.conn_conf)
        try:
            params = self.convert_params(params)
            conn = pymysql.connect(**params)
            conn.autocommit(True)
            cur = conn.cursor()
            sqltmp = re.split(";",sql)
            for item in sqltmp:
                if item:
                    cur.execute(item + ';')
            conn.close()
        except Exception as e:
            if select:
                return 2, [e]
            raise ParseError(e)
        return 0, cur.fetchall()

class AutoQuery(HandleConn):

    def get_databases(self, params):
        sql = 'SHOW DATABASES;'
        return self.main(params, sql)[1]

    def conn_database(self, params):
        sql = 'USE {}'.format(params.get('db'))
        return self.main(params, sql)

class SqlQuery(HandleConn):

    def __init__(self, instance):
        super(SqlQuery, self).__init__()
        self.db = instance
        self.password = prpcrypt.decrypt(self.db.password)
        self.soar_cli = settings.OPTIMIZE_SETTINGS.get('soar_cli')
        self.sqladvisor_cli = settings.OPTIMIZE_SETTINGS.get('sqladvisor_cli')
        self.params = {
            'host': self.db.host,
            'port': self.db.port,
            'user': self.db.user,
            'passwd': self.password,
            'db': self.db.name
        }

    def get_tables(self):
        sql = 'SHOW TABLES;'.format(self.db.name)
        res = self.main(sql)
        tables = [i[0] for i in res]
        return tables
    def extract_table_name_from_sql(self,sql_str):
        q = re.sub(r"/\*[^*]*\*+(?:[^*/][^*]*\*+)*/", "", sql_str)
        lines = [line for line in q.splitlines() if not re.match("^\s*(--|#)", line)]
        q = " ".join([re.split("--|#", line)[0] for line in lines])
        tokens = re.split(r"[\s)(;]+", q)
        result = set()
        get_next = False
        for token in tokens:
            if get_next:
                if token.lower() not in ["", "select"]:
                    result.add(token)
                get_next = False
            get_next = token.lower() in ["from", "join","table","update","delete"]
        return result

    def get_select_result(self, sql):
        data = self.main(self.params, sql, select=True)
        return data

    def get_triggers(self,table_name):
        listdata = [str(item) for item in table_name]
        table_name = "".join(listdata)
        table_name = table_name.replace("`","")
        sql = "SHOW triggers like '{}';".format(table_name)
        res = self.main(sql)
        tables = [i[0] for i in res]
        return tables

    def get_table_info(self, table_name):
        sql = 'SHOW CREATE TABLE {}'.format(table_name)
        table_info = self.main(sql)[0][1]
        return table_info

    def cmd_res(self, cmd):
        res = subprocess.Popen(cmd, shell=True, stdout=subprocess.PIPE, stderr=subprocess.STDOUT)
        return res.stdout.read()

    def sql_advisor(self, sql):
        if sql:
            if sql.find('{')==-1:
                sqltmp=sql.replace("'",'"')
            else:
                sqltmp=sql.replace("'{","j@!ertyu78zqcv")
                sqltmp=sqltmp.replace("}'","jl@!ertyu78zqcv")
                sqltmp=sqltmp.replace("'",'"')
                sqltmp=sqltmp.replace("j@!ertyu78zqcv","'\"'\"'{")
                sqltmp=sqltmp.replace("jl@!ertyu78zqcv","}'\"'\"'")
        else:
            sqltmp=sql

        cmd = "{} -h {} -P {}  -u {} -p '{}' -d {} -q '{};' -v 1".format(self.sqladvisor_cli, self.db.host, self.db.port, self.db.user, self.password, self.db.name, str(sqltmp))
        return self.cmd_res(cmd)

    def sql_soar(self, sql, soar_type):
        if sql.find('{')==-1:
            sqltmp=sql.replace("'",'"')
        else:
            sqltmp=sql.replace("'{","j@!ertyu78zqcv")
            sqltmp=sqltmp.replace("}'","jl@!ertyu78zqcv")
            sqltmp=sqltmp.replace("'",'"')
            sqltmp=sqltmp.replace("j@!ertyu78zqcv","'\"'\"'{")
            sqltmp=sqltmp.replace("jl@!ertyu78zqcv","}'\"'\"'")
                     
        cmd = "echo '{}' | {} -test-dsn='{}:{}@{}:{}/{}' -online-dsn='{}:{}@{}:{}/{}' {}".format(str(sqltmp), self.soar_cli, 'root','123456','127.0.0.1','3306','mysql',self.db.user, self.password, self.db.host, self.db.port, self.db.name,getattr(SoarParams, soar_type))
        #cmd = "echo '{}' | {} -test-dsn='{}:{}@{}:{}/{}' {}".format(sql, self.soar_cli, self.db.user, self.password, self.db.host, self.db.port, self.db.name, getattr(SoarParams, soar_type))
        return self.cmd_res(cmd)

