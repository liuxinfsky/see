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
        'auth_name' =>  '修改面试官',
        'auth_url'  =>  'zp-interview-employee/entry-interview-employee',
        'parent_url'=>  'zp-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_hr,
        ],
        'creator'   =>  '张攀龙',
    ],

    [
        'auth_name' =>  '展示修改面试官',
        'auth_url'  =>  'zp-interview-employee/show-interview-employee',
        'parent_url'=>  'zp-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_hr,
        ],
        'creator'   =>  '张攀龙',
    ],

    [
        'auth_name' =>  '近七日面试安排',
        'auth_url'  =>  'zp-city-hr/arrange-calendar',
        'parent_url'=>  'zp-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_city_hr
        ],
        'creator'   =>  '张攀龙',
    ],

    [
        'auth_name' =>  '选择周面试安排',
        'auth_url'  =>  'zp-city-hr/get-schedule-by-time',
        'parent_url'=>  'zp-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_city_hr
        ],
        'creator'   =>  '张攀龙',
    ],

    [
        'auth_name' =>  '城市人力首页',
        'auth_url'  =>  'zp-city-hr/show-city-hr-list',
        'parent_url'=>  'zp-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_city_hr
        ],
        'creator'   =>  '张攀龙',
    ],

    [
        'auth_name' =>  '城市人力操作',
        'auth_url'  =>  'zp-city-hr/update-invite-state',
        'parent_url'=>  'zp-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_city_hr,
        ],
        'creator'   =>  '张攀龙',
    ],

    [
        'auth_name' =>  '展示录入面试时间页面',
        'auth_url'  =>  'zp-interview-time/show-entry-interview-time',
        'parent_url'=>  'zp-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_hr
        ],
        'creator'   =>  '张攀龙',
    ],
    [
        'auth_name' =>  '录入预计面试时间',
        'auth_url'  =>  'zp-interview-time/entry-interview-time',
        'parent_url'=>  'zp-manager',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_hr
        ],
        'creator'   =>  '张攀龙',
    ],

    [
        'auth_name' =>  '手动关闭订单',
        'auth_url'  =>  'zp-order/manual-close-order',
        'parent_url'=>  'zp-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_admin,
            RbacConstant::$role_zp_hr,
        ],
        'creator'   =>  '张攀龙',
    ],

    [
        'auth_name' =>  '电面录入面试结果',
        'auth_url'  =>  'zp-phone-interview/entry',
        'parent_url'=>  'zp-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_hr,
        ],
        'creator'   =>  '张攀龙',
    ],

    [
        'auth_name' =>  '电面录入结果编辑',
        'auth_url'  =>  'zp-phone-interview/update',
        'parent_url'=>  'zp-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_hr,
        ],
        'creator'   =>  '张攀龙',
    ],

    [
        'auth_name' =>  '订单重新激活',
        'auth_url'  =>  'zp-order/activation-order',
        'parent_url'=>  'zp-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_hr,
        ],
        'creator'   =>  '张攀龙',
    ],

    [
        'auth_name' =>  '待录入预约面试时间列表',
        'auth_url'  =>  'zp-group/not-reach-interview',
        'parent_url'=>  'zp-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_hr,
        ],
        'creator'   =>  '张攀龙',
    ],

];