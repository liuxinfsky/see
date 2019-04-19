<?php
namespace console\template\auth\b_914_20180910_backend;

/**
 * @author: pengqiucheng<pengqiucheng@julive.com>
 * @date: 2018/8/29
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
        'auth_name' => '主管首页',
        'auth_url' => 'channel-manager/index',
        'parent_url' => 'employee-manager-center',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_project_charger,    //项目主管
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管

        ],
        'creator'   =>  'xcl',
    ],
];
