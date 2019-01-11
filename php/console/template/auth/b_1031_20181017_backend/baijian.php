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
        'auth_name' =>  '现金流明细页',
        'auth_url'  =>  'cw-accounting-manage/index',
        'parent_url'=>  'cw-accounting-manage',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [RbacConstant::$role_finance,],
        'creator'   =>  '白健',
    ],
    [
        'auth_name' =>  '收支新增页',
        'auth_url'  =>  'cw-accounting-manage/create',
        'parent_url'=>  'cw-accounting-manage',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [RbacConstant::$role_finance,],
        'creator'   =>  '白健',
    ],
    [
        'auth_name' =>  '收支编辑页',
        'auth_url'  =>  'cw-accounting-manage/edit',
        'parent_url'=>  'cw-accounting-manage',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [RbacConstant::$role_finance,],
        'creator'   =>  '白健',
    ],
    [
        'auth_name' =>  '现金流明细页导出',
        'auth_url'  =>  'cw-accounting-manage/fee-detail-export',
        'parent_url'=>  'cw-accounting-manage',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [RbacConstant::$role_finance,],
        'creator'   =>  '白健',
    ],
    [
        'auth_name' =>  '账户资金管理页',
        'auth_url'  =>  'cw-accounting-manage/capital',
        'parent_url'=>  'cw-accounting-manage',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [RbacConstant::$role_finance,],
        'creator'   =>  '白健',
    ],
    [
        'auth_name' =>  '账户资金管理页导出',
        'auth_url'  =>  'cw-accounting-manage/capital-export',
        'parent_url'=>  'cw-accounting-manage',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [RbacConstant::$role_finance,],
        'creator'   =>  '白健',
    ],

];
?>