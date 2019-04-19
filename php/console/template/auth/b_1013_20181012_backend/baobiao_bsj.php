<?php
namespace console\template\auth\b_1013_20181012_backend;

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
//************************  报表权限   *******************//

return [


	[
		'auth_name' =>  '客服上户日常统计-列表页',
		'auth_url'  =>  'yw-service-order-on-stat/index',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '客服上户日常统计-列表页-ajax',
		'auth_url'  =>  'yw-service-order-on-stat/get-stats',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '客服上户日常统计-导出',
		'auth_url'  =>  'yw-service-order-on-stat/export-excel',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '报表',
		'auth_url'  =>  'stat-backend/get-json-stat-table-only-list',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],


];
