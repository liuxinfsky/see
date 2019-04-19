<?php
/**
 * Created by PhpStorm.
 * User: lh
 * Date: 2018/10/29
 * Time: 15:06
 */

use common\constants\RbacConstant;
use common\constants\CommonConstant;
return [
    [
        'menu_name' => '草签核算详情',
        'menu_url' => '/chart_table.html?table=view_adjust_sign_grass_employee_detail',
        'parent_url' => 'consult-order-adjust-detail',
        'menu_type'=>2,
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,
            RbacConstant::$role_hr_senior_manager,
            RbacConstant::$role_admin_sop,
            'super_admin',
            'financial_director'
        ]
    ]
];