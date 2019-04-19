<?php
namespace console\template\auth\b_1076_20181026_backend;

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
        'auth_name' => '售卖许可证管理',
        'auth_url' => 'cj-license',
        'parent_url' => 'yw-projects/all',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'chenchengzhuang',
    ]

];
