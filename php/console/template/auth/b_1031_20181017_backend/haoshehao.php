<?php
namespace console\template\auth\b_1031_20181017_backend;

/**
 * @date: 2018/10/22
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
        'auth_name' =>  '资金账户新增页',
        'auth_url'  =>  'cw-account/create',
        'parent_url'=>  'cw-account',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [RbacConstant::$role_finance],
        'creator'   =>  '郝涉浩',
    ],
    [
        'auth_name' =>  '资金账户编辑页',
        'auth_url'  =>  'cw-account/update',
        'parent_url'=>  'cw-account',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [RbacConstant::$role_finance],
        'creator'   =>  '郝涉浩',
    ],
    [
        'auth_name' =>  '资金账户列表',
        'auth_url'  =>  'cw-account/index',
        'parent_url'=>  'cw-account',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [RbacConstant::$role_finance],
        'creator'   =>  '郝涉浩',
    ],
    [
        'auth_name' =>  '资金账户表单验证',
        'auth_url'  =>  'cw-account/validate-view',
        'parent_url'=>  'cw-account',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [RbacConstant::$role_finance],
        'creator'   =>  '郝涉浩',
    ],
    [
        'auth_name' =>  '报销明细详情编辑页',
        'auth_url'  =>  'cw-account/account-detail',
        'parent_url'=>  'cw-account',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [RbacConstant::$role_finance],
        'creator'   =>  '郝涉浩',
    ],
];
?>