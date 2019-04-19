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
		 'auth_name' =>  '自定义审批表单创建编辑',
		 'auth_url'  =>  'hr-approval/custom-form',
		 'parent_url'=>  'hr-approval-config',
		 'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		 'role'      =>   [
			 RbacConstant::$role_hr_senior_manager,
			 RbacConstant::$role_hr_admin,
			 RbacConstant::$role_admin,
		 ],
		 'creator'   =>  '徐程亮',
	],
	[
		'auth_name' =>  '自定义审批发起',
		'auth_url'  =>  'hr-approval/custom-approval',
		'parent_url'=>  'hr-approval',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  CommonConstant::ADD_ROLE_ALL
	],
];
