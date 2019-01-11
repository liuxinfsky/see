<?php
namespace console\template\auth\b_1145_20181114_backend;
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
        'auth_name' =>  '近七日面试安排',
        'auth_url'  =>  'zp-city-hr/arrange-calendar',
        'parent_url'=>  'zp-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_hr,
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
            RbacConstant::$role_zp_hr,
            RbacConstant::$role_zp_city_hr
        ],
        'creator'   =>  '张攀龙',
    ],
];