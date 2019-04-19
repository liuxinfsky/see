<?php
namespace console\template\auth\b_855_20180823_backend;

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
	[	//人力高级，人力超级，以及总管理员
		'auth_name' =>  '人力系统配置',
		'auth_url'  =>  'hr-approval-config',
		'parent_url'=>  'hr-manage',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		 'role'      =>  CommonConstant::ADD_ROLE_ALL,
		 'creator'   =>  '白少杰',
	],
	[	//人力高级，人力超级，以及总管理员
		'auth_name' =>  '自定义审批流列表页',
		'auth_url'  =>  'hr-approval-config/index',
		'parent_url'=>  'hr-approval-config',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role'      =>   [
			RbacConstant::$role_hr_senior_manager,
			RbacConstant::$role_hr_admin,
			RbacConstant::$role_admin,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '自定义审批流修改可用状态',
		'auth_url'  =>  'hr-approval-type/update',
		'parent_url'=>  'hr-approval-config',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role'      =>  [
			RbacConstant::$role_hr_senior_manager,
			RbacConstant::$role_hr_admin,
			RbacConstant::$role_admin,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '自定义审批流删除配置',
		'auth_url'  =>  'hr-approval-type/delete',
		'parent_url'=>  'hr-approval-config',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role'      =>  [
			RbacConstant::$role_hr_senior_manager,
			RbacConstant::$role_hr_admin,
			RbacConstant::$role_admin,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '审批配置页面',
		'auth_url'  =>  'hr-appoval-config/edit-approval-config',
		'parent_url'=>  'hr-approval-config',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role'      =>  [
			RbacConstant::$role_hr_senior_manager,
			RbacConstant::$role_hr_admin,
			RbacConstant::$role_admin,
		],
		'creator'   =>  '白少杰',
	],
];
