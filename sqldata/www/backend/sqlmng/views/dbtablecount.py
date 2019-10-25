#coding=utf8
from __future__ import unicode_literals
from django.shortcuts import render
from django.http import HttpResponse,JsonResponse
import json
from django.core.paginator import Paginator, EmptyPage, PageNotAnInteger
from utils.baseviews import MaxSizePagination, BaseView
from rest_framework import status
from utils.permissions import IsSuperUser
from account.models import *
from account.serializers import *
from sqlmng.serializers import *
from sqlmng.models import DbTableCount,Dbconf
from utils.baseviews import ReturnFormatMixin as res

class DbTableCountSet(BaseView):
    '''
    数据库表的统计
    '''
    permission_classes = [IsSuperUser]
    search_fields = ['table_name']
    def get_queryset(self):
        user_obj = self.request.user
        user_info = {}
        user_info['username'] = user_obj.username
        # user_info['date_joined'] = user_obj.date_joined
        user_info['group'] = user_obj.groups.first().name if user_obj.groups.first() else None
        # user_info['identity'] = 'superuser' if user_obj.is_superuser else user_obj.role
        return user_info
         
    def list(self,request, *args, **kwargs):
        sorttype = request.GET.get('sorttype')
        sortfield = request.GET.get('sortfield')
        if sortfield:
            if sorttype == 'asc':
                queryset = DbTableCount.objects.all().order_by(sortfield)
            else:
                queryset = DbTableCount.objects.all().order_by('-'+sortfield)
        else:
            queryset = DbTableCount.objects.all().order_by('-counter')
        db_namefield = request.GET.get('db_name')
        if db_namefield :
            queryset = queryset.filter(db_name = db_namefield)
        searchfield = request.GET.get('search')
        if searchfield:
            queryset = queryset.filter(table_name__icontains = searchfield)
        page = request.GET.get('page')
        pagesize = request.GET.get('pagesize')
        if pagesize:
            pagesize=pagesize
        else:
            pagesize=10
        paginator = Paginator(queryset, pagesize)
        try:
            if page:
                dbtablecount_list = paginator.page(page)
            else:
                dbtablecount_list = paginator.page(1)
        except PageNotAnInteger:
            dbtablecount_list = paginator.page(1)
        except EmptyPage:
            if int(page) > paginator.num_pages:
                dbtablecount_list = paginator.page(paginator.num_pages)
            else:
                dbtablecount_list = paginator.page(1)
        serializer = DbTableCountSerializer(dbtablecount_list,many=True)
        return HttpResponse(json.dumps({'data':serializer.data,'counts':int(paginator.count)}),status=status.HTTP_200_OK)
    def getslowinfo(self,request, *args, **kwargs):
        slowid = request.GET.get('id')
        serializer = DbTableCountSerializer(DbTableCount.objects.filter(id = slowid),many=True)
        return HttpResponse(json.dumps(serializer.data),status=status.HTTP_200_OK)
    def maxinfo(request, *args, **kwargs):
        queryset = User.objects.all().order_by('-id')
        serializer = UserSerializer(queryset,many=True)
        return HttpResponse(json.dumps(serializer.data),status=status.HTTP_200_OK)