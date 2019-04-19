<?php
namespace console\template\auth\b_1031_20181017_backend;
/**
 * 上线权限配置数据
 * @author: pengqiucheng<pengqiucheng@julive.com>
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
        'auth_name' =>  '财务账务管理',
        'auth_url'  =>  'cw-accounting-manage',
        'parent_url'=>  'hr-manage',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [],
        'creator'   =>  '白健',
    ],
    [
    'auth_name' =>  '财务账户管理',
    'auth_url'  =>  'cw-account',
    'parent_url'=>  'hr-manage',
    'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
    'role'      =>  [],
    'creator'   =>  '郝涉浩',
    ],
    [
        'auth_name' =>  '会计科目管理',
        'auth_url'  =>  'cw-accounting-class',
        'parent_url'=>  'hr-manage',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [],
        'creator'   =>  '张攀龙',
    ]
];