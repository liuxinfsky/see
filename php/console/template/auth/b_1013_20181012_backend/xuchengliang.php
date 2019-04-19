<?php
/**
 * Created by PhpStorm.
 * User: zhangpengfei
 * Date: 2018/10/30
 * Time: 12:48
 */

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
		'auth_name' => '楼盘字典-楼栋新增&编辑',
		'auth_url'  => 'cj-building/edit',
		'parent_url'=> 'yw-projects/all',
		'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
		'role'      => [
			RbacConstant::$role_admin,                  // 总管理员
			RbacConstant::$role_data_operation_specialist, //数据运营专员
			RbacConstant::$role_operation_interns, //运营实习生
			RbacConstant::$role_operation_manager,  //运营主管
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' => '楼盘字典-删除楼栋',
		'auth_url'  => 'cj-building/del-building',
		'parent_url'=> 'yw-projects/all',
		'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
		'role'      => [
			RbacConstant::$role_admin,                  // 总管理员
			RbacConstant::$role_channel_manager,        // 渠道经理
			RbacConstant::$role_channel_charger,        // 渠道主管
			RbacConstant::$role_project_charger,        // 项目主管
			RbacConstant::$role_field_manager,          // 项目专员
			RbacConstant::$role_business_charger,       // 商务主管
			RbacConstant::$role_bd_specialist,//商务专员
			RbacConstant::$role_db_manager,             // 拓展主管
			RbacConstant::$role_estate_expand,          // 拓展专员
			RbacConstant::$role_group_expand_charger,   // 集团拓展主管
			RbacConstant::$role_group_expand_person,    // 集团拓展专员
			RbacConstant::$role_data_operation_specialist, //数据运营专员
			RbacConstant::$role_operation_interns, //运营实习生
			RbacConstant::$role_operation_manager,  //运营主管
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' => '楼盘字典-获取所有楼栋打点信息',
		'auth_url'  => 'cj-building/get-buildings',
		'parent_url'=> 'yw-projects/all',
		'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
		'role'      => [
			RbacConstant::$role_admin,                  // 总管理员
			RbacConstant::$role_data_operation_specialist, //数据运营专员
			RbacConstant::$role_operation_interns, //运营实习生
			RbacConstant::$role_operation_manager,  //运营主管
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' => '楼盘字典-保存楼栋',
		'auth_url'  => 'cj-building/save',
		'parent_url'=> 'yw-projects/all',
		'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
		'role'      => [
			RbacConstant::$role_admin,                  // 总管理员
			RbacConstant::$role_data_operation_specialist, //数据运营专员
			RbacConstant::$role_operation_interns, //运营实习生
			RbacConstant::$role_operation_manager,  //运营主管
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' => '楼盘字典-导入楼栋',
		'auth_url'  => 'yw-projects/building-import',
		'parent_url'=> 'yw-projects/all',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => [
			RbacConstant::$role_admin,                  // 总管理员
			RbacConstant::$role_data_operation_specialist, //数据运营专员
			RbacConstant::$role_operation_interns, //运营实习生
			RbacConstant::$role_operation_manager,  //运营主管
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' => '楼盘字典-导出楼栋',
		'auth_url'  => 'yw-projects/building-export',
		'parent_url'=> 'yw-projects/all',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => [
			RbacConstant::$role_admin,                  // 总管理员
			RbacConstant::$role_data_operation_specialist, //数据运营专员
			RbacConstant::$role_operation_interns, //运营实习生
			RbacConstant::$role_operation_manager,  //运营主管
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' => '楼盘字典-检查楼盘名是否重复',
		'auth_url'  => 'yw-projects/check-building-name',
		'parent_url'=> 'yw-projects/all',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => [
			RbacConstant::$role_admin,                  // 总管理员
			RbacConstant::$role_channel_manager,        // 渠道经理
			RbacConstant::$role_channel_charger,        // 渠道主管
			RbacConstant::$role_project_charger,        // 项目主管
			RbacConstant::$role_field_manager,          // 项目专员
			RbacConstant::$role_business_charger,       // 商务主管
			RbacConstant::$role_bd_specialist,//商务专员
			RbacConstant::$role_db_manager,             // 拓展主管
			RbacConstant::$role_estate_expand,          // 拓展专员
			RbacConstant::$role_group_expand_charger,   // 集团拓展主管
			RbacConstant::$role_group_expand_person,    // 集团拓展专员
			RbacConstant::$role_data_operation_specialist, //数据运营专员
			RbacConstant::$role_operation_interns, //运营实习生
			RbacConstant::$role_operation_manager,  //运营主管
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' => '楼盘字典-重置楼栋坐标',
		'auth_url'  => 'yw-projects/reset-building-coordinate',
		'parent_url'=> 'yw-projects/all',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => [
			RbacConstant::$role_admin,                  // 总管理员
			RbacConstant::$role_channel_manager,        // 渠道经理
			RbacConstant::$role_channel_charger,        // 渠道主管
			RbacConstant::$role_project_charger,        // 项目主管
			RbacConstant::$role_field_manager,          // 项目专员
			RbacConstant::$role_business_charger,       // 商务主管
			RbacConstant::$role_bd_specialist,//商务专员
			RbacConstant::$role_db_manager,             // 拓展主管
			RbacConstant::$role_estate_expand,          // 拓展专员
			RbacConstant::$role_group_expand_charger,   // 集团拓展主管
			RbacConstant::$role_group_expand_person,    // 集团拓展专员
			RbacConstant::$role_data_operation_specialist, //数据运营专员
			RbacConstant::$role_operation_interns, //运营实习生
			RbacConstant::$role_operation_manager,  //运营主管
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' => '楼盘字典-修改楼栋单个字段',
		'auth_url'  => 'yw-projects/edit-building',
		'parent_url'=> 'yw-projects/all',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => [
			RbacConstant::$role_admin,                  // 总管理员
			RbacConstant::$role_channel_manager,        // 渠道经理
			RbacConstant::$role_channel_charger,        // 渠道主管
			RbacConstant::$role_project_charger,        // 项目主管
			RbacConstant::$role_field_manager,          // 项目专员
			RbacConstant::$role_business_charger,       // 商务主管
			RbacConstant::$role_bd_specialist,//商务专员
			RbacConstant::$role_db_manager,             // 拓展主管
			RbacConstant::$role_estate_expand,          // 拓展专员
			RbacConstant::$role_group_expand_charger,   // 集团拓展主管
			RbacConstant::$role_group_expand_person,    // 集团拓展专员
			RbacConstant::$role_data_operation_specialist, //数据运营专员
			RbacConstant::$role_operation_interns, //运营实习生
			RbacConstant::$role_operation_manager,  //运营主管
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' => '楼盘字典-获取楼栋列表',
		'auth_url'  => 'yw-projects/get-project-buildings',
		'parent_url'=> 'yw-projects/all',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => [
			RbacConstant::$role_admin,                  // 总管理员
			RbacConstant::$role_channel_manager,        // 渠道经理
			RbacConstant::$role_channel_charger,        // 渠道主管
			RbacConstant::$role_project_charger,        // 项目主管
			RbacConstant::$role_field_manager,          // 项目专员
			RbacConstant::$role_business_charger,       // 商务主管
			RbacConstant::$role_bd_specialist,//商务专员
			RbacConstant::$role_db_manager,             // 拓展主管
			RbacConstant::$role_estate_expand,          // 拓展专员
			RbacConstant::$role_group_expand_charger,   // 集团拓展主管
			RbacConstant::$role_group_expand_person,    // 集团拓展专员
			RbacConstant::$role_data_operation_specialist, //数据运营专员
			RbacConstant::$role_operation_interns, //运营实习生
			RbacConstant::$role_operation_manager,  //运营主管
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' => '楼盘字典-其他信息-累加模板',
		'auth_url'  => 'yw-projects/other-attribute-tpl',
		'parent_url'=> 'yw-projects/all',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => [
			RbacConstant::$role_admin,                  // 总管理员
			RbacConstant::$role_channel_manager,        // 渠道经理
			RbacConstant::$role_channel_charger,        // 渠道主管
			RbacConstant::$role_project_charger,        // 项目主管
			RbacConstant::$role_field_manager,          // 项目专员
			RbacConstant::$role_business_charger,       // 商务主管
			RbacConstant::$role_bd_specialist,//商务专员
			RbacConstant::$role_db_manager,             // 拓展主管
			RbacConstant::$role_estate_expand,          // 拓展专员
			RbacConstant::$role_group_expand_charger,   // 集团拓展主管
			RbacConstant::$role_group_expand_person,    // 集团拓展专员
			RbacConstant::$role_data_operation_specialist, //数据运营专员
			RbacConstant::$role_operation_interns, //运营实习生
			RbacConstant::$role_operation_manager,  //运营主管
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' => '楼盘字典-图片管理-图片删除',
		'auth_url'  => 'yw-project-img-new/del-img',
		'parent_url'=> 'yw-projects/all',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => [
			RbacConstant::$role_admin,                  // 总管理员
			RbacConstant::$role_channel_manager,        // 渠道经理
			RbacConstant::$role_channel_charger,        // 渠道主管
			RbacConstant::$role_project_charger,        // 项目主管
			RbacConstant::$role_field_manager,          // 项目专员
			RbacConstant::$role_business_charger,       // 商务主管
			RbacConstant::$role_bd_specialist,//商务专员
			RbacConstant::$role_db_manager,             // 拓展主管
			RbacConstant::$role_estate_expand,          // 拓展专员
			RbacConstant::$role_group_expand_charger,   // 集团拓展主管
			RbacConstant::$role_group_expand_person,    // 集团拓展专员
			RbacConstant::$role_data_operation_specialist, //数据运营专员
			RbacConstant::$role_operation_interns, //运营实习生
			RbacConstant::$role_operation_manager,  //运营主管
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' => '楼盘字典-图片管理-图片删除',
		'auth_url'  => 'yw-project-img-new/del-img',
		'parent_url'=> 'yw-projects/all',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => [
			RbacConstant::$role_admin,                  // 总管理员
			RbacConstant::$role_channel_manager,        // 渠道经理
			RbacConstant::$role_channel_charger,        // 渠道主管
			RbacConstant::$role_project_charger,        // 项目主管
			RbacConstant::$role_field_manager,          // 项目专员
			RbacConstant::$role_business_charger,       // 商务主管
			RbacConstant::$role_bd_specialist,//商务专员
			RbacConstant::$role_db_manager,             // 拓展主管
			RbacConstant::$role_estate_expand,          // 拓展专员
			RbacConstant::$role_group_expand_charger,   // 集团拓展主管
			RbacConstant::$role_group_expand_person,    // 集团拓展专员
			RbacConstant::$role_data_operation_specialist, //数据运营专员
			RbacConstant::$role_operation_interns, //运营实习生
			RbacConstant::$role_operation_manager,  //运营主管
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' => '楼盘字典-修改楼盘常用信息',
		'auth_url'  => 'yw-projects/update',
		'parent_url'=> 'yw-projects/all',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => [
			RbacConstant::$role_admin,                  // 总管理员
			RbacConstant::$role_channel_manager,        // 渠道经理
			RbacConstant::$role_channel_charger,        // 渠道主管
			RbacConstant::$role_project_charger,        // 项目主管
			RbacConstant::$role_field_manager,          // 项目专员
			RbacConstant::$role_business_charger,       // 商务主管
			RbacConstant::$role_bd_specialist,//商务专员
			RbacConstant::$role_db_manager,             // 拓展主管
			RbacConstant::$role_estate_expand,          // 拓展专员
			RbacConstant::$role_group_expand_charger,   // 集团拓展主管
			RbacConstant::$role_group_expand_person,    // 集团拓展专员
			RbacConstant::$role_data_operation_specialist, //数据运营专员
			RbacConstant::$role_operation_interns, //运营实习生
			RbacConstant::$role_operation_manager,  //运营主管
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' => '楼盘字典-其他信息',
		'auth_url'  => 'yw-projects/view-others',
		'parent_url'=> 'yw-projects/all',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => [
			RbacConstant::$role_admin,                  // 总管理员
			RbacConstant::$role_channel_manager,        // 渠道经理
			RbacConstant::$role_channel_charger,        // 渠道主管
			RbacConstant::$role_project_charger,        // 项目主管
			RbacConstant::$role_field_manager,          // 项目专员
			RbacConstant::$role_business_charger,       // 商务主管
			RbacConstant::$role_bd_specialist,//商务专员
			RbacConstant::$role_db_manager,             // 拓展主管
			RbacConstant::$role_estate_expand,          // 拓展专员
			RbacConstant::$role_group_expand_charger,   // 集团拓展主管
			RbacConstant::$role_group_expand_person,    // 集团拓展专员
			RbacConstant::$role_data_operation_specialist, //数据运营专员
			RbacConstant::$role_operation_interns, //运营实习生
			RbacConstant::$role_operation_manager,  //运营主管
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' => '楼盘字典-其他信息编辑',
		'auth_url'  => 'yw-projects/others',
		'parent_url'=> 'yw-projects/all',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => [
			RbacConstant::$role_admin,                  // 总管理员
			RbacConstant::$role_channel_manager,        // 渠道经理
			RbacConstant::$role_channel_charger,        // 渠道主管
			RbacConstant::$role_project_charger,        // 项目主管
			RbacConstant::$role_field_manager,          // 项目专员
			RbacConstant::$role_business_charger,       // 商务主管
			RbacConstant::$role_bd_specialist,//商务专员
			RbacConstant::$role_db_manager,             // 拓展主管
			RbacConstant::$role_estate_expand,          // 拓展专员
			RbacConstant::$role_group_expand_charger,   // 集团拓展主管
			RbacConstant::$role_group_expand_person,    // 集团拓展专员
			RbacConstant::$role_data_operation_specialist, //数据运营专员
			RbacConstant::$role_operation_interns, //运营实习生
			RbacConstant::$role_operation_manager,  //运营主管
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' => '楼盘字典-图片信息',
		'auth_url'  => 'yw-project-img-new/index',
		'parent_url'=> 'yw-projects/all',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => [
			RbacConstant::$role_admin,                  // 总管理员
			RbacConstant::$role_channel_manager,        // 渠道经理
			RbacConstant::$role_channel_charger,        // 渠道主管
			RbacConstant::$role_project_charger,        // 项目主管
			RbacConstant::$role_field_manager,          // 项目专员
			RbacConstant::$role_business_charger,       // 商务主管
			RbacConstant::$role_bd_specialist,//商务专员
			RbacConstant::$role_db_manager,             // 拓展主管
			RbacConstant::$role_estate_expand,          // 拓展专员
			RbacConstant::$role_group_expand_charger,   // 集团拓展主管
			RbacConstant::$role_group_expand_person,    // 集团拓展专员
			RbacConstant::$role_data_operation_specialist, //数据运营专员
			RbacConstant::$role_operation_interns, //运营实习生
			RbacConstant::$role_operation_manager,  //运营主管
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' => '楼盘字典-动态信息',
		'auth_url'  => 'cj-project-dynamic-info/index',
		'parent_url'=> 'yw-projects/all',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => [
			RbacConstant::$role_admin,                  // 总管理员
			RbacConstant::$role_channel_manager,        // 渠道经理
			RbacConstant::$role_channel_charger,        // 渠道主管
			RbacConstant::$role_project_charger,        // 项目主管
			RbacConstant::$role_field_manager,          // 项目专员
			RbacConstant::$role_business_charger,       // 商务主管
			RbacConstant::$role_bd_specialist,//商务专员
			RbacConstant::$role_db_manager,             // 拓展主管
			RbacConstant::$role_estate_expand,          // 拓展专员
			RbacConstant::$role_group_expand_charger,   // 集团拓展主管
			RbacConstant::$role_group_expand_person,    // 集团拓展专员
			RbacConstant::$role_data_operation_specialist, //数据运营专员
			RbacConstant::$role_operation_interns, //运营实习生
			RbacConstant::$role_operation_manager,  //运营主管
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' => '楼盘字典-动态信息创建',
		'auth_url'  => 'cj-project-dynamic-info/create',
		'parent_url'=> 'yw-projects/all',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => [
			RbacConstant::$role_admin,                  // 总管理员
			RbacConstant::$role_channel_manager,        // 渠道经理
			RbacConstant::$role_channel_charger,        // 渠道主管
			RbacConstant::$role_project_charger,        // 项目主管
			RbacConstant::$role_field_manager,          // 项目专员
			RbacConstant::$role_business_charger,       // 商务主管
			RbacConstant::$role_bd_specialist,//商务专员
			RbacConstant::$role_db_manager,             // 拓展主管
			RbacConstant::$role_estate_expand,          // 拓展专员
			RbacConstant::$role_group_expand_charger,   // 集团拓展主管
			RbacConstant::$role_group_expand_person,    // 集团拓展专员
			RbacConstant::$role_data_operation_specialist, //数据运营专员
			RbacConstant::$role_operation_interns, //运营实习生
			RbacConstant::$role_operation_manager,  //运营主管
		],
		'creator'   =>  '徐程亮',
	],
	[
		'auth_name' => '楼盘字典-动态信息编辑',
		'auth_url'  => 'cj-project-dynamic-info/update',
		'parent_url'=> 'yw-projects/all',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => [
			RbacConstant::$role_admin,                  // 总管理员
			RbacConstant::$role_channel_manager,        // 渠道经理
			RbacConstant::$role_channel_charger,        // 渠道主管
			RbacConstant::$role_project_charger,        // 项目主管
			RbacConstant::$role_field_manager,          // 项目专员
			RbacConstant::$role_business_charger,       // 商务主管
			RbacConstant::$role_bd_specialist,//商务专员
			RbacConstant::$role_db_manager,             // 拓展主管
			RbacConstant::$role_estate_expand,          // 拓展专员
			RbacConstant::$role_group_expand_charger,   // 集团拓展主管
			RbacConstant::$role_group_expand_person,    // 集团拓展专员
			RbacConstant::$role_data_operation_specialist, //数据运营专员
			RbacConstant::$role_operation_interns, //运营实习生
			RbacConstant::$role_operation_manager,  //运营主管
		],
		'creator'   =>  '徐程亮',
	],
];