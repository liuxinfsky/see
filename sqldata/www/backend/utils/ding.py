# coding=utf-8
import datetime
import json
import urllib.request
import time 

class Ding(object):

    ding_api = "https://oapi.dingtalk.com/"  # 设置钉钉机器人api
    see_addr = 'https://www.test.com'  # see项目访问地址
    @classmethod
    def print_log(cls,log):
        file_obj = open('/home/test.log', 'a+')
        log_time = time.strftime(
            '[%Y-%m-%d %H:%M:%S]',
            time.localtime(time.time()))  # 转化时间格式
        file_obj.write("%s\n" % (str(log)))
        file_obj.close()    # 记得close()
    @classmethod
    def get_desc(cls, action_type):
        desc_map = {
            '--enable-check': '提交',
            'select':'执行',
            'execute': '执行',
            'approve': '审批',
            'disapprove': '驳回',
            'reject': '放弃',
            'rollback': '回滚'
        }
        return desc_map.get(action_type)

    @classmethod
    def get_ding_template(cls,to_list, personnel, sqlid, note, action_type, sqlcontent, dbname,atuser=[]):
        title = '{} SQL工单-{}'.format(cls.get_desc(action_type), sqlid)
        sql_html = ''
        for s in sqlcontent[0:1024].split(';'):
            if s:
                sql_html = sql_html + '\n > ' + s + ';'
        if len(atuser) >=1 and atuser[0] != '':
            content_html = "@{} \n >{} {} [查看详情]({}/inceptionsql/{})\n >备注：{} 数据库（生产环境）：{} ".format(atuser[0],personnel, title, cls.see_addr, sqlid, note, dbname)
            my_data = {
                "msgtype": "markdown",
                "markdown": {
                    "title": "SQL工单通知",
                    "text": content_html + sql_html
                },
                "at": {
                    "atMobiles": atuser, 
                    "isAtAll": False
                }
            }
        else:
            content_html = "#### {} {} [查看详情]({}/inceptionsql/{})\n >备注：{} 数据库（生产环境）：{} ".format(personnel, title, cls.see_addr, sqlid, note, dbname)
            my_data = {
                    "msgtype": "markdown",
                    "markdown": {
                        "title": "SQL工单通知",
                        "text": content_html + sql_html
                    },
                    "at": {
                        "isAtAll": False
                    }      
            }
        # if len(sqlcontent) > 1024:
        #     sql_html = sql_html  + '#### 略... ...（内容较多，可查看详情）'           
        return my_data

    @classmethod
    def sendding(cls,to_list, personnel, sqlid, note, action_type, sqlcontent, dbname,atuser=[]):
        content = cls.get_ding_template(to_list, personnel, sqlid, note, action_type, sqlcontent, dbname,atuser)
        header = {
            "Content-Type": "application/json",
            "Charset": "UTF-8"
        }
        sendData = json.dumps(content)
        sendDatas = sendData.encode("utf-8")
        try:
            request = urllib.request.Request(url=cls.ding_api, data=sendDatas, headers=header)
            opener = urllib.request.urlopen(request)
            return True
        except Exception as e:
            print(e)
            return False
