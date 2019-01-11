<?php
namespace console\template\menu\b_869_20180829_backend;

/**
 * @author: pengqiucheng<pengqiucheng@julive.com>
 * @date: 2018/9/3 18:51
 */

/**
 * 869分支上线菜单配置数组
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
        'menu_name'  =>'个人工作台', 	//菜单名称
        'menu_url'   =>'zp-city-hr/show-city-hr-list',  	//菜单路由
        'parent_url' =>'zp-manage', 	      //父级菜单路由
        'role_type'  =>CommonConstant::ROLE_TYPE_RECOVER,        //角色类型 add新增角色 reduce减少角色 recover覆盖角色
        'role'       =>[
            RbacConstant::$role_zp_city_hr,
        ],
        'sort'=>100
    ],

];


