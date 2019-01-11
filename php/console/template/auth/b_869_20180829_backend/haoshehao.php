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
        'auth_name' =>  '未通过待处理面试信息',
        'auth_url'  =>  'zp-group/pass-pending-interview',
        'parent_url'=>  'zp-group',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_hr,
        ],
        'creator'   =>  '郝涉浩',
    ],
    [
        'auth_name' =>  'offer录入',
        'auth_url'  =>  'zp-offer/save-offer',
        'parent_url'=>  'zp-offer',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_hr,
        ],
        'creator'   =>  '郝涉浩',
    ],
    [
        'auth_name' =>  '待入职列表',
        'auth_url'  =>  'zp-group/offer-list',
        'parent_url'=>  'zp-group',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_hr,
        ],
        'creator'   =>  '郝涉浩',
    ],
    [
        'auth_name' =>  '批量转移',
        'auth_url'  =>  'zp-orderlist-moving/index',
        'parent_url'=>  'zp-orderlist-moving',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_admin
        ],
        'creator'   =>  '郝涉浩',
    ],
    [
        'auth_name' =>  '获取招聘组组合信息',
        'auth_url'  =>  'zp-orderlist-moving/searchfollow-people',
        'parent_url'=>  'zp-orderlist-moving',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_admin
        ],
        'creator'   =>  '郝涉浩',
    ],
    [
        'auth_name' =>  'select2员工信息+城市',
        'auth_url'  =>  'zp-employee/get-hr-employee-select2',
        'parent_url'=>  'zp-employee',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_admin
        ],
        'creator'   =>  '郝涉浩',
    ],
    [
        'auth_name' =>  '批量转移请求提交',
        'auth_url'  =>  'zp-orderlist-moving/save-moving-order',
        'parent_url'=>  'zp-orderlist-moving',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_admin
        ],
        'creator'   =>  '郝涉浩',
    ],
];