
### See SQL审核平台

![](https://img.shields.io/badge/build-release-brightgreen.svg)  
![](https://img.shields.io/badge/version-v1.0.0-brightgreen.svg)  
![](https://img.shields.io/badge/vue.js-2.9.1-brightgreen.svg) 
![](https://img.shields.io/badge/iview-2.8.0-brightgreen.svg?style=flat-square) 
![](https://img.shields.io/badge/python-3.6-brightgreen.svg)
![](https://img.shields.io/badge/Django-2.0-brightgreen.svg)

###v2.0.1版本
    新添加对数据库表的统计以及增量统计
    1、执行script里的python脚本(根据自己需要改里面配置)
    2、重启docker
    3、效果图
![](https://github.com/qieangel2013/see/tree/master/sqldata/www/frontend/dist/dist/table.png)

### v2.0版本
	v2.0版本是全新的版本，sql执行采用异步、定时执行等
	v1.0版本要升级v2.0版本：
		1、升级数据库使用sql/old/update.sql来升级数据库
		2、sqldata/www下的所有文件覆盖（数据库配置相应的改一下）
		3、进入docker(docker attach 容器id),vi /etc/rc.local
			把nohup python manage.py celery worker -c 4 --loglevel=info >/dev/null 2>&1 &
			修改为nohup python manage.py celery worker -c 10 -B --loglevel=info >/dev/null 2>&1 &
		4、重启docker容器（docker restart 容器id）
		5、此次更新包括定时执行、异步执行、（审核、提交、执行）邮件和钉钉提醒，需要配置
			邮件（/sqldata/www/backend/utils/mail.py）和钉钉（/sqldata/www/backend/utils/ding.py），修复了pt由于触发器导致不能执行工单、修复多条执行导致的问题
	注意：以后版本更新是在v2.0的基础上来迭代更新的，如果使用v1.0请进行升级，Master现为v2.0版本

### install
    进入docker目录
    docker build -t  sql:latest .
### 使用
 - 服务启动之前
    - `在docker启动之前一定先的导入sql文件夹里sqlweb.sql,然后修改sqldata/www/backend/sqlweb/setting.py里修改mysql连接`
 - 服务启动
     - `docker run -idt  -p 80:80 -v /data/sqldata/nginx/www.conf:/usr/local/nginx/conf/vhosts/www.conf
        -v /data/sqldata/www:/usr/local/seevenv/see-master
        -v /data/sqldata/inception/inc.cnf:/etc/inc.cnf
        --name mysqldocker sql:latest "/etc/rc.local"` 
 - php文件
    - `php项目是拉取阿里云rds的服务项目，使用yii2框架的console写的，可以实时拉取慢查询`
    - `拉取慢查询入库后，see服务端已经做好数据展示和工单流程，记得要修改PHP项目的mysql，数据库依然是你是sqlweb`
 - 注意事项
    - `注意：上面的路径要替换成你的实际路径`
 - 登录账号
    - `登录账号：admin ,登录密码:111111`
 - 使用回滚功能注意
    - 目标库的设置要有
        [mysqld]<br/>
        server-id = 100  # 不限制具体数值<br/>
        log_bin = mysql-bin<br/>
        binlog_format = row  # 或 MIXED
 - 由于有的表已存在数据，再添加索引或者字段需要工具
     - 在docker里安装pt-online-schema-change来做实时改表结构<br/>
       docker里执行yum install percona-toolkit


## 功能简介

- 目标库管理
    - 支持多场地/数据中心的数据库管理，集群方式归纳目标数据库
    - 支持目标数据库配置，库/表结构查询
- 慢查询
    - 基于阿里云rds
    - 慢查询统计
    - 慢查询明细
    - 慢查询转工单
- SQL操作
    - 基于Inception
    - SQL语法检测
    - SQL语句执行
    - SQL回滚
    - 历史记录
- SQL查询
    - 查询目标数据库的详细表结构
    - 查询表数据，对结果可导出文件
    - SQL语句优化（基于美团SQLAdvisor）
    - 多层次优化建议（基于小米SOAR）
- 用户管理
    - 对用户/组的注册/注销/加组/授权等管理
- 个性化设置
    - 管理员可以做SQL关键字拦截，平台的审批功能开关等设置
    - 用户可以订阅其常用的数据库，指定审批工单的经理，以简化审核时所需的操作
- inception设置
    - inception服务连接信息
    - inception备份库连接信息
    - inception支持的参数释义及值
- 人工审批功能
    - 流程开关
    - 开启流程，工单至少需双人确认（流程：提交人 -- inception自动审核 -- 经理审批 -- DBA上线）
    - 关闭流程，工单可由经理上线（流程：提交人 -- inception自动审核 -- 经理上线）
- 用户权限
    - 基于RBAC的表级，对象级权限控制体系
    - 通过用户管理设置用户权限
    - 根据用户身份（组员/经理/总监）鉴权用户对SQL的审核/取消/执行/回滚等操作
- 操作流程
    - 用户需要输入SQL，指定环境，执行人，数据库
    - inception自动审核SQL语法
    - 审批人做审批通过或驳回操作
    - 执行人做执行/撤销/回滚等操作
    - SQL列表界面提供SQL查询，操作等相关功能

- API文档
    - 各接口生成自动化的API文档，对接外部需求
    
- 通知
    - E-mail邮件推送
- 其他
    - DashBoard数据报表展示

## 环境

- Python 3.6
    - Django 2.0
    - Django Rest Framework 3.8
    
- Vue.js 2.9
    - iview 2.8
    - iview-admin 1.3

## 界面展示

- 邮件提醒

![image](https://github.com/myide/see/blob/master/frontend/src/images/github/mail.png)
- Dashboard审计

![image](https://github.com/myide/see/blob/master/frontend/src/images/github/dashboard.png)

- SQL查询

![image](https://github.com/myide/see/blob/master/frontend/src/images/github/query.png)

- 工单审核

![image](https://github.com/myide/see/blob/master/frontend/src/images/github/check.png)

- 工单详情 1

![image](https://github.com/myide/see/blob/master/frontend/src/images/github/detail1.png)

- 工单详情 2

![image](https://github.com/myide/see/blob/master/frontend/src/images/github/detail2.png)

- 工单详情 3

![image](https://github.com/myide/see/blob/master/frontend/src/images/github/detail3.png)

- 工单列表

![image](https://github.com/myide/see/blob/master/frontend/src/images/github/list.png)

- 工单设置

![image](https://github.com/myide/see/blob/master/frontend/src/images/github/platsettings.png)

- 用户管理

![image](https://github.com/myide/see/blob/master/frontend/src/images/github/user.png)

## License

- Eclipse Public License - v 2.0

Copyright © 2018 See


