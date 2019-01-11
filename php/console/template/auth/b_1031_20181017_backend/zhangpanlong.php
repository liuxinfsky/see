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
        'auth_name' =>  '会计科目编辑页面',
        'auth_url'  =>  'cw-accounting-class/update',
        'parent_url'=>  'cw-accounting-class',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [RbacConstant::$role_finance,],
        'creator'   =>  '张攀龙',
    ],

    [
        'auth_name' =>  '会计科目新增页面',
        'auth_url'  =>  'cw-accounting-class/create',
        'parent_url'=>  'cw-accounting-class',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [RbacConstant::$role_finance,],
        'creator'   =>  '张攀龙',
    ],
    [
        'auth_name' =>  '会计科目管理',
        'auth_url'  =>  'cw-accounting-class/index',
        'parent_url'=>  'cw-accounting-class',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [RbacConstant::$role_finance,],
        'creator'   =>  '张攀龙',
    ],

];
?>