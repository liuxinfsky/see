<?php
namespace console\template\auth\b_1162_20181120_backend;
/**
 * @author: cww
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
        'auth_name' => '咨询师打车质检列表-确认嫌疑',
        'auth_url' => 'yw-taxi-quality/confirm-doubt-wrapper',
        'parent_url' => 'yw-taxi-quality',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,
            RbacConstant::$role_service_manager
        ],
        'creator'   =>  'cww',
    ],
    [
        'auth_name' => '咨询师打车质检列表-解除嫌疑',
        'auth_url' => 'yw-taxi-quality/confirm-remove-suspicion',
        'parent_url' => 'yw-taxi-quality',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,
            RbacConstant::$role_service_manager
        ],
        'creator'   =>  'cww',
    ],
    [
        'auth_name' => '咨询师打车质检列表-上传图片',
        'auth_url' => 'yw-taxi-quality/upload-img',
        'parent_url' => 'yw-taxi-quality',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,
            RbacConstant::$role_service_manager
        ],
        'creator'   =>  'cww',
    ],
];