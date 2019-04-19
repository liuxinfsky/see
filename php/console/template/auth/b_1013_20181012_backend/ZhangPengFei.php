<?php
namespace console\template\auth\b_1013_20181012_backend;
/**
 * Created by PhpStorm.
 * User: zhangpengfei
 * Date: 2018/10/30
 * Time: 12:48
 */

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
        'auth_name' => '驻场项目列表',
        'auth_url'  => 'cj-project-resident/index',
        'parent_url'=> 'cj-project-resident',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role'      => [
            RbacConstant::$role_admin,                  // 总管理员
            RbacConstant::$role_channel_manager,        // 渠道经理
            RbacConstant::$role_channel_charger,        // 渠道主管
            RbacConstant::$role_project_charger,        // 项目主管
            RbacConstant::$role_field_manager,          // 项目专员
            RbacConstant::$role_business_charger,       // 商务主管
            RbacConstant::$role_db_manager,             // 拓展主管
            RbacConstant::$role_estate_expand,          // 拓展专员
            RbacConstant::$role_group_expand_charger,   // 集团拓展主管
            RbacConstant::$role_group_expand_person,    // 集团拓展专员
        ],
        'creator'   =>  '张鹏飞',
    ],
    [
        'auth_name' => '新增驻场项目',
        'auth_url'  => 'cj-project-resident/create',
        'parent_url'=> 'cj-project-resident',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role'      => [
            RbacConstant::$role_admin,                  // 总管理员
            RbacConstant::$role_channel_manager,        // 渠道经理
            RbacConstant::$role_channel_charger,        // 渠道主管
            RbacConstant::$role_project_charger,        // 项目主管
            RbacConstant::$role_db_manager,             // 拓展主管
            RbacConstant::$role_group_expand_charger,   // 集团拓展主管
        ],
        'creator'   =>  '张鹏飞',
    ],
    [
        'auth_name' => '修改驻场项目',
        'auth_url'  => 'cj-project-resident/update',
        'parent_url'=> 'cj-project-resident',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role'      => [
            RbacConstant::$role_admin,                  // 总管理员
            RbacConstant::$role_channel_manager,        // 渠道经理
            RbacConstant::$role_channel_charger,        // 渠道主管
            RbacConstant::$role_project_charger,        // 项目主管
            RbacConstant::$role_db_manager,             // 拓展主管
            RbacConstant::$role_group_expand_charger,   // 集团拓展主管
        ],
        'creator'   =>  '张鹏飞',
    ],
    [
        'auth_name' => '驻场项目详情',
        'auth_url'  => 'cj-project-resident/view',
        'parent_url'=> 'cj-project-resident',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role'      => RbacConstant::$role_all,
        'creator'   =>  '张鹏飞',
    ],
    [
        'auth_name' => '驻场详情页-居理今日到访数据异步获取',
        'auth_url'  => 'cj-project-resident/visit-data',
        'parent_url'=> 'cj-project-resident',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role'      => RbacConstant::$role_all,
        'creator'   =>  '张鹏飞',
    ],
    [
        'auth_name' => '居理到访实际到访tab-确认到访',
        'auth_url'  => 'cj-project-resident/confirm-visited',
        'parent_url'=> 'cj-project-resident',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role'      => [
            RbacConstant::$role_admin,              // 总管理员
            RbacConstant::$role_channel_manager,    // 渠道经理
            RbacConstant::$role_channel_charger,    // 渠道主管
            RbacConstant::$role_project_charger,    // 项目主管
            RbacConstant::$role_field_manager,      // 项目专员
            RbacConstant::$role_db_manager,         // 拓展主管
            RbacConstant::$role_estate_expand,      // 拓展专员
            RbacConstant::$role_group_expand_charger,   // 集团拓展主管
            RbacConstant::$role_group_expand_person,    // 集团拓展专员
        ],
        'creator'   =>  '张鹏飞',
    ],
    [
        'auth_name' => '居理到访数数据编辑',
        'auth_url'  => 'cj-project-resident/update-order-ext',
        'parent_url'=> 'cj-project-resident',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role'      => [
            RbacConstant::$role_admin,              // 总管理员
            RbacConstant::$role_channel_manager,    // 渠道经理
            RbacConstant::$role_channel_charger,    // 渠道主管
            RbacConstant::$role_project_charger,    // 项目主管
            RbacConstant::$role_field_manager,      // 项目专员
            RbacConstant::$role_db_manager,         // 拓展主管
            RbacConstant::$role_estate_expand,      // 拓展专员
            RbacConstant::$role_group_expand_charger,   // 集团拓展主管
            RbacConstant::$role_group_expand_person,    // 集团拓展专员
        ],
        'creator'   =>  '张鹏飞',
    ],
    [
        'auth_name' => '居理到访历史数据查看',
        'auth_url'  => 'yw-project-sale-info/list',
        'parent_url'=> 'bd-order',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role'      => RbacConstant::$role_all,
        'creator'   =>  '张鹏飞',
    ],
    [
        'auth_name' => '居理到访历史数据导出',
        'auth_url'  => 'yw-project-sale-info/export',
        'parent_url'=> 'bd-order',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role'      => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '张鹏飞',
    ],
    [
        'auth_name' => '驻场详情页-服务管理板块数据异步获取',
        'auth_url'  => 'cj-project-resident/service-data',
        'parent_url'=> 'cj-project-resident',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role'      => RbacConstant::$role_all,
        'creator'   =>  '张鹏飞',
    ],
    [
        'auth_name' => '驻场详情页-驻场服务报告相关附件下载',
        'auth_url'  => 'cj-project-resident/download-attachment',
        'parent_url'=> 'cj-project-resident',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role'      => RbacConstant::$role_all,
        'creator'   =>  '张鹏飞',
    ],
    [
        'auth_name' => '查看楼盘',
        'auth_url'  => 'yw-projects/view',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role'      => [
            RbacConstant::$role_channel_manager,        // 渠道经理
            RbacConstant::$role_channel_charger,        // 渠道主管
            RbacConstant::$role_group_expand_charger,   // 集团拓展主管
            RbacConstant::$role_business_charger,       // 商务主管
            RbacConstant::$role_project_charger,        // 项目主管
            RbacConstant::$role_db_manager,             // 拓展主管
            RbacConstant::$role_field_manager,          // 项目专员
            RbacConstant::$role_bd_specialist,          // 商务专员
            RbacConstant::$role_estate_expand,          // 拓展专员
            RbacConstant::$role_group_expand_person,    // 集团拓展专员
        ],
        'creator'   =>  '张鹏飞',
    ],
];