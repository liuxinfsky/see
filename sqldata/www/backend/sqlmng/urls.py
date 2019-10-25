#coding=utf-8
from django.conf.urls import include, url
from rest_framework.routers import DefaultRouter

from .views.inception_check import InceptionCheckView
from .views.select_data import SelectDataView
from .views.target_db import DbViewSet
from .views.workorder_main import InceptionMainView
from .views.auth_rules import AuthRulesViewSet
from .views.suggestion import SuggestionViewSet
from .views.db_cluster import DbClusterViewSet
from .views.dbtablecount import DbTableCountSet
from .views.settings import \
    ForbiddenWordsViewSet, \
    StrategyViewSet, \
    PersonalSettingsViewSet, \
    InceptionVariablesViewSet, \
    InceptionConnectionViewSet, \
    MailActionsSettingsViewSet, \
    InceptionBackupView, \
    ConnectionCheckView

router = DefaultRouter()
router.register(r'dbconfs', DbViewSet, base_name='DbViewSet')
router.register(r'inceptions', InceptionMainView, base_name='InceptionMainView')
router.register(r'inceptioncheck', InceptionCheckView, base_name='InceptionCheckView')
router.register(r'autoselects', SelectDataView, base_name='SelectDataView')
router.register(r'forbiddenwords', ForbiddenWordsViewSet, base_name='ForbiddenWordsViewSet')
router.register(r'strategy', StrategyViewSet, base_name='StrategyViewSet')
router.register(r'personalsettings', PersonalSettingsViewSet, base_name='PersonalSettingsViewSet')
router.register(r'authrules', AuthRulesViewSet, base_name='AuthRulesViewSet')
router.register(r'suggestion', SuggestionViewSet, base_name='SuggestionViewSet')
router.register(r'dbcluster', DbClusterViewSet, base_name='DbClusterViewSet')
router.register(r'mailactions', MailActionsSettingsViewSet, base_name='MailActionsSettingsViewSet')
router.register(r'inception/variables', InceptionVariablesViewSet, base_name='InceptionVariablesViewSet')
router.register(r'inception/connection', InceptionConnectionViewSet, base_name='InceptionConnectionViewSet')
router.register(r'dbtablecount', DbTableCountSet, base_name='DbTableCountSet')

urlpatterns = [
    url(r'^', include(router.urls)),
    url(r'^inception/backup/$', InceptionBackupView.as_view()),
    url(r'^inception/conncheck/$', ConnectionCheckView.as_view())
]
