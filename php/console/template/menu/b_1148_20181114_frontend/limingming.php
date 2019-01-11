<?php
namespace console\template\menu;

/**
 * 分支上线菜单配置数组
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
        'menu_name' =>  '楼市头条文章',
        'menu_url'  =>  'cms-cj-project-headline/index',
        'parent_url'=>  'cms-neirongguanli',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_admin,
            RbacConstant::$role_super_admin,
        ],
        'creator'   =>  '李明明',
    ],
];