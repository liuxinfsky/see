<?php
namespace console\template\menu;

/**
 * 719分支上线菜单配置数组
 * @author: pengqiucheng<pengqiucheng@julive.com>
 * @date: 2018/7/31 18:10
 * [
    'menu_name'=>'', 	//菜单名称
    'menu_url'=>'',  	//菜单路由
    'menu_type'=>'', 	//菜单类型 1普通类 2视图类（如果是普通类，可不配置此字段）
    'parent_url'=>'', 	//父级菜单路由
    'role_type'=>'',    //角色类型 add新增角色 reduce减少角色 recover覆盖角色
    'role'=>[],			//角色数组 all所有角色
    'creator'=>'',		//创建人姓名
    'sort'=>'',         //排序
    ]
 */


use common\constants\CommonConstant;
use common\constants\RbacConstant;

return [
    [
        'menu_name' =>  '客户楼盘转化',
        'menu_url'  =>  'customer-conversion/index',
        'parent_url'=>  'header-manager',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_channel_manager,
            RbacConstant::$role_channel_charger,
            RbacConstant::$role_project_charger,
            RbacConstant::$role_field_manager,
            RbacConstant::$role_db_manager
        ],
        'creator'   =>  '彭求诚',
    ],
    [
        'menu_name' => '开发商人员管理',
        'menu_url' => 'ex-partner-employee/index',
        'parent_url' => 'expand',
        'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员

        ],
        'creator'   =>  '白少杰',
    ],
    [
        'menu_name' => '地块列表',
        'menu_url' => 'ex-lots/index',
        'parent_url' => 'expand',
        'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员

        ],
        'creator'   =>  'chenchengzhuang',
    ],

    [
        'menu_name' => '拓展人员管理',
        'menu_url' => 'ex-employee/index',
        'parent_url' => 'expand',
        'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员

        ],
        'creator'   =>  'chenchengzhuang',
    ],
    [
        'menu_name' => '拓展相关配置',
        'menu_url' => 'ex-approval-config',
        'parent_url' => 'expand',
        'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
        ],
        'creator'   =>  'chenchengzhuang',
    ],
    [
        'menu_name' => '条款审批',
        'menu_url' => 'ex-approval-config/provision-approval',
        'parent_url' => 'ex-approval-config',
        'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
        ],
        'creator'   =>  'chenchengzhuang',
    ],
    [
        'menu_name' => '条款特批',
        'menu_url' => 'ex-approval-config/special-batch',
        'parent_url' => 'ex-approval-config',
        'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
        ],
        'creator'   =>  'chenchengzhuang',
    ],
    [
        'menu_name' => '合作特批',
        'menu_url' => 'ex-approval-config/cooperation-approval',
        'parent_url' => 'ex-approval-config',
        'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
        ],
        'creator'   =>  'chenchengzhuang',
    ],
    [
        'menu_name' => '签约单审批列表页',
        'menu_url' => 'ex-sign-approval/index',
        'parent_url' => 'expand',
        'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_finance,              //财务
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'menu_name' => 'BD列表页',
        'menu_url' => 'ex-order/index',
        'parent_url' => 'expand',
        'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'menu_name' => '回款信息管理',
        'menu_url' => 'yw-payment-info/index',
        'parent_url' => 'expand',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'menu_name' => '成交单管理',
        'menu_url' => 'yw-deal/index',
        'parent_url' => 'header-manager',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'menu_name' => '楼盘商务信息管理',
        'menu_url' => 'project/index',
        'parent_url' => 'yw-projects',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'menu_name' => '商务专员城市配置',
        'menu_url' => 'yw-employee-city/list-bd',
        'parent_url' => 'expand',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'menu_name' => '申请开发票',
        'menu_url' => 'yw-invoice/create',
        'parent_url' => 'yw-invoice',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'menu_name' => '发票申请列表页',
        'menu_url' => 'yw-invoice/index',
        'parent_url' => 'yw-invoice',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_finance,              //财务
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'xiewei',
    ],

    [
        'menu_name' => '成交单发票报表',
        'menu_url' => 'yw-invoice/deal-invoice-report',
        'parent_url' => 'yw-invoice',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_finance,              //财务
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'menu_name' => '条款审批配置',
        'menu_url' => 'ex-approval-config/provision-approval',
        'parent_url' => 'ex-approval-config',
        'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'menu_name' => '条款特批配置',
        'menu_url' => 'ex-approval-config/special-batch',
        'parent_url' => 'ex-approval-config',
        'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'menu_name' => '合作特批配置',
        'menu_url' => 'ex-approval-config/cooperation-approval',
        'parent_url' => 'ex-approval-config',
        'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'menu_name' => '公司列表',
        'menu_url' => 'yw-project-partner/index',
        'parent_url' => 'expand',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'menu_name' => '报备记录管理',
        'menu_url' => 'yw-report/index',
        'parent_url' => 'expand',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'menu_name' => '楼盘列表',
        'menu_url' => 'yw-projects/index',
        'parent_url' => 'yw-projects',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '订单列表',
        'menu_url' => 'yw-order/index',
        'parent_url' => 'yw-employee',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '排号单列表',
        'menu_url' => 'yw-paihao/index',
        'parent_url' => 'yw-employee',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '认购列表',
        'menu_url' => 'yw-subscribe-list/index',
        'parent_url' => 'yw-employee',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '草签列表',
        'menu_url' => 'yw-sign-grass-list/index',
        'parent_url' => 'yw-employee',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '网签列表',
        'menu_url' => 'yw-sign-list/index',
        'parent_url' => 'yw-employee',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '咨询师带看情况查询',
        'menu_url' => 'yw-see-project-list/employee-see-project',
        'parent_url' => 'yw-service-admin',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员

            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],

    [
        'menu_name' => '楼盘核算汇总',
        'menu_url' => '/chart_table.html?table=view_merge_sql_adjust_project_stat',
        'parent_url' => 'view_merge_sql_adjust_project_stat',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'menu_type'=>'2', 	//菜单类型 1普通类 2视图类（如果是普通类，可不配置此字段）
        'role' => [
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '区域核算汇总',
        'menu_url' => '/chart_table.html?table=view_merge_sql_adjust_district_stat',
        'parent_url' => 'view_merge_sql_adjust_project_stat',
        'menu_type'=>'2',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '渠道核算汇总',
        'menu_url' => '/chart_table.html?table=view_merge_sql_adjust_channel_stat',
        'parent_url' => 'view_merge_sql_adjust_project_stat',
        'menu_type'=>'2',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '客户详情统计',
        'menu_url' => 'yw-customer-details',
        'parent_url' => 'yw-report',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '线索详情统计',
        'menu_url' => '/chart_table.html?table=view_clue_customer_stat',
        'menu_type'=>'2',
        'parent_url' => 'yw-customer-details',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '上户详情统计',
        'menu_url' => '/chart_table.html?table=view_in_customer_stat',
        'menu_type'=>'2',
        'parent_url' => 'yw-customer-details',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '带看详情统计',
        'menu_url' => '/chart_table.html?table=view_see_project_stat',
        'menu_type'=>'2',
        'parent_url' => 'yw-customer-details',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '认购详情统计',
        'menu_url' => '/chart_table.html?table=view_subscribe_order_stat',
        'menu_type'=>'2',
        'parent_url' => 'yw-customer-details',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '签约详情统计',
        'menu_url' => '/chart_table.html?table=view_sign_order_stat',
        'menu_type'=>'2',
        'parent_url' => 'yw-customer-details',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '排号详情统计',
        'menu_url' => '/chart_table.html?table=view_paihao_order_stat',
        'menu_type'=>'2',
        'parent_url' => 'yw-customer-details',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '草签详情统计',
        'menu_url' => '/chart_table.html?table=view_sign_grass_order_stat',
        'menu_type'=>'2',
        'parent_url' => 'yw-customer-details',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '草签详情统计',
        'menu_url' => '/chart_table.html?table=view_sign_grass_order_stat',
        'menu_type'=>'2',
        'parent_url' => 'yw-customer-details',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '周期维度统计',
        'menu_url' => '/chart_table.html?table=view_sql_order_stage_peroid_stat&use_where=1',
        'menu_type'=>'2',
        'parent_url' => 'yw-report',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '联系延迟录入统计',
        'menu_url' => '/chart_table.html?table=view_consultant_real_contact_timeout_stat',
        'parent_url' => 'yw-employee-timeout',
        'menu_type'=>'2',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '带看延迟录入统计',
        'menu_url' => '/chart_table.html?table=view_consultant_see_project_timeout_stat',
        'parent_url' => 'yw-employee-timeout',
        'menu_type'=>'2',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '话术价值点配置',
        'menu_url' => 'ex-speech-value/index',
        'parent_url' => 'expand',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '人力系统管理',
        'menu_url' => 'hr-manage',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '个人工作台',
        'menu_url' => 'hr-employee-check/work-bench',
        'parent_url' => 'hr-manage',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '审批',
        'menu_url' => 'hr-approval-apply/index',
        'parent_url' => 'hr-manage',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
];
