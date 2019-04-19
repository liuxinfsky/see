<?php
namespace console\template\auth\b_1013_20181012_backend;

use common\constants\CommonConstant;
use common\constants\RbacConstant;

/**
 * Created by PhpStorm.
 * User: Julive.com
 * Date: 2018/11/6
 * Time: 10:38
 */

return [
    [
        'auth_name' =>  '主推楼盘基础信息-列表',
        'auth_url'  =>  'yw-main-push-project/base-info',
        'parent_url'  =>  'yw-main-push-project',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
    ],
    [
        'auth_name' =>  '主推楼盘效果监测-列表',
        'auth_url'  =>  'yw-main-push-project/effect-view',
        'parent_url'  =>  'yw-main-push-project',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  CommonConstant::ADD_ROLE_ALL,
    ],
    [
        'auth_name' =>  '图册-更新图片',
        'auth_url'  =>  'yw-project-img-new/update',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  RbacConstant::getChannelRole(),
    ],
    [
        'auth_name' =>  '图册-增加图片',
        'auth_url'  =>  'yw-project-img-new/create',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  RbacConstant::getChannelRole(),
    ],
];