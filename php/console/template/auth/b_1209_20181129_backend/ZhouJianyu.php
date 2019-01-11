<?php
namespace console\template\auth\b_1145_20181114_backend;

use yii\helpers\ArrayHelper;
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
        'auth_name' =>  '案场日期查询功能',
        'auth_url'  =>  'cj-case-field/get-case-field',
        'parent_url'=>  'cj-case-field',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  ArrayHelper::merge(RbacConstant::getChannelRole(),[
            RbacConstant::$role_admin,
            RbacConstant::$role_data_operation_specialist,
            RbacConstant::$role_operation_interns,
            RbacConstant::$role_operation_manager,
        ]),
        'creator'   =>  '周建宇',
    ]
];