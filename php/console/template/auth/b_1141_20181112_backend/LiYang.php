<?php
namespace console\template\auth\b_1141_20181112_backend;

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
        'auth_name' => '各源楼盘列表-修改业态',
        'auth_url'  => 'bd-project/change-project-type',
        'parent_url'=>  'bd',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_admin,
            RbacConstant::$role_data_operation_specialist,
            RbacConstant::$role_operation_interns,
            RbacConstant::$role_operation_manager,
        ],
        'creator'   =>  '李阳',
    ],
    [
        'auth_name' => '各源楼盘列表-获取业态下拉',
        'auth_url'  => 'bd-project/get-project-type-by-city',
        'parent_url'=>  'bd',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_admin,
            RbacConstant::$role_data_operation_specialist,
            RbacConstant::$role_operation_interns,
            RbacConstant::$role_operation_manager,
        ],
        'creator'   =>  '李阳',
    ],

];
