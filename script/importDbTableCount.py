#!/usr/bin/python
# -*- coding: UTF-8 -*-
# coding: utf-8
import MySQLdb
import json
import time
import datetime
import os
import io
import sys
import commands
import logging
import re
#------------------------
# 公共配置 MySQL-python
#------------------------
logSaveFilePath = "/mnt/hgfs/workspace1/julive/log.log"
logSaveElasticSearchFilePath = "/mnt/hgfs/workspace1/julive/ElasticSearchFile.json"
#-------------------------
#mysql 配置
#-------------------------
mysqlconf = {
	"test":{ #key为要查询的db_name,一定要注意key的含义
		"mysqlHost":"127.0.0.1",
		"mysqlpPrt":3306,
		"mysqlUserName":"root",
		"mysqlPassword":"123456",
		"mysqlDbname":"information_schema",
		"mysqlDbset":"--default-character-set=utf8 -A"
	},
	"v9":{
		"mysqlHost":"192.168.2.74",
		"mysqlpPrt":3306,
		"mysqlUserName":"root",
		"mysqlPassword":"123456",
		"mysqlDbname":"information_schema",
		"mysqlDbset":"--default-character-set=utf8 -A"
	},
}

mysqlAuditHost      = "192.168.2.74" #sql审计的配置
mysqlAuditUserName  =  "root"
mysqlAuditPassword  =  "123456"
mysqlAuditDbname    =  "sqlweb"
mysqlAuditTablename =  "sqlmng_dbtablecount"#sql审计统计表
# 4个进程处理
worker_num = 4
#任务分配资源
job_source = []
#自增id
counter = 0


class DateEncoder(json.JSONEncoder):  
    def default(self, obj):  
        if isinstance(obj, datetime.datetime):  
            return obj.strftime('%Y-%m-%d %H:%M:%S')  
        elif isinstance(obj, datatime.date):  
            return obj.strftime("%Y-%m-%d")  
        else:  
            return json.JSONEncoder.default(self, obj)

def getConnection():
    conn = MySQLdb.connect(mysqlAuditHost,mysqlAuditUserName,mysqlAuditPassword,mysqlAuditDbname,charset='utf8')
    return conn

def exportSql(args_of_job):
	global counter
	if args_of_job !=None :
		tableTmp = getCount(args_of_job)
		tableData = []
		for row in tableTmp:
			importTmp = {}
			counter +=1
			importTmp['id'] = counter
			importTmp['db_name'] = args_of_job['db_name']
			importTmp['table_name'] = row[0]
			importTmp['counter'] = row[1]
			importTmp['table_comment'] = row[2]
			importTmp['incrementer'] = 0
			importTmp['yesincrementer'] = 0
			importTmp['create_time'] = time.strftime("%Y-%m-%d %H:%M:%S", time.localtime())
			importTmp['update_time'] = time.strftime("%Y-%m-%d %H:%M:%S", time.localtime())
			tableData.append(importTmp)
		try:
			return saveAll(mysqlAuditTablename,tableData)
		except Exception as e:
			print e
			logging.error("发生错误，error:{0}".format(e))
			sys.exit()

def getCount(args_of_job):
	sql = "select table_name,table_rows,table_comment from tables where TABLE_SCHEMA = '"+args_of_job['db_name']+"' and table_type != 'VIEW' order by create_time asc"
	db = MySQLdb.connect(args_of_job['mysqlHost'],args_of_job['mysqlUserName'],args_of_job['mysqlPassword'],args_of_job['mysqlDbname'], charset='utf8' )
	cursor = db.cursor()
	try:
		cursor.execute(sql)
		results = cursor.fetchall()
		cursor.close()
		db.close()
		return results
	except Exception as e:
		print e
		logging.error("发生错误，error:{0}".format(e))
	 	cursor.close()
		db.close()
		sys.exit()

def incrementLog(olddata,newdata):
	with io.open(logSaveElasticSearchFilePath,"a+",encoding="utf-8") as f :
		for result in olddata:
			importTmp = {}
			importTmp['id'] = result[0]
			importTmp['db_name'] = result[1]
			importTmp['table_name'] = result[2]
			importTmp['counter'] = result[3]
			importTmp['table_comment'] = result[4]
			importTmp['incrementer'] = result[5]
			importTmp['yesincrementer'] = result[6]
			importTmp['create_time'] = result[7]
			importTmp['update_time'] = result[8]
			f.write(unicode(json.dumps(importTmp,cls=DateEncoder)) + '\n')
		for result in newdata:
			f.write(unicode(json.dumps(result,cls=DateEncoder)) + '\n')
    	f.close()
    	logging.info("当前任务老数据和新数据已写入日志文件")
	logging.info("当前执行完该%s的所有数据执行完成 "%newdata)
	return True

