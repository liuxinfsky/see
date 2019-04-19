#coding=utf8
from rest_framework.views import APIView
from rest_framework.response import Response
from rest_framework.exceptions import ParseError
from utils.baseviews import BaseView
from utils.basemixins import PromptMixins
from utils.baseviews import ReturnFormatMixin as res
from utils.permissions import IsSuperUser
from sqlmng.mixins import FixedDataMixins, CheckConn, HandleInceptionSettingsMixins
from sqlmng.data import *
from sqlmng.serializers import *
from sqlmng.models import *

class ForbiddenWordsViewSet(BaseView):
    '''
        设置SQL语句中需拦截的字段
    '''
    queryset = ForbiddenWords.objects.all()
    serializer_class = ForbiddenWordsSerializer
    permission_classes = [IsSuperUser]

class StrategyViewSet(BaseView):
    '''
        设置审批策略
    '''
    queryset = Strategy.objects.all()
    serializer_class = StrategySerializer
    permission_classes = [IsSuperUser]

class PersonalSettingsViewSet(PromptMixins, BaseView):
    '''
        审核工单的用户个性化设置
    '''
    serializer_class = PersonalSerializer

    def get_queryset(self):
        return User.objects.filter(id=self.request.user.id)

    def check_data(self, request_data):
        cluster = request_data.get('cluster')
        dbs = request_data.get('dbs')
        env = request_data.get('env')
        if not (cluster and dbs):
            raise ParseError(self.personal_variable_error)
        return cluster, dbs, env

    def create(self, request, *args, **kwargs):
        cluster, dbs, env = self.check_data(request.data)
        user = request.user
        user_serializer = self.serializer_class(user, data=request.data)
        user_serializer.is_valid()
        user_serializer.save()
        alter_qs = user.dbconf_set.filter(cluster=cluster, env=env)
        for obj in alter_qs:
            user.dbconf_set.remove(obj)
        for db_id in dbs:
            user.dbconf_set.add(db_id)
        return Response(res.get_ret())

class InceptionVariablesViewSet(FixedDataMixins, HandleInceptionSettingsMixins, BaseView):
    '''
        Inception 变量
    '''
    serializer_class = InceptionVariablesSerializer
    search_fields = ['name']
    source_data = variables

    def create(self, request, *args, **kwargs):
        self.set_variable(request)
        return Response(res.get_ret())

class MailActionsSettingsViewSet(FixedDataMixins, BaseView):
    '''
        发邮件对应的动作
    '''
    serializer_class = MailActionsSettingsSerializer
    permission_classes = [IsSuperUser]
    source_data = mail_actions

    def create(self, request, *args, **kwargs):
        model = self.serializer_class.Meta.model
        model.objects.all().update(value=False)
        model.objects.filter(name__in=request.data).update(value=True)
        return Response(res.get_ret())

class InceptionConnectionViewSet(BaseView):
    '''
        Inception连接信息
    '''
    queryset = InceptionConnection.objects.all()
    serializer_class = InceptionConnectionSerializer
    permission_classes = [IsSuperUser]

class InceptionBackupView(HandleInceptionSettingsMixins, APIView):
    '''
        Inception备份信息
    '''
    def get(self, request, *args, **kwargs):
        ret = res.get_ret()
        ret['data'] = self.get_inception_backup()
        return Response(ret)

class ConnectionCheckView(CheckConn, APIView):
    '''
        检查连接(Inception连接/Inception备份库/目标库)
    '''
    def post(self, request, *args, **kwargs):
        check_type = request.data.pop('check_type')
        func = getattr(CheckConn, check_type)
        ret = func(self, request)
        return Response(ret)

class ShowDatabasesView(CheckConn, APIView):
    '''
        获取host地址的所有数据库
    '''
    def post(self, request, *args, **kwargs):
        ret = self.handle_get_databases(request)
        return Response(ret)
