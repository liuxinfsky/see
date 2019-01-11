<?php
namespace console\template\auth;

/**
 * 719分支上线权限配置数据
 * @author: pengqiucheng<pengqiucheng@julive.com>
 * @date: 2018/7/31 19:51
 * [
    'auth_name'=>'',	//权限名称
    'auth_url'=>'',		//权限路由
    'parent_url'=>'',	//父级权限路由
    'role_type'=>'',    //角色类型 add新增角色 reduce减少角色 recover覆盖
    'role'=>[],			//角色数组 all表示所有角色
    'creator'=>'',		//创建人姓名
    ]
 */

use common\constants\CommonConstant;
use common\constants\RbacConstant;

return [
    [
        'auth_name' =>  'BD单管理',
        'auth_url'  =>  'ex-order',
        'parent_url'=>  'expand',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'xiewei',
    ],
    [
        'auth_name' =>  '驻场拓展业务管理',
        'auth_url'  =>  'expand',
        'parent_url'=>  'module/site',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '白少杰',
    ],
    [
        'auth_name' =>  '支撑系统-暂不修改密码',
        'auth_url'  =>  'yw-task/wait-edit',
        'parent_url'=>  'site',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '彭求诚',
    ],
    [
        'auth_name' =>  '人力-暂不修改',
        'auth_url'  =>  'hr-task/wait-edit',
        'parent_url'=>  'hr-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '彭求诚',
    ],
    [
        'auth_name' =>  '支撑系统-前往修改密码',
        'auth_url'  =>  'yw-task/edit-pwd',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '彭求诚',
    ],
    [
        'auth_name' =>  '员工个人主页',
        'auth_url'  =>  'employee/home',
        'parent_url'=>  'employee',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '彭求诚',
    ],
    [
        'auth_name' =>  '我的消息列表',
        'auth_url'  =>  'yw-message/index',
        'parent_url'=>  'yw-message',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '彭求诚',
    ],
    [
        'auth_name' =>  '待办事项列表',
        'auth_url'  =>  'yw-message/to-do',
        'parent_url'=>  'yw-message',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '彭求诚',
    ],
    [
        'auth_name' =>  '修改员工单条信息',
        'auth_url'  =>  'employee/edit-user',
        'parent_url'=>  'employee',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '彭求诚',
    ],
    [
        'auth_name' =>  '日程列表',
        'auth_url'  =>  'yw-schedule/index',
        'parent_url'=>  'yw-schedule',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '彭求诚',
    ],
    [
        'auth_name' =>  '异步获取日程数据',
        'auth_url'  =>  'yw-schedule/get-json',
        'parent_url'=>  'yw-schedule',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '彭求诚',
    ],
    [
        'auth_name' =>  '客户楼盘转化-查看上户带看订单',
        'auth_url'  =>  'yw-order-conversion/index',
        'parent_url'=>  'customer-conversion',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_field_manager,
            RbacConstant::$role_project_charger,
            RbacConstant::$role_channel_charger,
            RbacConstant::$role_channel_manager,
        ],
        'creator'   =>  '彭求诚',
    ],
    [
        'auth_name' =>  '客户楼盘转化-列表',
        'auth_url'  =>  'customer-conversion/index',
        'parent_url'=>  'customer-conversion',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_field_manager,
            RbacConstant::$role_project_charger,
            RbacConstant::$role_channel_charger,
            RbacConstant::$role_channel_manager,
        ],
        'creator'   =>  '彭求诚',
    ],
    [
        'auth_name' =>  '公司列表',
        'auth_url'  =>  'yw-project-partner/index',
        'parent_url'=>  'expand',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
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
        'auth_name' =>  '开发商人员管理',
        'auth_url'  =>  'ex-partner-employee',
        'parent_url'=>  'expand',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '白少杰',
    ],
    [
        'auth_name' =>  '开发商人员列表页',
        'auth_url'  =>  'ex-partner-employee/index',
        'parent_url'=>  'ex-partner-employee',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
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
        'auth_name' =>  '创建开发商人员',
        'auth_url'  =>  'ex-partner-employee/create',
        'parent_url'=>  'ex-partner-employee',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
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
        'auth_name' =>  '编辑开发商人员',
        'auth_url'  =>  'ex-partner-employee/update',
        'parent_url'=>  'ex-partner-employee',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
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
        'auth_name' =>  '获取开发商人员下拉框',
        'auth_url'  =>  'ex-partner-employee/ex-partner-employee-list',
        'parent_url'=>  'ex-partner-employee',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '白少杰',
    ],
    [
        'auth_name' =>  '拓展创建楼盘',
        'auth_url'  =>  'yw-projects/expand-create-project',
        'parent_url'=>  'yw-projects/all',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
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
        'auth_name' =>  '公司人员关系	',
        'auth_url'  =>  'yw-project-partner/company-relation',
        'parent_url'=>  'yw-project-partner',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
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
        'auth_name' =>  '项目人员关系	',
        'auth_url'  =>  'yw-project-partner/project-relation',
        'parent_url'=>  'yw-project-partner',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
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
        'auth_name' =>  '签约单管理',
        'auth_url'  =>  'ex-sign',
        'parent_url'=>  'expand',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '白少杰',
    ],
    [
        'auth_name' =>  '签约单创建',
        'auth_url'  =>  'ex-sign/create',
        'parent_url'=>  'ex-sign',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  '白少杰',
    ],
    [
        'auth_name' =>  '签约单修改',
        'auth_url'  =>  'ex-sign/update',
        'parent_url'=>  'ex-sign',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  '白少杰',
    ],
    [
        'auth_name' =>  '签约单跟进页',
        'auth_url'  =>  'ex-sign/follow',
        'parent_url'=>  'ex-sign',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  '白少杰',
    ],
    [
        'auth_name' =>  '签约单审批管理',
        'auth_url'  =>  'ex-sign-approval',
        'parent_url'=>  'expand',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '白少杰',
    ],
    [
        'auth_name' =>  '签约单审批详情页',
        'auth_url'  =>  'ex-sign-approval/view',
        'parent_url'=>  'ex-sign-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '白少杰',
    ],
    [
        'auth_name' =>  '签约单审批撤消驳回',
        'auth_url'  =>  'ex-sign-approval/repeal',
        'parent_url'=>  'ex-sign-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '白少杰',
    ],
    [
        'auth_name' =>  '签约单审批发起页',
        'auth_url'  =>  'ex-sign/launch-approval',
        'parent_url'=>  'ex-sign-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  '白少杰',
    ],
    [
        'auth_name' =>  '签约单审批通过',
        'auth_url'  =>  'ex-approval-flow/approval',
        'parent_url'=>  'ex-sign-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '白少杰',
    ],
    [
        'auth_name' =>  '创建公司',
        'auth_url'  =>  'yw-project-partner/create',
        'parent_url'=>  'yw-project-partner',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
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
        'auth_name' =>  '公司详情页',
        'auth_url'  =>  'yw-project-partner/partner-detail',
        'parent_url'=>  'yw-project-partner',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
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
        'auth_name' =>  '修改公司',
        'auth_url'  =>  'yw-project-partner/update',
        'parent_url'=>  'yw-project-partner',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
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
        'auth_name' =>  '删除公司',
        'auth_url'  =>  'yw-project-partner/delete',
        'parent_url'=>  'yw-project-partner',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
        ],
        'creator'   =>  '白少杰',
    ],
    [
        'auth_name' =>  '获取公司下拉列表',
        'auth_url'  =>  'yw-project-partner/get-project-partner-list',
        'parent_url'=>  'yw-project-partner',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '白少杰',
    ],
    [
        'auth_name' =>  '获取楼盘下拉列表数据',
        'auth_url'  =>  'project/get-project-dropdown-list',
        'parent_url'=>  'project',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '白少杰',
    ],
    [
        'auth_name' =>  '业态下拉数据',
        'auth_url'  =>  'yw-projects/get-project-type-dropdown-list',
        'parent_url'=>  'cj-project-audit-by-role-data',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '白少杰',
    ],
    [
        'auth_name' =>  '获取区域下拉列表',
        'auth_url'  =>  'project/get-district-dropdown-list',
        'parent_url'=>  'project',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '白少杰',
    ],
    [
        'auth_name' =>  '员工信息的下拉联想',
        'auth_url'  =>  'employee/get-employee-dropdown-list',
        'parent_url'=>  'employee',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '白少杰',
    ],

    [
        'auth_name' =>  '地块管理',
        'auth_url'  =>  'ex-lots',
        'parent_url'=>  'expand',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '地块列表页',
        'auth_url'  =>  'ex-lots/index',
        'parent_url'=>  'ex-lots',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '新建地块',
        'auth_url'  =>  'ex-lots/create',
        'parent_url'=>  'ex-lots',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '编辑地块',
        'auth_url'  =>  'ex-lots/update',
        'parent_url'=>  'ex-lots',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '删除地块',
        'auth_url'  =>  'ex-lots/delete',
        'parent_url'=>  'ex-lots',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '获取地块下拉框',
        'auth_url'  =>  'ex-lots/ex-lots-list',
        'parent_url'=>  'ex-lots',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '话术价值点管理',
        'auth_url'  =>  'ex-speech-value',
        'parent_url'=>  'expand',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '话术价值点列表',
        'auth_url'  =>  'ex-speech-value/index',
        'parent_url'=>  'ex-speech-value',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '话术价值点编辑',
        'auth_url'  =>  'ex-speech-value/update',
        'parent_url'=>  'ex-speech-value',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '话术价值点编辑',
        'auth_url'  =>  'ex-speech-value/update',
        'parent_url'=>  'ex-speech-value',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '话术价值点删除',
        'auth_url'  =>  'ex-speech-value/delete',
        'parent_url'=>  'ex-speech-value',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
        ],
        'creator'   =>  'ChenChengzhuang',
    ],

    [
        'auth_name' =>  '拓展人员管理',
        'auth_url'  =>  'ex-employee',
        'parent_url'=>  'expand',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '拓展人员列表',
        'auth_url'  =>  'ex-employee/index',
        'parent_url'=>  'ex-employee',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '拓展人员编辑',
        'auth_url'  =>  'ex-employee/update',
        'parent_url'=>  'ex-employee',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '拓展相关配置',
        'auth_url'  =>  'ex-approval-config',
        'parent_url'=>  'expand',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '条款审批',
        'auth_url'  =>  'ex-approval-config/provision-approval',
        'parent_url'=>  'ex-approval-config',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '条款特批',
        'auth_url'  =>  'ex-approval-config/special-batch',
        'parent_url'=>  'ex-approval-config',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '合作特批',
        'auth_url'  =>  'ex-approval-config/cooperation-approval',
        'parent_url'=>  'ex-approval-config',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '主推楼盘-添加',
        'auth_url'  =>  'yw-main-push-project/create',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '主推楼盘-编辑',
        'auth_url'  =>  'yw-main-push-project/update',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '主推楼盘-楼盘下拉',
        'auth_url'  =>  'yw-main-push-project/get-project-dropdown-list',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'ChenChengzhuang',
    ],

    [
        'auth_name' =>  '主推楼盘信息--房源信息录入页',
        'auth_url'  =>  'yw-main-push-project-inventory/create',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '新增变更通知-验证每分钟20条',
        'auth_url'  =>  'project-change-notify/check-pre-minute',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '见习期转正审批发起',
        'auth_url'  =>  'hr-approval-intern-regular/create',
        'parent_url'=>  'hr-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '转组审批发起',
        'auth_url'  =>  'hr-approval-group-transfer/create',
        'parent_url'=>  'hr-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '转岗审批发起',
        'auth_url'  =>  'hr-approval-job-transfer/create',
        'parent_url'=>  'hr-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '晋升审批发起',
        'auth_url'  =>  'hr-approval-promotion/promotion',
        'parent_url'=>  'hr-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '离职申请&交接',
        'auth_url'  =>  'hr-turn-positive-probationer/create',
        'parent_url'=>  'hr-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '增加编制',
        'auth_url'  =>  'hr-approval-add-unit/create',
        'parent_url'=>  'hr-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '调薪',
        'auth_url'  =>  'hr-approval-salary/salary',
        'parent_url'=>  'hr-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '休假',
        'auth_url'  =>  'hr-approval-vacation/create',
        'parent_url'=>  'hr-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '考勤申诉',
        'auth_url'  =>  'hr-approval-check/create-check-approval',
        'parent_url'=>  'hr-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '加班',
        'auth_url'  =>  'hr-approval-overjob/overjob',
        'parent_url'=>  'hr-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'ChenChengzhuang',
    ],

    [
        'auth_name' =>  '外出',
        'auth_url'  =>  'hr-approval-out/create',
        'parent_url'=>  'hr-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'ChenChengzhuang',
    ],

    [
        'auth_name' =>  '出差',
        'auth_url'  =>  'hr-approval-evection/create',
        'parent_url'=>  'hr-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '合同审批',
        'auth_url'  =>  'cw-approval/create',
        'parent_url'=>  'hr-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'ChenChengzhuang',
    ],

    [
        'auth_name' =>  '网签列表页-确认单审核',
        'auth_url'  =>  'yw-sign-list/confirm-pass',
        'parent_url'=>  'yw-sign-list',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '楼盘学习成绩管理',
        'auth_url'  =>  'tr-employee/index',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],

    [
        'auth_name' =>  '资源中心',
        'auth_url'  =>  'tr-resource/index',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '附件上传权限',
        'auth_url'  =>  'tr-resource/create',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],

    [
        'auth_name' =>  '报表',
        'auth_url'  =>  'stat-backend/get-json-stat-table-only-list',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],

    [
        'auth_name' =>  '变更通知-编辑通知标签',
        'auth_url'  =>  'cj-project-change-notify-category/create',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    //
    [
        'auth_name' =>  '主推楼盘-楼盘佣金信息',
        'auth_url'  =>  'yw-main-push-project/get-project-info',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '变更通知-删除通知标签',
        'auth_url'  =>  'project-change-notify/delete',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],

    [
        'auth_name' =>  '变更通知-删除通知标签',
        'auth_url'  =>  'project-change-notify/delete',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '变更通知-新增通知标签',
        'auth_url'  =>  'project-change-notify/create',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '网签列表页',
        'auth_url'  =>  'yw-sign-list/index',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '网签列表页',
        'auth_url'  =>  'yw-sign-list/index',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '个人工作台',
        'auth_url'  =>  'hr-employee-check/work-bench',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '条款审批固定的岗位下拉框',
        'auth_url'  =>  'ex-approval-config/get-post-select-two',
        'parent_url'=>  'ex-approval-config',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '条款审批固定的人下拉框',
        'auth_url'  =>  'ex-approval-config/get-employee-dropdown-list',
        'parent_url'=>  'ex-approval-config',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '条款审批修改',
        'auth_url'  =>  'ex-approval-config/edit-approval-config',
        'parent_url'=>  'ex-approval-config',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
	[
		'auth_name' =>  'bd单跟进',
		'auth_url'  =>  'bd-follow',
		'parent_url'=>  'expand',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_db_manager,         //拓展主管
			RbacConstant::$role_estate_expand,         //拓展专员
			RbacConstant::$role_group_expand_charger,         //集团拓展主管
			RbacConstant::$role_group_expand_person,         //集团拓展专员
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' =>  'bd单跟进-模拟邀约，模拟谈判，联系，见面（预约，跟进，修改）',
		'auth_url'  =>  'ex-follow/follow',
		'parent_url'=>  'bd-follow',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_db_manager,         //拓展主管
			RbacConstant::$role_estate_expand,         //拓展专员
			RbacConstant::$role_group_expand_charger,         //集团拓展主管
			RbacConstant::$role_group_expand_person,         //集团拓展专员
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' =>  'bd单跟进-修改实际联系记录',
		'auth_url'  =>  'ex-follow/edit-real-contact',
		'parent_url'=>  'bd-follow',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_db_manager,         //拓展主管
			RbacConstant::$role_estate_expand,         //拓展专员
			RbacConstant::$role_group_expand_charger,         //集团拓展主管
			RbacConstant::$role_group_expand_person,         //集团拓展专员
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' =>  'bd单跟进-修改实际见面记录',
		'auth_url'  =>  'ex-follow/edit-real-meet',
		'parent_url'=>  'bd-follow',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_db_manager,         //拓展主管
			RbacConstant::$role_estate_expand,         //拓展专员
			RbacConstant::$role_group_expand_charger,         //集团拓展主管
			RbacConstant::$role_group_expand_person,         //集团拓展专员
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' =>  'bd单跟进-获取预约见面模板',
		'auth_url'  =>  'ex-follow/plan-meet',
		'parent_url'=>  'bd-follow',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_db_manager,         //拓展主管
			RbacConstant::$role_estate_expand,         //拓展专员
			RbacConstant::$role_group_expand_charger,         //集团拓展主管
			RbacConstant::$role_group_expand_person,         //集团拓展专员
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' =>  'bd单跟进-获取预约模拟邀约模板',
		'auth_url'  =>  'ex-invitation/plan-contact',
		'parent_url'=>  'bd-follow',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_db_manager,         //拓展主管
			RbacConstant::$role_estate_expand,         //拓展专员
			RbacConstant::$role_group_expand_charger,         //集团拓展主管
			RbacConstant::$role_group_expand_person,         //集团拓展专员
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' =>  'bd单跟进-获取预约模拟谈判模板',
		'auth_url'  =>  'ex-talks/plan-talk',
		'parent_url'=>  'bd-follow',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_db_manager,         //拓展主管
			RbacConstant::$role_estate_expand,         //拓展专员
			RbacConstant::$role_group_expand_charger,         //集团拓展主管
			RbacConstant::$role_group_expand_person,         //集团拓展专员
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' =>  'bd单跟进-获取预约联系模板',
		'auth_url'  =>  'ex-contact/plan-contact',
		'parent_url'=>  'bd-follow',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_db_manager,         //拓展主管
			RbacConstant::$role_estate_expand,         //拓展专员
			RbacConstant::$role_group_expand_charger,         //集团拓展主管
			RbacConstant::$role_group_expand_person,         //集团拓展专员
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' =>  'bd单跟进-获取bd单跟进人select2 url',
		'auth_url'  =>  'employee/get-ex-follower-dropdown-list',
		'parent_url'=>  'bd-follow',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' =>  'bd单发起审批',
		'auth_url'  =>  'ex-sign/approval',
		'parent_url'=>  'bd-follow',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_db_manager,         //拓展主管
			RbacConstant::$role_estate_expand,         //拓展专员
			RbacConstant::$role_group_expand_charger,         //集团拓展主管
			RbacConstant::$role_group_expand_person,         //集团拓展专员
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' =>  'bd单签约单列表页',
		'auth_url'  =>  'ex-sign/list',
		'parent_url'=>  'bd-follow',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' =>  '根据楼盘获取签约单列表页',
		'auth_url'  =>  'ex-sign/list-by-project',
		'parent_url'=>  'bd-follow',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' =>  '获取合同费率',
		'auth_url'  =>  'ex-contract/get-rate',
		'parent_url'=>  '',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_channel_manager,    //渠道经理
			RbacConstant::$role_channel_charger,    //渠道主管
			RbacConstant::$role_group_expand_charger,         //集团拓展主管
			RbacConstant::$role_group_expand_person,         //集团拓展专员
			RbacConstant::$role_business_charger,   //商务主管
			RbacConstant::$role_bd_specialist,      //商务专员
			RbacConstant::$role_db_manager,         //拓展主管
			RbacConstant::$role_estate_expand,         //拓展专员
		],
		'creator'   =>  '徐程亮',
	],
    [
        'auth_name' =>  'BD删除项目学习',
        'auth_url'  =>  'ex-learn/delete',
        'parent_url'=>  'ex-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'auth_name' =>  'BD确认收到分配',
        'auth_url'  =>  'ex-order/confirm',
        'parent_url'=>  'ex-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'auth_name' =>  'BD修改跟进人',
        'auth_url'  =>  'ex-order/change-follow',
        'parent_url'=>  'ex-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_channel_manager,    //渠道经理
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'auth_name' =>  'BD停止跟进',
        'auth_url'  =>  'ex-order/stop-follow',
        'parent_url'=>  'ex-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_channel_manager,    //渠道经理
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'auth_name' =>  '报备记录管理-导出',
        'auth_url'  =>  'yw-report/export',
        'parent_url'=>  'yw-report',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'xiewei',
    ],

    [
        'auth_name' =>  '报备记录管理-审核',
        'auth_url'  =>  'yw-report/audit',
        'parent_url'=>  'yw-report',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'auth_name' =>  'BD模拟邀约结果确认',
        'auth_url'  =>  'ex-follow/confirm',
        'parent_url'=>  'ex-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'auth_name' =>  'BD基本信息编辑',
        'auth_url'  =>  'ex-order/update',
        'parent_url'=>  'ex-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'auth_name' =>  '签约单审批列表页',
        'auth_url'  =>  'ex-sign-approval/index',
        'parent_url'=>  'ex-sign-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
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
        'auth_name' =>  'BD列表',
        'auth_url'  =>  'ex-order/index',
        'parent_url'=>  'ex-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'xiewei',
    ],

    [
        'auth_name' =>  'BD列表页-新增',
        'auth_url'  =>  'ex-order/create',
        'parent_url'=>  'ex-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'auth_name' =>  'BD列表页-详情页-查看',
        'auth_url'  =>  'ex-order/view',
        'parent_url'=>  'ex-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'auth_name' =>  'BD列表页-详情页-跟进',
        'auth_url'  =>  'ex-order/change-follow',
        'parent_url'=>  'ex-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'auth_name' =>  'BD项目学习',
        'auth_url'  =>  'ex-learn/index',
        'parent_url'=>  'ex-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'auth_name' =>  'BD跟进寻人',
        'auth_url'  =>  'ex-find-people/index',
        'parent_url'=>  'ex-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'auth_name' =>  'BD创建学习',
        'auth_url'  =>  'ex-learn/create',
        'parent_url'=>  'ex-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'auth_name' =>  'BD创建寻人记录',
        'auth_url'  =>  'ex-find-people/create',
        'parent_url'=>  'ex-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'auth_name' =>  '回款详情页',
        'auth_url'  =>  'ex-payment-detail/view',
        'parent_url'=>  'yw-payment-info',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'auth_name' =>  '合同管理-查看合同',
        'auth_url'  =>  'ex-contract/view',
        'parent_url'=>  'ex-contract',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'auth_name' =>  '回款详情页-修改本套佣金',
        'auth_url'  =>  'ex-payment-detail/edit-commission',
        'parent_url'=>  'yw-payment-info',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
        ],
        'creator'   =>  'xiewei',
    ],
    [
        'auth_name' =>  '合同1-回款负责人',
        'auth_url'  =>  'ex-contract/update-contract-payback',
        'parent_url'=>  'ex-contract',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_db_manager,         //拓展主管
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '合同管理-删除合同',
        'auth_url'  =>  'ex-contract/delete',
        'parent_url'=>  'ex-contract',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  '白少杰',
    ],


    [
        'auth_name' =>  '合同1-回款负责人',
        'auth_url'  =>  'ex-contract/update-contract-payback',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_db_manager,         //拓展主管
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '合同管理-删除合同',
        'auth_url'  =>  'ex-contract/delete',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_db_manager,         //拓展主管
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '合同管理-编辑合同',
        'auth_url'  =>  'ex-contract/update',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '合同管理-添加合同',
        'auth_url'  =>  'ex-contract/create',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '报备错误',
        'auth_url'  =>  'yw-report/report-err',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '报备错误-获取责任咨询师',
        'auth_url'  =>  'yw-report-error-record/get-responsible-employee',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  '谢伟',
    ],

    [
        'auth_name' =>  '报备记录管理-修改备注',
        'auth_url'  =>  'yw-report/edit-note',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '报备记录管理-列表页',
        'auth_url'  =>  'yw-report/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '报备记录管理-列表页',
        'auth_url'  =>  'yw-report/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '楼盘商务信息管理-结佣合同-查看',
        'auth_url'  =>  'ex-contract/view',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '拓展相关配置-合作特批',
        'auth_url'  =>  'ex-approval-config/cooperation-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '拓展相关配置-条款特批',
        'auth_url'  =>  'ex-approval-config/special-batch',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '拓展相关配置-条款审批',
        'auth_url'  =>  'ex-approval-config/provision-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '成交发票管理-发票报表',
        'auth_url'  =>  'yw-invoice/deal-invoice-report',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_finance,    //财务
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '成交发票管理-发起申请列表页',
        'auth_url'  =>  'yw-invoice/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_finance,    //财务
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '成交发票管理-申请开发票',
        'auth_url'  =>  'yw-invoice/create',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_project_charger,    //项目主管
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '成交发票管理-查看',
        'auth_url'  =>  'yw-invoice/view',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_project_charger,    //项目主管
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '商务专员城市配置-查看',
        'auth_url'  =>  'yw-employee-city/list-bd',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '楼盘商务信息管理-列表页',
        'auth_url'  =>  'project/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_project_charger,    //项目主管
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '成交单列表页',
        'auth_url'  =>  'yw-deal/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_project_charger,    //项目主管
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '回款信息管理-查看',
        'auth_url'  =>  'yw-payment-info/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  '谢伟',
    ],

    [
        'auth_name' =>  '楼盘详情',
        'auth_url'  =>  'yw-project-list/view',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_project_charger,    //项目主管
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '楼盘管理-查看楼盘信息',
        'auth_url'  =>  'yw-projects/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_project_charger,    //项目主管
        ],
        'creator'   =>  '谢伟',
    ],

    [
        'auth_name' =>  '楼盘管理-新增变更通知',
        'auth_url'  =>  'project-change-notify/create',
        'parent_url'=>  'yw-project-list',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,
            RbacConstant::$role_channel_charger,
            RbacConstant::$role_project_charger,
            RbacConstant::$role_group_expand_charger,
            RbacConstant::$role_group_expand_person,
            RbacConstant::$role_business_charger, //商务主管
            RbacConstant::$role_db_manager, //拓展部主管
            RbacConstant::$role_bd_specialist, //商务专员
            RbacConstant::$role_estate_expand, //拓展专员
            RbacConstant::$role_field_manager, //项目专员
        ],
        'creator'   =>  '彭求诚',
    ],
    [
        'auth_name' =>  '楼盘管理-编辑楼盘商务信息',
        'auth_url'  =>  'yw-project-business/view',
        'parent_url'=>  'yw-project-business',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,
            RbacConstant::$role_channel_charger,
            RbacConstant::$role_project_charger,
            RbacConstant::$role_group_expand_charger,
            RbacConstant::$role_group_expand_person,
            RbacConstant::$role_business_charger, //商务主管
            RbacConstant::$role_db_manager, //拓展部主管
            RbacConstant::$role_bd_specialist, //商务专员
            RbacConstant::$role_estate_expand, //拓展专员
            RbacConstant::$role_field_manager, //项目专员
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '客户楼盘转化-列表',
        'auth_url'  =>  'customer-conversion/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_db_manager,    //拓展主管
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '商务专员城市配置-编辑',
        'auth_url'  =>  'yw-employee-city/update',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_business_charger, //商务主管
            RbacConstant::$role_bd_specialist, //商务专员
            RbacConstant::$role_channel_manager,    //渠道经理
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '楼盘商务信息管理-创建',
        'auth_url'  =>  'yw-project-business/create',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role' => [
            RbacConstant::$role_business_charger, //商务主管
            RbacConstant::$role_bd_specialist, //商务专员
        ],
        'creator'   =>  '谢伟',
    ],
    [
        'auth_name' =>  '回款详情-回款跟进',
        'auth_url'  =>  'ex-payment-detail/payment-follow',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
        ],
        'creator'   =>  '谢伟',
    ],


    [
        'auth_name' =>  '咨询师订单列表',
        'auth_url'  =>  'yw-order/index',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '咨询师订单列表-ajax',
        'auth_url'  =>  'yw-order/index-ajax',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '跟进记录管理—列表',
        'auth_url'  =>  'yw-order/index-ajax',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '成交单记录页',
        'auth_url'  =>  'yw-deal/view',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '图片上传',
        'auth_url'  =>  'upload/upload-img',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '排号列表页',
        'auth_url'  =>  'yw-paihao/index',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '展示认购列表',
        'auth_url'  =>  'yw-subscribe-list/index',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '草签列表	',
        'auth_url'  =>  'yw-sign-grass-list/index',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '网签列表',
        'auth_url'  =>  'yw-sign-list/index',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '网签列表页-确认单审核',
        'auth_url'  =>  'yw-sign-list/confirm-pass',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '认购列表-确认单审核通过	',
        'auth_url'  =>  'yw-subscribe-list/confirm-pass',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '咨询师带看情况查询',
        'auth_url'  =>  'yw-see-project-list/employee-see-project',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '带看记录首页',
        'auth_url'  =>  'yw-see-project/index',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '变更通知-变更通知查看',
        'auth_url'  =>  'project-change-notify/index_new',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '问答知识库-列表页',
        'auth_url'  =>  'qa-question/index',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '主推楼盘库存',
        'auth_url'  =>  'yw-main-push-project-inventory/current',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '文件上传-获取上传签名',
        'auth_url'  =>  'upload/get-upload-sign',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '审核签约',
        'auth_url'  =>  'yw-sign-list/audit',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '主推楼盘-获取楼盘名称',
        'auth_url'  =>  'yw-main-push-project/get-project-name',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '知识问答库-点赞',
        'auth_url'  =>  'qa-question/employee-like',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '话术价值点管理',
        'auth_url'  =>  'ex-speech-value',
        'parent_url'=>  'expand',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '话术价值点列表',
        'auth_url'  =>  'ex-speech-value/index',
        'parent_url'=>  'ex-speech-value',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '话术价值点编辑',
        'auth_url'  =>  'ex-speech-value/update',
        'parent_url'=>  'ex-speech-value',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '话术价值点删除',
        'auth_url'  =>  'ex-speech-value/delete',
        'parent_url'=>  'ex-speech-value',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '话术价值点新建',
        'auth_url'  =>  'ex-speech-value/create',
        'parent_url'=>  'ex-speech-value',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
    'auth_name' =>  '审批统计页-列表页',
    'auth_url'  =>  'hr-approval-apply/index',
    'parent_url'=>  '',
    'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
    'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '人事审批通过',
        'auth_url'  =>  'hr-approval-apply/pass',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '人事审批驳回',
        'auth_url'  =>  'hr-approval-apply/reject',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '人事审批撤回',
        'auth_url'  =>  'hr-approval-apply/revoke',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '审批详情-下载审批单',
        'auth_url'  =>  'hr-approval-record/download-form',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '审批详情-获取下载链接',
        'auth_url'  =>  'hr-approval-record/get-form-page',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '订单详情',
        'auth_url'  =>  'yw-follow-up/index',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],

    [
        'auth_name' =>  '审批统计详情页',
        'auth_url'  =>  'hr-approval-record/detail',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '考勤详情',
        'auth_url'  =>  'hr-employee-check/check-list',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '人力系统-获取员工信息下拉列表',
        'auth_url'  =>  'hr-employee/get-employee-dropdown-list',
        'parent_url'=>  '',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
        ],
        'creator'   =>  'ChenChengzhuang',
    ],

//
//
];