def getIncrement(olddata,newdata):
	for k in newdata:
		k['table_comment'] = str(k['table_comment'])
		for kk in olddata:
			kk = list(kk)
			if k['db_name'] == kk[1] and k['table_name'] == kk[2]:
				k['incrementer'] = str(long(k['counter']) - long(kk[3]))
				k['yesincrementer'] = str(kk[5])
	return newdata

def saveAll(table,datas,searchKeys=['id'],ifIgnoreSearchKey="1",ifNotUpdate="0"):
    conn = getConnection()
    cursor = conn.cursor()
    where = []
    for data in datas:
        for key in data:
            data[key] = MySQLdb.escape_string(str(data[key]))
    for searchKey in searchKeys:
        searchKeyDatas = []
        for data in datas:
            searchKeyDatas.append(data[searchKey])
        searchKeyDatasString = "`"+searchKey+"` in ('"+"','".join(searchKeyDatas)+"')"
        where.append(searchKeyDatasString)
    whereString = " AND ".join(where)
    selectSql = "SELECT `"+"`,`".join(['id','db_name','table_name','counter','table_comment','incrementer','yesincrementer','create_time','update_time'])+"` from "+table+" WHERE " + whereString
    logging.info("获取查询sql为：%s "%selectSql)
    cursor.execute(selectSql)
    conn.commit()
    results = cursor.fetchall()
    datas = getIncrement(results,datas)
    updateData = []
    insertData = []
    existKey = []
    for result in results:
        keyValue = []
        for value in result:
            keyValue.append(str(value))
            break
        existKey.append(",".join(keyValue))
    for data in datas:
        keyValue = []
        for key in searchKeys:
            keyValue.append(data[key])
        currentKey = ",".join(keyValue)
        if currentKey in existKey:
            updateData.append(data)
        else:
            insertData.append(data)
    if ifNotUpdate == "0":
        updateAll(updateData,table,searchKeys)
    insertAll(insertData,table,searchKeys,ifIgnoreSearchKey)
    conn.close()
    return results,datas

def updateAll(datas,table,searchKeys):
    #同时更新多条数据
    if len(datas) == 0:
        return
    conn = getConnection()
    cursor = conn.cursor()
    sets = {}
    updateSql = "UPDATE `"+table+"` set "
    whereValues = []
    whereKey = "WHERE CONCAT(`"+"`,',',`".join(searchKeys)+"`) IN "
    for data in datas:
        whereValue = []
        for searchKey in searchKeys:
            whereValue.append(data[searchKey])
        whereValueString = ",".join(whereValue)
        whereValues.append(whereValueString)
        for key in data:
            if key in searchKeys:
                pass
            else:
                searchValue = []
                for searchKey in searchKeys:
                    searchValue.append(str(data[searchKey]))
                searchValueString = ",".join(searchValue)
                try:
                    sets[key][searchValueString] = data[key]
                except KeyError as e:
                    sets[key] = {}
                    sets[key][searchValueString] = data[key]
    searchKeysString = "(`"+"`,',',`".join(searchKeys)+"`)"
    whereValuesString = "('"+"','".join(whereValues)+"')"
    setStringArray = []
    for key1 in sets:
        setString = ""
        for key2 in sets[key1]:
            if setString == "":
                setString = "`"+key1+"` = CASE WHEN (CONCAT"+searchKeysString+"='"+key2+"') THEN '"+sets[key1][key2]+"'"
            else:
                setString = setString + " WHEN (CONCAT"+searchKeysString+"='"+key2+"') THEN '"+sets[key1][key2]+"'"
        setString += " END "
        setStringArray.append(setString)
    setStrings = ",".join(setStringArray)
    whereStrings = whereKey + whereValuesString
    updateSql += setStrings
    updateSql += whereStrings
    logging.info("获取更新sql为：%s "%updateSql)
    try:
        cursor.execute(updateSql)
        result = cursor.fetchall()
    except Exception as e:
       logging.error("发生错误，error:{0}".format(e))
       sys.exit()
    conn.commit()
    conn.close()

