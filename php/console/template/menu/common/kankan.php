<?php
/**
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

namespace console\template\menu\common;

use common\constants\CommonConstant;
use common\constants\RbacConstant;

return [
	[
		'menu_name' =>  '侃侃而坛首页管理-列表页',
		'menu_url'  =>  'bbs-forum/index',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],

];

