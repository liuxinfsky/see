<?php
/**
 * Created by PhpStorm.
 * User: jwb
 * Date: 2018/11/26
 */

use common\constants\RbacConstant;
use common\constants\CommonConstant;
return [
    [
        'menu_name' => '首电质检样本数据表',
        'menu_url' => 'yw-quality-order-first-contact/index',
        'parent_url' => 'yw-service-admin',
        'menu_type'=>1,
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_service_manager,
        ]
    ]
];