<?php
namespace console\template\auth\b_914_20180910_backend;

/**
 * @author: pengqiucheng<pengqiucheng@julive.com>
 * @date: 2018/8/29
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
        'auth_name' => '合作方回款情况报表',
        'auth_url' => 'receivable-status',
        'parent_url' => 'expand',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
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
        'auth_name' => '合作方回款情况列表',
        'auth_url' => 'yw-deal/receivable-status',
        'parent_url' => 'receivable-status',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
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
        'auth_name' => '回款目标配置页',
        'auth_url' => 'ex-payment-target',
        'parent_url' => 'expand',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
        ],
        'creator'   =>  'chenchengzhuang',
    ],
    [
        'auth_name' => '预计回款列表页',
        'auth_url' => 'ex-payment-target/index	',
        'parent_url' => 'ex-payment-target',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管

        ],
        'creator'   =>  'chenchengzhuang',
    ],
    [
        'auth_name' => '预计回款编辑',
        'auth_url' => 'ex-payment-target/update',
        'parent_url' => 'ex-payment-target',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管

        ],
        'creator'   =>  'chenchengzhuang',
    ],
    [
        'auth_name' => '预计回款新增',
        'auth_url' => 'ex-payment-target/create',
        'parent_url' => 'ex-payment-target',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管

        ],
        'creator'   =>  'chenchengzhuang',
    ],
];
