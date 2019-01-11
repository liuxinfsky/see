#!/usr/bin/python
#-\*-coding: utf-8-\*-

''' 建表语句
CREATE DATABASE pro1;
CREATE TABLE IF NOT EXISTS pro1.mytable1 (
   `id` INT UNSIGNED AUTO_INCREMENT,
   `myname` VARCHAR(10) NOT NULL,
   PRIMARY KEY ( `id` )
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

'''

import pymysql

# 待审核/执行的sql语句（需包含目标数据库的地址、端口 等参数）
sql='/* --user=root;--password=123456;--host=127.0.0.1;--port=3306;--enable-execute; */\
inception_magic_start;\
use pro1;\
insert into mytable1 (myname) values ("xianyu1"),("xianyu2");\
insert into mytable1 (myname) values ("xianyu1"),("xianyu2");\
inception_magic_commit;'
try:
    conn=pymysql.connect(host='127.0.0.1',user='',passwd='',db='',port=6669,use_unicode=True,charset="utf8")  # inception的地址、端口等
    cur=conn.cursor()
    ret=cur.execute(sql)
    result=cur.fetchall()
    num_fields = len(cur.description) 
    field_names = [i[0] for i in cur.description]
    print(result)
    cur.close()
    conn.close()
except pymysql.Error as e:
     print("Mysql Error %d: %s" % (e.args[0], e.args[1]) )


