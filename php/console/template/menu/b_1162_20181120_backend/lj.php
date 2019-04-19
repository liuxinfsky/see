<?php
/**
 * Created by PhpStorm.
 * User: lj
 * Date: 2018/11/26
 * Time: 15:06
 */

use common\constants\RbacConstant;
use common\constants\CommonConstant;
return [
    [
        'menu_name' => '咨询师打车质检页',
        'menu_url' => 'yw-taxi-quality/index',
        'parent_url' => 'yw-service-admin',
        'menu_type'=>1,
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,
            RbacConstant::$role_service_manager
        ],
        'creator'   =>  'lj',
    ]
];