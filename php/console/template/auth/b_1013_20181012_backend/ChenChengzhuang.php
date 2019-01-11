<?php
namespace console\template\auth\b_1013_20181012_backend;

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
        'auth_name' => '地块管理',
        'auth_url' => 'ex-lots',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_data_operation_specialist, //数据运营专员
            RbacConstant::$role_operation_interns, //运营实习生
            RbacConstant::$role_operation_manager,  //运营主管
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' => '地块编辑',
        'auth_url' => 'ex-lots/update',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_data_operation_specialist, //数据运营专员
            RbacConstant::$role_operation_interns, //运营实习生
            RbacConstant::$role_operation_manager,  //运营主管
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' => '新增地块',
        'auth_url' => 'ex-lots/create',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_data_operation_specialist, //数据运营专员
            RbacConstant::$role_operation_interns, //运营实习生
            RbacConstant::$role_operation_manager,  //运营主管
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' => '删除地块',
        'auth_url' => 'ex-lots/delete',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_data_operation_specialist, //数据运营专员
            RbacConstant::$role_operation_interns, //运营实习生
            RbacConstant::$role_operation_manager,  //运营主管
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' => '地块列表页',
        'auth_url' => 'ex-lots/index',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_data_operation_specialist, //数据运营专员
            RbacConstant::$role_operation_interns, //运营实习生
            RbacConstant::$role_operation_manager,  //运营主管
        ],
        'creator'   =>  'ChenChengzhuang',
    ],


    [
        'auth_name' => '地块动态列表修改显示',
        'auth_url' => 'ex-lots-dynamic/change-is-show',
        'parent_url'=>'ex-lots',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_data_operation_specialist, //数据运营专员
            RbacConstant::$role_operation_interns, //运营实习生
            RbacConstant::$role_operation_manager,  //运营主管
            RbacConstant::$role_admin,
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' => '地块动态列表',
        'auth_url' => 'ex-lots-dynamic/index',
        'parent_url'=>'ex-lots',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_data_operation_specialist, //数据运营专员
            RbacConstant::$role_operation_interns, //运营实习生
            RbacConstant::$role_operation_manager,  //运营主管
            RbacConstant::$role_admin,
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' => '地块动态新增',
        'auth_url' => 'ex-lots-dynamic/create',
        'parent_url'=>'ex-lots',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_data_operation_specialist, //数据运营专员
            RbacConstant::$role_operation_interns, //运营实习生
            RbacConstant::$role_operation_manager,  //运营主管
            RbacConstant::$role_admin,
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' => '地块动态编辑',
        'auth_url' => 'ex-lots-dynamic/update',
        'parent_url'=>'ex-lots',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_data_operation_specialist, //数据运营专员
            RbacConstant::$role_operation_interns, //运营实习生
            RbacConstant::$role_operation_manager,  //运营主管
            RbacConstant::$role_admin,
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' => '地块动态列表修改显示',
        'auth_url' => 'ex-lots-dynamic/change-is-show',
        'parent_url'=>'ex-lots',
        'role_type' => CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_data_operation_specialist, //数据运营专员
            RbacConstant::$role_operation_interns, //运营实习生
            RbacConstant::$role_operation_manager,  //运营主管
            RbacConstant::$role_admin,
        ],
        'creator'   =>  'ChenChengzhuang',
    ],
    [
        'auth_name' =>  '楼盘详情',
        'auth_url'  =>  'yw-project-business/create',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role' => [
            RbacConstant::$role_admin,              //总管理员
            RbacConstant::$role_channel_manager,    //渠道经理
            RbacConstant::$role_channel_charger,    //渠道主管
            RbacConstant::$role_group_expand_charger,         //集团拓展主管
            RbacConstant::$role_group_expand_person,         //集团拓展专员
            RbacConstant::$role_business_charger,   //商务主管
            RbacConstant::$role_db_manager,         //拓展主管
            RbacConstant::$role_bd_specialist,      //商务专员
            RbacConstant::$role_estate_expand,         //拓展专员
            RbacConstant::$role_field_manager,      //项目专员
            RbacConstant::$role_project_charger,    //项目主管
        ],
        'creator'   =>  '陈成壮',
    ],


];
