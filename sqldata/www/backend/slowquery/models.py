from django.db import models
from account.models import User
# Create your models here.
class SlowLog(models.Model):
	ParseMaxRowCount = models.IntegerField()
	MySQLTotalExecutionCounts = models.IntegerField()
	SQLText = models.TextField()
	MaxLockTime = models.IntegerField()
	ReturnTotalRowCounts = models.IntegerField()
	SQLIdStr = models.CharField(max_length = 50,default = '')
	TotalLockTimes = models.IntegerField()
	MaxExecutionTime = models.IntegerField()
	CreateTime = models.DateField(auto_now=False, auto_now_add=False)
	SlowLogId = models.CharField(max_length = 50,default = '')
	ParseTotalRowCounts = models.IntegerField()
	MySQLTotalExecutionTimes = models.IntegerField()
	DBName = models.CharField(max_length = 50,default = '')
	ReturnMaxRowCount = models.IntegerField()
	slow_status = models.IntegerField(default = 0)

class SlowRecord(models.Model):
	SQLId = models.CharField(max_length = 50,default = '')
	ReturnRowCounts = models.IntegerField()
	HostAddress = models.CharField(max_length = 100,default = '')
	SQLText = models.TextField()
	LockTimes = models.IntegerField()
	ExecutionStartTime = models.DateTimeField(auto_now=False, auto_now_add=False)
	ParseRowCounts = models.IntegerField()
	QueryTimes = models.IntegerField()
	DBName = models.CharField(max_length = 50,default = "mysql")
	
class SlowLogOrder(models.Model):
	MySQLTotalExecutionCounts = models.IntegerField()
	MaxLockTime = models.IntegerField()
	ReturnTotalRowCounts = models.IntegerField()
	SQLText = models.TextField()
	ReturnTotalRowCounts = models.IntegerField()
	ParseTotalRowCounts = models.IntegerField()
	MySQLTotalExecutionTimes = models.IntegerField()
	DBName = models.CharField(max_length = 50,default = '')
	status = models.IntegerField()
	content = models.TextField()
	createtime = models.DateTimeField(auto_now=False, auto_now_add=False)
	distributor = models.CharField(max_length = 100,default = '')
	executor = models.CharField(max_length = 100,default = '')
	updatetime = models.DateTimeField(auto_now=False, auto_now_add=False)

class SlowLogComment(models.Model):
	slowid = models.IntegerField()
	#status = models.IntegerField()
	content = models.TextField()
	commentor = models.CharField(max_length = 50,default = '')
	email = models.CharField(max_length = 50,default = '')
	createtime = models.DateTimeField(auto_now=False, auto_now_add=False)