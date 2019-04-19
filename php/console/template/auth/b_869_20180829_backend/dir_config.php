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
        'auth_name' =>  '招聘系统管理',
        'auth_url'  =>  'zp-manager',
        'parent_url'=>  'module/site',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [],
        'creator'   =>  '彭求诚',
    ],
    [
        'auth_name' =>  '面试时间管理',
        'auth_url'  =>  'zp-time-manager',
        'parent_url'=>  'zp-manager',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [],
        'creator'   =>  '彭求诚',
    ],
    [
        'auth_name' =>  '订单管理',
        'auth_url'  =>  'zp-order',
        'parent_url'=>  'zp-manager',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [],
        'creator'   =>  '白健',
    ],
    [
        'auth_name' =>  '招聘工作台',
        'auth_url'  =>  'zp-work-bench',
        'parent_url'=>  'zp-manager',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [],
        'creator'   =>  '彭求诚',
    ],
    [
        'auth_name' =>  '招聘面试管理',
        'auth_url'  =>  'zp-group',
        'parent_url'=>  'zp-manager',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '郝涉浩',
    ],
    [
        'auth_name' =>  '招聘系统文件上传',
        'auth_url'  =>  'zp-upload',
        'parent_url'=>  'zp-manager',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '张冉',
    ],
    [
        'auth_name' =>  '录入招聘组意见',
        'auth_url'  =>  'zp-follower',
        'parent_url'=>  'zp-manager',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '张冉',
    ],
    [
        'auth_name' =>  '录入跟进记录',
        'auth_url'  =>  'zp-follow',
        'parent_url'=>  'zp-manager',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '张冉',
    ],
    [
        'auth_name' =>  '录入一面结果',
        'auth_url'  =>  'zp-interview',
        'parent_url'=>  'zp-manager',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '张冉',
    ],
    [
        'auth_name' =>  '录入二面结果',
        'auth_url'  =>  'zp-interview-two',
        'parent_url'=>  'zp-manager',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '张冉',
    ],
    [
        'auth_name' =>  'offer管理',
        'auth_url'  =>  'zp-offer',
        'parent_url'=>  'zp-manager',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '郝涉浩',
    ],
    [
        'auth_name'  =>'批量转移候选人',
        'auth_url'   =>'zp-orderlist-moving',
        'parent_url' =>'zp-manager',
        'role_type'  =>CommonConstant::ROLE_TYPE_RECOVER,
        'role'       =>CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  '郝涉浩',
    ],
    [
    'auth_name'  =>'select2专用',
    'auth_url'   =>'zp-employee',
    'parent_url' =>'zp-manager',
    'role_type'  =>CommonConstant::ROLE_TYPE_RECOVER,
    'role'       =>CommonConstant::ADD_ROLE_ALL,
    'creator'   =>  '郝涉浩',
]
];