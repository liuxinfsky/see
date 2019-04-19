<?php
namespace console\template\auth\b_869_20180829_backend;
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
        'auth_name' =>  '我的面试时间安排-展示',
        'auth_url'  =>  'zp-employee-plan-time/index',
        'parent_url'=>  'zp-time-manager',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_first_interviewer
        ],
    ],
    [
        'auth_name' =>  '我的面试时间安排-获取数据',
        'auth_url'  =>  'zp-employee-plan-time/get-plan-time-json',
        'parent_url'=>  'zp-time-manager',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_first_interviewer
        ],
    ],
    [
        'auth_name' =>  '我的面试时间安排-编辑不可面试时间',
        'auth_url'  =>  'zp-employee-plan-time/update',
        'parent_url'=>  'zp-time-manager',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_first_interviewer
        ],
    ],
    [
        'auth_name' =>  '面试官时间安排-展示',
        'auth_url'  =>  'zp-employee-plan-time/view',
        'parent_url'=>  'zp-time-manager',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_admin,
            RbacConstant::$role_zp_city_hr,
            RbacConstant::$role_zp_hr,
            RbacConstant::$role_zp_second_interviewer,
        ],
    ],
    [
        'auth_name' =>  '我的面试时间安排-展示',
        'auth_url'  =>  'zp-employee-plan-time/get-time-page',
        'parent_url'=>  'zp-time-manager',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_admin,
            RbacConstant::$role_zp_city_hr,
            RbacConstant::$role_zp_hr,
            RbacConstant::$role_zp_second_interviewer,
        ],
    ],
    [
        'auth_name' =>  '订单列表',
        'auth_url'  =>  'zp-order/index',
        'parent_url'=>  'zp-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_admin,
            RbacConstant::$role_zp_city_hr,
            RbacConstant::$role_zp_hr,
            RbacConstant::$role_zp_second_interviewer,
            RbacConstant::$role_zp_first_interviewer,
        ],
    ],

    [
        'auth_name' =>  '一面面试官-面试结果待录入',
        'auth_url'  =>  'zp-employee/first-entry',
        'parent_url'=>  'zp-work-bench',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_first_interviewer,
        ],
    ],
    [
        'auth_name' =>  '一面面试官-面试分配待确认',
        'auth_url'  =>  'zp-employee/first-confirm',
        'parent_url'=>  'zp-work-bench',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_first_interviewer,
        ],
    ],
    [
        'auth_name' =>  '一面面试官-面试结果有异议',
        'auth_url'  =>  'zp-employee/first-disagree',
        'parent_url'=>  'zp-work-bench',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_first_interviewer,
        ],
    ],
    [
        'auth_name' =>  '一面面试官-面试分配待确认-确认收到分配',
        'auth_url'  =>  'zp-employee/confirm-distribute',
        'parent_url'=>  'zp-work-bench',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_first_interviewer,
        ],
    ],
    [
        'auth_name' =>  '一面面试官-近期面试安排页面展示',
        'auth_url'  =>  'zp-employee/recent-interview',
        'parent_url'=>  'zp-work-bench',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_first_interviewer,
            RbacConstant::$role_zp_second_interviewer,
        ],
    ],
    [
        'auth_name' =>  '一面面试官-获取近期面试安排数据',
        'auth_url'  =>  'zp-employee/get-recent-data',
        'parent_url'=>  'zp-work-bench',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_first_interviewer,
            RbacConstant::$role_zp_second_interviewer,
        ],
    ],

    [
        'auth_name' =>  '二面面试官-面试结果待录入',
        'auth_url'  =>  'zp-employee/second-entry',
        'parent_url'=>  'zp-work-bench',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_second_interviewer,
        ],
    ],
    [
        'auth_name' =>  '二面面试官-面试分配待确认',
        'auth_url'  =>  'zp-employee/second-confirm',
        'parent_url'=>  'zp-work-bench',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_second_interviewer,
        ],
    ],
    [
        'auth_name' =>  '二面面试官-面试结果有异议',
        'auth_url'  =>  'zp-employee/second-disagree',
        'parent_url'=>  'zp-work-bench',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_second_interviewer,
        ],
    ],
    [
        'auth_name' =>  '二面面试官-面试分配待确认-确认收到分配',
        'auth_url'  =>  'zp-employee/second-confirm-distribute',
        'parent_url'=>  'zp-work-bench',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_second_interviewer,
        ],
    ],
];