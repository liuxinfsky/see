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
    [
        'auth_name' =>  '人力系统公共权限',
        'auth_url'  =>  'hr-common',
        'parent_url'=>  'hr-manage',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '彭求诚',
    ],
    [
        'auth_name' =>  '发送短信',
        'auth_url'  =>  'hr-upload/send-sms',
        'parent_url'=>  'hr-common',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '彭求诚',
    ],
    ];
?>