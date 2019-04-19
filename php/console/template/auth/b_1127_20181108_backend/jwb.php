<?php
namespace console\template\auth\b_1127_20181108_backend;

/**
 * @author: jiaweibin
 * @date: 2018/11/15
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
        'auth_name' => '家财险统计页-列表',
        'auth_url' => 'yw-insure/index',
        'parent_url' => 'yw-insure',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,
            RbacConstant::$role_data_operation_specialist,
            RbacConstant::$role_finance,
        ],
        'creator'   =>  'jiaweibin',
    ],


];
