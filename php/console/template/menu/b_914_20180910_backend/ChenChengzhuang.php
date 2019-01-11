<?php
namespace console\template\menu;

use common\constants\CommonConstant;
use common\constants\RbacConstant;

return [
    [
        'menu_name' => '合作方回款情况报表',
        'menu_url' => 'yw-deal/receivable-status',
        'parent_url' => 'expand',
        'menu_type'=>'1',
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
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'menu_name' => '回款目标配置页',
        'menu_url' => 'ex-payment-target/index',
        'parent_url' => 'ex-approval-config',
        'menu_type'=>'1',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
];