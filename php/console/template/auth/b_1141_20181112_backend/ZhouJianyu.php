<?php
namespace console\template\auth\b_1141_20181112_backend;

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
use yii;
use cms\models\Rbac;
use common\constants\CommonConstant;
use common\constants\RbacConstant;
use yii\helpers\ArrayHelper;

return [
    [
        'auth_name' => '复制现有户型弹层构建',
        'auth_url'  => 'yw-projects/copy-exists-house-type',
        'parent_url'=>  'yw-projects/all',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  ArrayHelper::merge(RbacConstant::getChannelRole(),[
            RbacConstant::$role_admin,
            RbacConstant::$role_data_operation_specialist,
            RbacConstant::$role_operation_interns,
            RbacConstant::$role_operation_manager,
        ]),
        'creator'   =>  '周建宇',
    ],
    [
        'auth_name' => '复制现有户型数据存储',
        'auth_url'  => 'yw-projects/house-type-create-copy',
        'parent_url'=>  'yw-projects/all',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  ArrayHelper::merge(RbacConstant::getChannelRole(),[
            RbacConstant::$role_admin,
            RbacConstant::$role_data_operation_specialist,
            RbacConstant::$role_operation_interns,
            RbacConstant::$role_operation_manager,
        ]),
        'creator'   =>  '周建宇',
    ],

];
