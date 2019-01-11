<?php
namespace console\template\auth\b_1217_20181130_backend;
/**
 * @author: lj
 * @date: 2018/12/03
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
        'auth_name' => '用户评论列表-替换图片',
        'auth_url' => 'yw-order-comment/upload-img',
        'parent_url' => 'yw-order-comment',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,
            RbacConstant::$role_operation_manager
        ],
        'creator'   =>  'lj',
    ],

];