<?php
/**
 * Created by PhpStorm.
 * User: zhangpengfei
 * Date: 2018/10/18
 * Time: 10:07
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

namespace console\template\menu;

use common\constants\CommonConstant;
use common\constants\RbacConstant;

return [
    [
        'menu_name'  => '驻场项目管理',
        'menu_url'   => 'cj-project-resident/index',
        'parent_url' => 'expand',
        'role_type'  => CommonConstant::ROLE_TYPE_ADD,
        'role'       => [
            RbacConstant::$role_admin,              // 总管理员
            RbacConstant::$role_channel_manager,    // 渠道经理
            RbacConstant::$role_channel_charger,    // 渠道主管
            RbacConstant::$role_project_charger,    // 项目主管
            RbacConstant::$role_field_manager,      // 项目专员
            RbacConstant::$role_business_charger,   // 商务主管
            RbacConstant::$role_db_manager,         // 拓展主管
            RbacConstant::$role_estate_expand,      // 拓展专员
            RbacConstant::$role_group_expand_charger,   // 集团拓展主管
            RbacConstant::$role_group_expand_person,    // 集团拓展专员
        ],
        'creator'     => '张鹏飞',
        'sort'=> 69,
    ]
];

