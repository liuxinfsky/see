<?php
namespace console\template\menu\b_869_20180829_backend;

/**
 * @author: haoshehao<haoshehao@julive.com>
 * @date: 2018/10/11
 */

/**
 * 869分支上线菜单配置数组
 * @author: haoshehao<haoshehao@julive.com>
 * @date: 2018/10/11
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

return
[
    [
        'menu_name'  =>'批量转移候选人', 	//菜单名称
        'menu_url'   =>'zp-orderlist-moving/index',  	//菜单路由
        'parent_url' =>'zp-manage', 	      //父级菜单路由
        'role_type'  =>CommonConstant::ROLE_TYPE_RECOVER,        //角色类型 add新增角色 reduce减少角色 recover覆盖角色
        'role'       =>[
            RbacConstant::$role_zp_admin
        ],
        'sort'=>80,
    ]
];