<?php
namespace console\template\menu\b_869_20180829_backend;

/**
 * @author: pengqiucheng<pengqiucheng@julive.com>
 * @date: 2018/9/3 18:51
 */

/**
 * 869分支上线菜单配置数组
 * @author: pengqiucheng<pengqiucheng@julive.com>
 * @date: 2018/7/31 18:10
 * [
'menu_name'=>'', 	//菜单名称
'menu_url'=>'',  	//菜单路由
'menu_type'=>'', 	//菜单类型 1普通类 2视图类（如果是普通类，可不配置此字段）
'parent_url'=>'', 	//父级菜单路由
'role_type'=>'',    //角色类型 add新增角色 reduce减少角色 recover覆盖角色
'role'=>[],			//角色数组 all所有角色
'creator'=>'',		//创建人姓名
'sort'=>'',         //排序
]
 */

use common\constants\CommonConstant;
use common\constants\RbacConstant;

return [
    [
        'menu_name'  =>'我的面试时间安排', 	//菜单名称
        'menu_url'   =>'zp-employee-plan-time/index',  	//菜单路由
        'parent_url' =>'zp-manage', 	      //父级菜单路由
        'role_type'  =>CommonConstant::ROLE_TYPE_RECOVER,        //角色类型 add新增角色 reduce减少角色 recover覆盖角色
        'role'       =>[
            RbacConstant::$role_zp_first_interviewer,
        ],
    ],
    [
        'menu_name'  =>'面试官时间安排', 	//菜单名称
        'menu_url'   =>'zp-employee-plan-time/view',  	//菜单路由
        'parent_url' =>'zp-manage', 	      //父级菜单路由
        'role_type'  =>CommonConstant::ROLE_TYPE_RECOVER,        //角色类型 add新增角色 reduce减少角色 recover覆盖角色
        'role'       =>[
            RbacConstant::$role_zp_admin,
            RbacConstant::$role_zp_city_hr,
            RbacConstant::$role_zp_second_interviewer,
            RbacConstant::$role_zp_hr,
        ],
        'sort'=>90,
    ],
    [
        'menu_name'  =>'订单列表', 	//菜单名称
        'menu_url'   =>'zp-order/index',  	//菜单路由
        'parent_url' =>'zp-manage', 	      //父级菜单路由
        'role_type'  =>CommonConstant::ROLE_TYPE_RECOVER,        //角色类型 add新增角色 reduce减少角色 recover覆盖角色
        'role'       =>[
            RbacConstant::$role_zp_admin,
            RbacConstant::$role_zp_city_hr,
            RbacConstant::$role_zp_second_interviewer,
            RbacConstant::$role_zp_first_interviewer,
            RbacConstant::$role_zp_hr,
        ],
        'sort'=>95,
    ],
    [
        'menu_name'  =>'个人工作台',
        'menu_url'   =>'zp-employee/first-entry',
        'parent_url' =>'zp-manage',
        'role_type'  =>CommonConstant::ROLE_TYPE_RECOVER,
        'role'       =>[
            RbacConstant::$role_zp_first_interviewer,
        ],
        'sort'=>100,
    ],
    [
        'menu_name'  =>'个人工作台',
        'menu_url'   =>'zp-employee/second-entry',
        'parent_url' =>'zp-manage',
        'role_type'  =>CommonConstant::ROLE_TYPE_RECOVER,
        'role'       =>[
            RbacConstant::$role_zp_second_interviewer,
        ],
        'sort'=>100,
    ]
];


