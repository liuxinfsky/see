<?php
namespace console\template\auth\b_855_20180823_backend;


use common\constants\CommonConstant;
use common\constants\RbacConstant;
return [
    [	//人力高级，人力超级，人力业务
        'auth_name' =>  '人员档案',
        'auth_url'  =>  'hr-employee-detail/record',
        'parent_url'=>  'yw-employee-detail',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>   [
            RbacConstant::$role_hr_senior_manager,
            RbacConstant::$role_hr_admin,
            RbacConstant::$role_hr_business_manager,
        ],
        'creator'   =>  '陈成壮',
    ],
    [
        'auth_name' =>  '获取审批类型下拉框',
        'auth_url'  =>  'hr-approval-type/get-approval-type-list',
        'parent_url'=>  'hr-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '陈成壮',
    ],
    [
        'auth_name' =>  '获取人员档案类型下拉框',
        'auth_url'  =>  'hr-employee-detail/get-record-select-two',
        'parent_url'=>  'yw-employee-detail',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '陈成壮',
    ],
];