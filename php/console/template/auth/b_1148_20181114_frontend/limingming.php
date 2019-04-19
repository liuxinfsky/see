<?php

namespace console\template\auth\b_1145_20181114_backend;
/**
 * 上线权限配置数据
 *
 * [
 * 'auth_name'=>'',    //权限名称
 * 'auth_url'=>'',        //权限路由
 * 'parent_url'=>'',    //父级权限路由
 * 'role_type'=>'',    //角色类型 add新增角色 reduce减少角色 recover覆盖
 * 'role'=>[],            //角色数组 all表示所有角色
 * 'creator'=>'',        //创建人姓名
 * ]
 */

use common\constants\CommonConstant;
use common\constants\RbacConstant;

return [
    [
        'auth_name' => '楼市头条',
        'auth_url' => 'cms-cj-project-headline',
        'parent_url' => 'data-sem',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,
        ],
        'creator' => '李明明',
    ],
    [
        'auth_name' => '楼市头条创建',
        'auth_url' => 'cms-cj-project-headline/create',
        'parent_url' => 'cms-cj-project-headline',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,
        ],
        'creator' => '李明明',
    ],

    [
        'auth_name' => '楼市头条删除',
        'auth_url' => 'cms-cj-project-headline/delete',
        'parent_url' => 'cms-cj-project-headline',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,
        ],
        'creator' => '李明明',
    ],
    [
        'auth_name' => '楼市头条取消发布',
        'auth_url' => 'cms-cj-project-headline/cancel-publish',
        'parent_url' => 'cms-cj-project-headline',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,
        ],
        'creator' => '李明明',
    ],
    [
        'auth_name' => '楼市头条发布',
        'auth_url' => 'cms-cj-project-headline/publish',
        'parent_url' => 'cms-cj-project-headline',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,
        ],
        'creator' => '李明明',
    ],
    ['auth_name' => '楼市头条导入问答ajax',
        'auth_url' => 'cms-cj-project-headline/ajax-question',
        'parent_url' => 'cms-cj-project-headline',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,
        ],
        'creator' => '李明明',
    ],
    ['auth_name' => '楼市头条导入问答',
        'auth_url' => 'cms-cj-project-headline/export-ask',
        'parent_url' => 'cms-cj-project-headline',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,
        ],
        'creator' => '李明明',
    ],
    ['auth_name' => '楼市头条编辑',
        'auth_url' => 'cms-cj-project-headline/update',
        'parent_url' => 'cms-cj-project-headline',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,
        ],
        'creator' => '李明明',
    ],
    ['auth_name' => '楼市头条列表',
        'auth_url' => 'cms-cj-project-headline/index',
        'parent_url' => 'cms-cj-project-headline',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,
        ],
        'creator' => '李明明',
    ]
];