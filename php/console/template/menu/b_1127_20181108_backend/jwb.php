<?php
/**
 * @author jiaweibin
 * @date 2018-11-15
 */
namespace console\template\menu;

use common\constants\CommonConstant;
use common\constants\RbacConstant;

return [
    [
        'menu_name' => '家财险统计页',
        'menu_url' => 'yw-insure/index',
        'parent_url' => 'yw-service-admin',
        'menu_type'=>'1',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,
            RbacConstant::$role_data_operation_specialist,
            RbacConstant::$role_finance,
        ],
        'creator'   =>  'jiaweibin',
    ]
];