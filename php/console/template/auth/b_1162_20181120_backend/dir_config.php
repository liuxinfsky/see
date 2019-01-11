<?php
namespace console\template\auth\b_1162_20181120_backend;

/**
<<<<<<< HEAD
 * @author: jwb
=======
 * @author: lj
>>>>>>> f23008b17c1131c4c3d24a0a895eff59b24f7f92
 * @date: 2018/11/26
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
        'auth_name' => '咨询师打车质检页',
        'auth_url' => 'yw-taxi-quality',
        'parent_url' => 'service-manger',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [],
        'creator'   =>  'lj',
    ],
    [
        'auth_name' => '首电质检样本数据表',
        'auth_url' => 'yw-quality-order-first-contact',
        'parent_url' => 'service-manger',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [],
        'creator'   =>  'jiaweibin',
    ]

];
