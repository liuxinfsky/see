<?php
namespace console\template\menu;

use common\constants\CommonConstant;
use common\constants\RbacConstant;

return [
    [
        'menu_name' => '售卖许可证',
        'menu_url' => 'cj-license/index',
        'parent_url' => 'yw-projects',
        'menu_type'=>'1',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => CommonConstant::ADD_ROLE_ALL,
        'creator'   =>  'ChenChengzhuang',
    ]
];