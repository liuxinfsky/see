<?php
namespace console\template\auth\b_1162_20181120_backend;
/**
 * 上线权限配置数据
 * @author: jwb 2018.11.26
 *
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
        'auth_name' =>  '首电质检样本数据表-列表',
        'auth_url'  =>  'yw-quality-order-first-contact/index',
        'parent_url'=>  'yw-quality-order-first-contact',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_service_manager,
        ],
        'creator'   =>  '贾卫彬',
    ],
    [
        'auth_name' =>  '首电质检样本数据表-停止更新',
        'auth_url'  =>  'yw-quality-order-first-contact/stop',
        'parent_url'=>  'yw-quality-order-first-contact',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_service_manager,
        ],
        'creator'   =>  '贾卫彬',
    ],
];