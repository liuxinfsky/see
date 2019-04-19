<?php
namespace console\template\auth;

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
        'auth_name' =>  '审批-离职审批申请',
        'auth_url'  =>  'hr-approval-quit/create',
        'parent_url'=>  'hr-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '白少杰',
    ],
	[
		'auth_name' =>  '修改审批人',
		'auth_url'  =>  'hr-approval-record/edit-approver',
		'parent_url'=>  'hr-approval',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' =>  '销假',
		'auth_url'  =>  'hr-employee-check/cancel-vacation',
		'parent_url'=>  'hr-approval',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '徐程亮',
	],
    [
        'auth_name' =>  '员工导出权限',
        'auth_url'  =>  'hr-employee-detail/export',
        'parent_url'=>  'yw-employee-detail',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [RbacConstant::$role_hr_senior_manager,RbacConstant::$role_hr_admin,RbacConstant::$role_hr_business_manager],
        'creator'   =>  '张冉',
    ],
    [
        'auth_name' =>  '保存上传病假附件',
        'auth_url'  =>  'hr-approval-vacation/attachment',
        'parent_url'=>  'hr-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '张冉',
    ],
    [
        'auth_name' =>  '检查是否填写离职时间或是附件',
        'auth_url'  =>  'hr-approval-record/check-job',
        'parent_url'=>  'hr-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '张冉',
    ],
    [
        'auth_name' =>  '审批获取社保公积金城市列表',
        'auth_url'  =>  'hr-approval-job-transfer/get-city-list',
        'parent_url'=>  'hr-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '张攀龙',
    ],
    [
        'auth_name' =>  '审批获取社保公积金城市列表',
        'auth_url'  =>  'hr-approval-promotion/find-city',
        'parent_url'=>  'hr-approval',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '张攀龙',
    ],
    [
        'auth_name' =>  '组织架构列表-添加部门',
        'auth_url'  =>  'hr-org/create',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [RbacConstant::$role_hr_business_manager],
        'creator'   =>  '白健',
    ],
    [
        'auth_name' =>  '组织架构列表-删除部门',
        'auth_url'  =>  'hr-org/del-depart',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [RbacConstant::$role_hr_business_manager],
        'creator'   =>  '白健',
    ],
    [
        'auth_name' =>  '组织架构列表-编辑部门',
        'auth_url'  =>  'hr-org/update-department',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [RbacConstant::$role_hr_business_manager],
        'creator'   =>  '白健',
    ],
    [
        'auth_name' =>  '学校管理',
        'auth_url'  =>  'hr-school-info',
        'parent_url'=>  'hr-manage',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [RbacConstant::$role_hr_senior_manager,RbacConstant::$role_hr_admin],
        'creator'   =>  '陈成壮',
    ],
    [
        'auth_name' =>  '学校列表',
        'auth_url'  =>  'hr-school-info/index',
        'parent_url'=>  'hr-school-info',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [RbacConstant::$role_hr_senior_manager,RbacConstant::$role_hr_admin],
        'creator'   =>  '陈成壮',
    ],
    [
        'auth_name' =>  '学校编辑',
        'auth_url'  =>  'hr-school-info/update',
        'parent_url'=>  'hr-school-info',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [RbacConstant::$role_hr_senior_manager,RbacConstant::$role_hr_admin],
        'creator'   =>  '陈成壮',
    ],
    [
        'auth_name' =>  '学校新增',
        'auth_url'  =>  'hr-school-info/create',
        'parent_url'=>  'hr-school-info',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [RbacConstant::$role_hr_senior_manager,RbacConstant::$role_hr_admin],
        'creator'   =>  '陈成壮',
    ],
    [
        'auth_name' =>  '学校删除',
        'auth_url'  =>  'hr-school-info/delete',
        'parent_url'=>  'hr-school-info',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [RbacConstant::$role_hr_senior_manager,RbacConstant::$role_hr_admin],
        'creator'   =>  '陈成壮',
    ],
    [
        'auth_name' =>  '获取学校信息',
        'auth_url'  =>  'hr-school-info/get-school-by-id',
        'parent_url'=>  'hr-school-info',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '陈成壮',
    ],
    [
        'auth_name' =>  '学校select2',
        'auth_url'  =>  'hr-school-info/get-school-select-two',
        'parent_url'=>  'hr-school-info',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '陈成壮',
    ],

    [
        'auth_name' =>  '人力业务管理员管理部门',
        'auth_url'  =>  'hr-employee-manage-department',
        'parent_url'=>  'hr-manage',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [RbacConstant::$role_hr_senior_manager,RbacConstant::$role_hr_admin,RbacConstant::$role_hr_business_manager],
        'creator'   =>  '陈成壮',
    ],

    [
        'auth_name' =>  '人力业务管理员管理列表',
        'auth_url'  =>  'hr-employee-manage-department/index',
        'parent_url'=>  'hr-employee-manage-department',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [RbacConstant::$role_hr_senior_manager,RbacConstant::$role_hr_admin,RbacConstant::$role_hr_business_manager],
        'creator'   =>  '陈成壮',
    ],

    [
        'auth_name' =>  '人力业务管理员管理部门编辑',
        'auth_url'  =>  'hr-employee-manage-department/update',
        'parent_url'=>  'hr-employee-manage-department',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [RbacConstant::$role_hr_senior_manager,RbacConstant::$role_hr_admin,RbacConstant::$role_hr_business_manager],
        'creator'   =>  '陈成壮',
    ],
    [
        'auth_name' =>  '人力业务管理员管理部门新增',
        'auth_url'  =>  'hr-employee-manage-department/create',
        'parent_url'=>  'hr-employee-manage-department',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [RbacConstant::$role_hr_senior_manager,RbacConstant::$role_hr_admin,RbacConstant::$role_hr_business_manager],
        'creator'   =>  '陈成壮',
    ],

    [
        'auth_name' =>  '人力业务管理员管理部门删除',
        'auth_url'  =>  'hr-employee-manage-department/delete',
        'parent_url'=>  'hr-employee-manage-department',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [RbacConstant::$role_hr_senior_manager,RbacConstant::$role_hr_admin,RbacConstant::$role_hr_business_manager],
        'creator'   =>  '陈成壮',
    ],

    [
        'auth_name' =>  '生日提醒',
        'auth_url'  =>  'hr-employee-manage-department/birth-employee-list',
        'parent_url'=>  'hr-employee-manage-department',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [RbacConstant::$role_hr_senior_manager,RbacConstant::$role_hr_admin,RbacConstant::$role_hr_business_manager],
        'creator'   =>  '陈成壮',
    ],
    [
        'auth_name' =>  '人力暗线汇报',
        'auth_url'  =>  'hr-special-config',
        'parent_url'=>  'hr-manage',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [RbacConstant::$role_hr_senior_manager,RbacConstant::$role_hr_admin],
        'creator'   =>  '陈成壮',
    ],
    [
        'auth_name' =>  '人力暗线汇报列表	',
        'auth_url'  =>  'hr-special-config/index',
        'parent_url'=>  'hr-special-config',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [RbacConstant::$role_hr_senior_manager,RbacConstant::$role_hr_admin],
        'creator'   =>  '陈成壮',
    ],
    [
        'auth_name' =>  '人力暗线汇报编辑',
        'auth_url'  =>  'hr-special-config/update',
        'parent_url'=>  'hr-special-config',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [RbacConstant::$role_hr_senior_manager,RbacConstant::$role_hr_admin],
        'creator'   =>  '陈成壮',
    ],
    [
        'auth_name' =>  '人力暗线汇报创建',
        'auth_url'  =>  'hr-special-config/create',
        'parent_url'=>  'hr-special-config',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [RbacConstant::$role_hr_senior_manager,RbacConstant::$role_hr_admin],
        'creator'   =>  '陈成壮',
    ],
];
