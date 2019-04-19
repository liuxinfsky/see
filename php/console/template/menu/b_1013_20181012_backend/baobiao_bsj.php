<?php
namespace console\template\menu\b_1013_20181012_backend;

/**
 * 719分支上线菜单配置数组
 * @author: pengqiucheng<pengqiucheng@julive.com>
 * @date: 2018/7/31 18:10
 * [
'menu_name'=>'', 	//菜单名称
'menu_url'=>'',  	//菜单路由
'menu_type'=>'', 	//菜单类型 1普通类 2视图类（如果是普通类，可不配置此字段）
'parent_url'=>'', 	//父级菜单路由
'role_type'=>'',    //角色类型 add新增角色 reduce减少角色 recover覆盖角色
'role'=>[],			//角色数组 all所有角色
'creator'=>'',		//创建人姓名
'sort'=>'',         //排序
]
 */


use common\constants\CommonConstant;
use common\constants\RbacConstant;


//************************  报表菜单   *******************//



return [

	[
		'menu_name' =>  '咨询师核算汇总',
		'menu_url'  =>  '/chart_table.html?table=view_merge_sql_adjust_consultant_stat',
		'menu_type' => CommonConstant::MENU_TYPE_VIEW,
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'menu_name' =>  '咨询师组核算汇总',
		'menu_url'  =>  '/chart_table.html?table=view_merge_sql_adjust_manager_stat',
		'menu_type' => CommonConstant::MENU_TYPE_VIEW,
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'menu_name' =>  '楼盘核算汇总',
		'menu_url'  =>  '/chart_table.html?table=view_merge_sql_adjust_project_stat',
		'menu_type' => CommonConstant::MENU_TYPE_VIEW,
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'menu_name' =>  '区域核算汇总',
		'menu_url'  =>  '/chart_table.html?table=view_merge_sql_adjust_district_stat',
		'menu_type' => CommonConstant::MENU_TYPE_VIEW,
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'menu_name' =>  '渠道核算汇总',
		'menu_url'  =>  '/chart_table.html?table=view_merge_sql_adjust_channel_stat',
		'menu_type' => CommonConstant::MENU_TYPE_VIEW,
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'menu_name' =>  '资金核算汇总',
		'menu_url'  =>  '/chart_table.html?table=view_merge_sql_adjust_money_stat',
		'menu_type' => CommonConstant::MENU_TYPE_VIEW,
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],

	[
		'menu_name' =>  '排号核算详情',
		'menu_url'  =>  '/chart_table.html?table=view_adjust_paihao_employee_detail',
		'menu_type' => CommonConstant::MENU_TYPE_VIEW,
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],


	[
		'menu_name' =>  '楼盘业务统计',
		'menu_url'  =>  '/chart_table.html?table=view_merge_sql_project_stat&sort_field=线索量&sort_order=desc',
		'menu_type' => CommonConstant::MENU_TYPE_VIEW,
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'menu_name' =>  '渠道业务统计',
		'menu_url'  =>  '/chart_table.html?table=view_merge_sql_channel_stat',
		'menu_type' => CommonConstant::MENU_TYPE_VIEW,
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],

	[
		'menu_name' =>  '订单业务详情统计',
		'menu_url'  =>  '/chart_table.html?table=view_order_business_detail_stat',
		'menu_type' => CommonConstant::MENU_TYPE_VIEW,
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'menu_name' =>  '联系延迟录入统计',
		'menu_url'  =>  '/chart_table.html?table=view_consultant_real_contact_timeout_stat',
		'menu_type' => CommonConstant::MENU_TYPE_VIEW,
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'menu_name' =>  '带看延迟录入统计',
		'menu_url'  =>  '/chart_table.html?table=view_consultant_see_project_timeout_stat',
		'menu_type' => CommonConstant::MENU_TYPE_VIEW,
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],


	[
		'menu_name' =>  '线索详情统计',
		'menu_url'  =>  '/chart_table.html?table=view_clue_customer_stat',
		'menu_type' => CommonConstant::MENU_TYPE_VIEW,
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'menu_name' =>  '上户详情统计',
		'menu_url'  =>  '/chart_table.html?table=view_in_customer_stat',
		'menu_type' => CommonConstant::MENU_TYPE_VIEW,
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'menu_name' =>  '带看详情统计',
		'menu_url'  =>  '/chart_table.html?table=view_sql_see_project_stat&use_where=1',
		'menu_type' => CommonConstant::MENU_TYPE_VIEW,
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'menu_name' =>  '认购详情统计',
		'menu_url'  =>  '/chart_table.html?table=view_subscribe_order_stat',
		'menu_type' => CommonConstant::MENU_TYPE_VIEW,
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'menu_name' =>  '签约详情统计',
		'menu_url'  =>  '/chart_table.html?table=view_sign_order_stat',
		'menu_type' => CommonConstant::MENU_TYPE_VIEW,
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'menu_name' =>  '排号详情统计	',
		'menu_url'  =>  '/chart_table.html?table=view_paihao_order_stat',
		'menu_type' => CommonConstant::MENU_TYPE_VIEW,
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'menu_name' =>  '草签详情统计',
		'menu_url'  =>  '/chart_table.html?table=view_sign_grass_order_stat',
		'menu_type' => CommonConstant::MENU_TYPE_VIEW,
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],



	[
		'menu_name' =>  '周期维度统计',
		'menu_url'  =>  '/chart_table.html?table=view_sql_order_stage_peroid_stat&use_where=1',
		'menu_type' => CommonConstant::MENU_TYPE_VIEW,
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'menu_name' =>  '网签单服务评级',
		'menu_url'  =>  '/chart_table.html?table=view_order_comment_stat',
		'menu_type' => CommonConstant::MENU_TYPE_VIEW,
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],

	[
		'menu_name' =>  '咨询师楼盘点评',
		'menu_url'  =>  '/chart_table.html?table=view_merge_sql_see_project_review_stat',
		'menu_type' => CommonConstant::MENU_TYPE_VIEW,
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],

	[
		'menu_name' =>  '客户留电详情列表',
		'menu_url'  =>  '/chart_table.html?table=view_order_website_op_stat',
		'menu_type' => CommonConstant::MENU_TYPE_VIEW,
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'menu_name' =>  '客服上户日常统计',
		'menu_url'  =>  '/index.php?r=yw-service-order-on-stat/index',
		'menu_type' => CommonConstant::MENU_TYPE_VIEW,
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],





];