def insertAll(datas,table,searchKeys,ifIgnoreSearchKey):
    #多条数据同时添加
    if len(datas) == 0:
        return
    conn = getConnection()
    cursor = conn.cursor()
    keys=[]
    for key in datas[0]:
        if key not in searchKeys or ifIgnoreSearchKey!= "1":
            keys.append(key)
    insertSql = "INSERT INTO "+table+" (`"+"`,`".join(keys)+"`) VALUES "
    valueStrings = []
    for data in datas:
        value = []
        for key in keys:
            value.append(data[key])
        valueString = "('" + "','".join(value) + "')"
        valueStrings.append(valueString)
    insertSql += ",".join(valueStrings)
    logging.info("获取插入sql为：%s "%insertSql)
    try:
        cursor.execute(insertSql)
        conn.commit()
        conn.close()
    except Exception as e:
        logging.error("发生错误，error:{0}".format(e))
        sys.exit()

def addJob(data):
	job_source.append(data)
	return True

def deleteJob(table_name):
	for index,job in enumerate(job_source):
		if job['data']['table_name'] == table_name :
			job_source.remove(job)
	
	if len(job_source)==0 :
		sys.exit()
	return True

def foreman(worker_num):
	pipeline = create_pipeline(worker_num)
	args_of_ceate_jobs = None
	for i,job in enumerate(get_jobs(args_of_ceate_jobs),start=0):
		worker_id  = i % worker_num
		pipeline.send((job,worker_id))

def coroutine(func):
    def warper(*args):
        f = func(*args)
        f.next()
        return f
    return warper

@coroutine
def worker(pipeline,accepting,job,my_id):
    while True:
        args_of_job, worker_id = (yield )
       	if worker_id == my_id :
        	result = work(args_of_job)
        	accepting.send(result)
        else :
            pipeline.send((args_of_job,worker_id))
        	

@coroutine
def accept():
    while True:
        result = (yield )
        if result != None :
        	#回收工作
        	incrementLog(result[0],result[1])
        	logging.info("执行完当前单个任务，任务数据为：{0}：".format(result))
        #do_some_accepting

def create_pipeline(worker_num):
    pipeline = None
    job = None
    args_of_ceate_jobs = None
    accepting = accept()
    for work_id in  range(worker_num):
        pipeline = worker(pipeline,accepting,job,work_id)
    return pipeline

def get_jobs(args_of_ceate_jobs):
	for job in job_source:
		yield job

def work(args_of_job):
	if args_of_job != None:
		return exportSql(args_of_job)
    #do_some_work

def getALLJobs(table_name = ''):
	nowTime = datetime.datetime.now().strftime('%Y-%m-%d %H:%M:%S')
	logging.info("===============" + nowTime + "begin Task==================")
	try:
		for row in mysqlconf:
			importData = {}
			importData['db_name'] = row
			importData['mysqlHost'] = mysqlconf[row]['mysqlHost']
			importData['mysqlUserName'] = mysqlconf[row]['mysqlUserName']
			importData['mysqlPassword'] = mysqlconf[row]['mysqlPassword']
			importData['mysqlDbname'] = mysqlconf[row]['mysqlDbname']
			if importData !=None :
				addJob(importData)
				logging.info("添加任务：addJob({0})".format(importData['db_name']))
		foreman(worker_num)
	except Exception as e:
		print e
		logging.error("发生错误，error:{0}".format(e))
		sys.exit()

def main():
	if sys.getdefaultencoding() != 'utf-8':
		reload(sys)
		sys.setdefaultencoding('utf-8')
	logging.basicConfig(
		filename=logSaveFilePath,
		format = '%(asctime)s %(filename)s[line:%(lineno)d] %(levelname)s %(message)s',
		datefmt = '%Y-%m-%d %H:%M:%S',
		level=logging.INFO
	)
	if len(sys.argv) > 1:
		logging.error("参数错误，最多支持3个参数")
		sys.exit()
	else :
		getALLJobs()
	logging.info("今天的任务完成：完成时间为：%s" % datetime.datetime.now().strftime('%Y-%m-%d %H:%M:%S')
)

if __name__ == '__main__':
	main()
