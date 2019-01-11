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
		'auth_name' =>  '员工管理',
		'auth_url'  =>  'employee/index',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '楼盘商务信息管理-列表',
		'auth_url' => 'project/index',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],

	//权限：数据运营专员，运营实习生，运营主管，总管理员
	[
		'auth_name' => '创建楼盘',
		'auth_url' => 'yw-projects/create',
		'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
		'role' => [
			RbacConstant::$role_data_operation_specialist,
			RbacConstant::$role_operation_interns,
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_admin,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '跟进列表-约见地点下拉列表',
		'auth_url' => 'yw-see-project/get-meet-address',
		'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
		'role'      =>  CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '楼盘字典字段修改审核',
		'auth_url' => 'cj-project-dictionary-audit',
		'parent_url' => 'yw-projects',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [],
		'creator'   =>  '白少杰',
	],
	[//拓展专员，拓展主管，渠道主管，渠道经理，项目专员，项目主管，集团拓展主管，集团拓展专员，商务主管	  商务专员	 运营主管	 运营实习生	数据运营专员
		'auth_name' => '楼盘字典字段修改审核-列表页',
		'auth_url' => 'cj-project-dictionary-audit/index',
		'parent_url' => 'cj-project-dictionary-audit',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_estate_expand,
			RbacConstant::$role_db_manager,
			RbacConstant::$role_channel_charger,
			RbacConstant::$role_channel_manager,
			RbacConstant::$role_field_manager,
			RbacConstant::$role_project_charger,
			RbacConstant::$role_group_expand_charger,
			RbacConstant::$role_group_expand_person,
			RbacConstant::$role_business_charger,
			RbacConstant::$role_bd_specialist,
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
			RbacConstant::$role_data_operation_specialist,

		],
		'creator'   =>  '白少杰',
	],
	[//拓展专员，拓展主管，渠道主管，渠道经理，项目专员，项目主管，集团拓展主管，集团拓展专员，商务主管	  商务专员	 运营主管	 运营实习生	数据运营专员
		'auth_name' => '楼盘字典字段修改审核-审核详情页',
		'auth_url' => 'cj-project-dictionary-audit/view',
		'parent_url' => 'cj-project-dictionary-audit',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_estate_expand,
			RbacConstant::$role_db_manager,
			RbacConstant::$role_channel_charger,
			RbacConstant::$role_channel_manager,
			RbacConstant::$role_field_manager,
			RbacConstant::$role_project_charger,
			RbacConstant::$role_group_expand_charger,
			RbacConstant::$role_group_expand_person,
			RbacConstant::$role_business_charger,
			RbacConstant::$role_bd_specialist,
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
			RbacConstant::$role_data_operation_specialist,

		],
		'creator'   =>  '白少杰',
	],




	[
		'auth_name' => '楼盘列表',
		'auth_url' => 'yw-projects/index',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '日程列表',
		'auth_url' => 'yw-schedule/index',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '员工个人主页',
		'auth_url' => 'employee/home',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '我的消息列表	',
		'auth_url' => 'yw-message/index',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],[
		'auth_name' => '修改员工单条信息	',
		'auth_url' => 'employee/edit-user',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '待办事项列表',
		'auth_url' => 'yw-message/to-do',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '员工登出	',
		'auth_url' => 'site/logout',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '修改员工密码',
		'auth_url' => 'employee/reset-psw',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '新增楼盘',
		'auth_url' => 'yw-projects/create',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '新增楼盘-复制已有楼盘',
		'auth_url' => 'yw-projects/copy-project',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '新增楼盘点评',
		'auth_url' => 'yw-project-review/create',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '拓展新建楼盘',
		'auth_url' => 'yw-projects/expand-create-project',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],



	[
		'auth_name' => '查看楼盘',
		'auth_url' => 'yw-projects/view',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '修改楼盘',
		'auth_url' => 'yw-projects/update',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '户型创建',
		'auth_url' => 'yw-projects/house-type-create',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '楼盘户型',
		'auth_url' => 'yw-projects/house-type-index',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '户型查看',
		'auth_url' => 'yw-projects/house-type-view',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '户型修改',
		'auth_url' => 'yw-projects/house-type-update',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '楼盘户型图创建',
		'auth_url' => 'yw-projects/house-type-imgs-create',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '楼盘户型图列表',
		'auth_url' => 'yw-projects/house-type-imgs-index',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '删除户型',
		'auth_url' => 'yw-projects/house-type-delete',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '删除户型图',
		'auth_url' => 'yw-projects/house-type-imgs-delete',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '楼盘户型图更新',
		'auth_url' => 'yw-projects/house-type-imgs-update',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '判断楼盘是否审核',
		'auth_url' => 'yw-projects/check-project-aduit',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_estate_expand,
			RbacConstant::$role_db_manager,
			RbacConstant::$role_channel_charger,
			RbacConstant::$role_channel_manager,
			RbacConstant::$role_field_manager,
			RbacConstant::$role_project_charger,
			RbacConstant::$role_group_expand_charger,
			RbacConstant::$role_group_expand_person,
			RbacConstant::$role_business_charger,
			RbacConstant::$role_bd_specialist,
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
			RbacConstant::$role_data_operation_specialist,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '更改楼盘显示状态',
		'auth_url' => 'yw-projects/change-show-status',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '楼盘管理-编辑楼盘商务信息',
		'auth_url' => 'yw-project-business/view',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '楼盘详情',
		'auth_url' => 'yw-project-list/view',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],



	[
		'auth_name' => '楼盘管理-查看其他信息',
		'auth_url' => 'yw-projects/view-others',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],

	//楼盘动态信息页面
	[
		'auth_name' => '楼盘动态信息列表页	',
		'auth_url' => 'cj-project-dynamic-info/index',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '新增楼盘动态信息',
		'auth_url' => 'cj-project-dynamic-info/create',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '修改楼盘动态信息',
		'auth_url' => 'cj-project-dynamic-info/update',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' => '查看楼盘动态信息',
		'auth_url' => 'cj-project-dynamic-info/view',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' => '删除楼盘动态信息',
		'auth_url' => 'cj-project-dynamic-info/delete',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' => '动态列表',
		'auth_url' => 'bd-project-dongtai/index',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' => '留电模板-列表页',
		'auth_url' => 'cj-reserve-template/index',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	//图片信息标签页
	[
		'auth_name' => '图册-图片信息',
		'auth_url' => 'yw-project-img-new/index',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
			'auth_name' => '图册-增加图片',
			'auth_url' => 'yw-project-img-new/create',
			'role_type' => CommonConstant::ROLE_TYPE_ADD,
			'role' => [
				RbacConstant::$role_operation_manager,
				RbacConstant::$role_operation_interns,

			],
			'creator'   =>  '白少杰',
	],

	[
			'auth_name' => '图册-更新图片',
			'auth_url' => 'yw-project-img-new/update',
			'role_type' => CommonConstant::ROLE_TYPE_ADD,
			'role' => [
				RbacConstant::$role_operation_manager,
				RbacConstant::$role_operation_interns,

			],
			'creator'   =>  '白少杰',
	],
	[
			'auth_name' => '图册-更新图片状态',
			'auth_url' => 'yw-project-img-new/update-status',
			'role_type' => CommonConstant::ROLE_TYPE_ADD,
			'role' => [
				RbacConstant::$role_operation_manager,
				RbacConstant::$role_operation_interns,

			],
			'creator'   =>  '白少杰',
	],

	[
			'auth_name' => '图册-查看图片',
			'auth_url' => 'yw-project-img-new/view',
			'role_type' => CommonConstant::ROLE_TYPE_ADD,
			'role' => [
				RbacConstant::$role_operation_manager,
				RbacConstant::$role_operation_interns,

			],
			'creator'   =>  '白少杰',
	],
	[
			'auth_name' => '查看图片信息-设置为首页图片	',
			'auth_url' => 'yw-project-img-new/set-home-page-img',
			'role_type' => CommonConstant::ROLE_TYPE_ADD,
			'role' => [
				RbacConstant::$role_operation_manager,
				RbacConstant::$role_operation_interns,

			],
			'creator'   =>  '白少杰',
	],
	[
			'auth_name' => '图册-设置首页轮换图',
			'auth_url' => 'yw-project-img-new/set-home-page-banner',
			'role_type' => CommonConstant::ROLE_TYPE_ADD,
			'role' => [
				RbacConstant::$role_operation_manager,
				RbacConstant::$role_operation_interns,

			],
			'creator'   =>  '白少杰',
	],
	//楼盘其他信息标签

	[
		'auth_name' => '楼盘管理-查看其他信息',
		'auth_url' => 'yw-projects/view-others',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' => '楼盘管理-编辑其他信息',
		'auth_url' => 'yw-projects/others',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' => '楼盘标签管理',
		'auth_url' => 'cj-tag/index',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],



	//楼盘审核
	[
		'auth_name' => ' 点评审核',
		'auth_url' => 'yw-project-review/verify',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '楼盘点评审核-修改点评',
		'auth_url' => 'yw-project-review/update-review',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '楼盘点评审核-修改楼盘点评',
		'auth_url' => 'yw-project-review/edit-review',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '修改点评内容的显示状态',
		'auth_url' => 'yw-project-review/change-review-show-status',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '楼盘点评审核列表-编辑字段',
		'auth_url' => 'yw-project-review/edit-input-field',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '修改点赞基数',
		'auth_url' => 'yw-project-review/like-base',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '楼盘点评审核-驳回记录',
		'auth_url' => 'yw-project-review/review-log',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],


	[
		'auth_name' => '用户点评列表',
		'auth_url' => 'yw-user-project-comment/index',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '用户楼盘点评审核-批量审核',
		'auth_url' => 'yw-user-project-comment/batch-change-status',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '用户楼盘点评审核',
		'auth_url' => 'yw-user-project-comment/change-status',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '用户楼盘点评-添加',
		'auth_url' => 'yw-user-project-comment/create',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '用户楼盘点评-修改',
		'auth_url' => 'yw-user-project-comment/update',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '楼盘点评规则-列表页',
		'auth_url' => 'yw-project-review-rule/index',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '楼盘点评规则-添加',
		'auth_url' => 'yw-project-review-rule/create',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '楼盘点评规则-修改',
		'auth_url' => 'yw-project-review-rule/update',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '抓取图片审核列表',
		'auth_url' => 'bd-project-img/audit-list',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '抓取图片审核',
		'auth_url' => 'bd-project-img/audit',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '楼盘动态信息列表页	',
		'auth_url' => 'cj-project-dynamic-info/index',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '动态列表	',
		'auth_url' => 'bd-project-dongtai/index',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '动态审核	',
		'auth_url' => 'bd-project-dongtai/batch-audit',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' => '楼盘点评审核-列表',
		'auth_url' => 'bd-project-comment/index',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '用户点评审核列表-审核通不通过',
		'auth_url' => 'bd-project-comment/edit-audit-state',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' => '楼盘点评审核列表-编辑列表字段',
		'auth_url' => 'bd-project-comment/edit-input-field',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' => '楼盘组列表',
		'auth_url' => 'bd-project-group/index',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '楼盘组审核通过',
		'auth_url' => 'bd-project-group/pass',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '楼盘组审核待定',
		'auth_url' => 'bd-project-group/pending',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '楼盘组手动匹配',
		'auth_url' => 'bd-project-group/manual-match',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' => '获取楼盘组详细信息	',
		'auth_url' => 'bd-project-group/get-group-info',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '获取抓取楼盘详细信息',
		'auth_url' => 'bd-project-group/get-project-info',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '楼盘重新匹配',
		'auth_url' => 'bd-project-group/rematch',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '数据源楼盘管理-列表',
		'auth_url' => 'bd-project/index',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '敏感词过滤配置化-列表',
		'auth_url' => 'cj-black-words/index',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '敏感词过滤配置化-添加',
		'auth_url' => 'cj-black-words/create',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' => '敏感词过滤配置化-删除',
		'auth_url' => 'cj-black-words/delete',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' => '敏感词过滤配置化-编辑',
		'auth_url' => 'cj-black-words/update',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' => '留电模板-列表页',
		'auth_url' => 'cj-reserve-template/index',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' => '动态留电模板-获取排序最大值	',
		'auth_url' => 'cj-reserve-template/max-sort',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '动态留电模板-修改',
		'auth_url' => 'cj-reserve-template/update',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' => '动态留电模板-添加',
		'auth_url' => 'cj-reserve-template/create',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,

		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' => '楼盘标签管理',
		'auth_url' => 'cj-tag/index	',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '楼盘标签管理-创建',
		'auth_url' => 'cj-tag/create',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '楼盘标签管理-编辑',
		'auth_url' => 'cj-tag/update',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,

		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' => '楼盘抓取脚本执行监控-列表',
		'auth_url' => 'bd-project-catch-time/index',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,

		],
		'creator'   =>  '白少杰',
	],


	[
		'auth_name' => '楼盘信息运营列表',
		'auth_url' => 'yw-down-payment-rule/index',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '楼盘信息运营-新增城市首付配置',
		'auth_url' => 'yw-down-payment-rule/create',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,

		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' => '楼盘信息运营-修改',
		'auth_url' => 'yw-down-payment-rule/ajax-update',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,

		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '点评列表',
		'auth_url' => 'yw-project-review/index',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' => '新增楼盘点评',
		'auth_url' => 'yw-project-review/create',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '修改点评	',
		'auth_url' => 'yw-project-review/update',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '楼盘点评审核-修改点评',
		'auth_url' => 'yw-project-review/update-review',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' => '带看未点评列表',
		'auth_url' => 'yw-project-review/list-not-review',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' => '删除点评',
		'auth_url' => 'yw-project-review/delete',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role' => [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' =>  '客服上户日常统计-列表页',
		'auth_url'  =>  'yw-service-order-on-stat/index',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '客服上户日常统计-列表页-ajax',
		'auth_url'  =>  'yw-service-order-on-stat/get-stats',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '客服上户日常统计-导出',
		'auth_url'  =>  'yw-service-order-on-stat/export-excel',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '报表',
		'auth_url'  =>  'stat-backend/get-json-stat-table-only-list',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],

	//服务评价管理
	[
		'auth_name' =>  '服务评价列表	',
		'auth_url'  =>  'yw-order-comment/index',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '服务评价加精	',
		'auth_url'  =>  'yw-order-comment/marvellous',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' =>  '服务评价加精	',
		'auth_url'  =>  'yw-order-comment/marvellous',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '编辑用户评论	',
		'auth_url'  =>  'yw-order-comment/update',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '服务评价状态修改',
		'auth_url'  =>  'yw-order-comment/open',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' =>  '咨询师审核列表页',
		'auth_url'  =>  'header/audit-list',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,

		],
		'creator'   =>  '白少杰',
	],


	[
		'auth_name' =>  '咨询师审核页面',
		'auth_url'  =>  'header/audit',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,

		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' =>  '官网发布',
		'auth_url'  =>  'header/agree',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,

		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' =>  '拒绝发布',
		'auth_url'  =>  'header/refuse',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,

		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' =>  '查看咨询师',
		'auth_url'  =>  'header/audit-view',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,

		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' =>  '京东活动统计	',
		'auth_url'  =>  'activity-jd/index',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' =>  '京东卡记录页-列表',
		'auth_url'  =>  'activity-jd-card-record/index',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '京东卡记录页-发送卡密	',
		'auth_url'  =>  'activity-jd-card-record/send',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '京东卡记录页-申诉',
		'auth_url'  =>  'activity-jd-card-record/appeal',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' =>  '问答质检结果-列表页',
		'auth_url'  =>  'yw-qa-quality-test/index',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '问答质检结果-删除质检',
		'auth_url'  =>  'yw-qa-quality-test/delete',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],

	//咨询中心

	[
		'auth_name' =>  '变更通知-变更通知查看',
		'auth_url'  =>  'project-change-notify/index_new',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '问答知识库-列表页',
		'auth_url'  =>  'qa-question/index',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '知识问答库-点赞',
		'auth_url'  =>  'qa-question/employee-like',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '主推楼盘库存	',
		'auth_url'  =>  'yw-main-push-project-inventory/current',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '主推楼盘产品力图',
		'auth_url'  =>  'yw-main-push-project-inventory/energy-diagram',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '主推楼盘产品力图',
		'auth_url'  =>  'yw-main-push-project-inventory/energy-diagram',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '楼盘库存历史查询',
		'auth_url'  =>  'yw-main-push-project-inventory/history-search',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' =>  '主推楼盘库存明细',
		'auth_url'  =>  'yw-main-push-project-inventory/inventory-detail',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '资源中心',
		'auth_url'  =>  'tr-resource/index',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '资源列表-编辑资源',
		'auth_url'  =>  'tr-resource/update',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '资源列表-删除资源',
		'auth_url'  =>  'tr-resource/delete',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '附件上传权限',
		'auth_url'  =>  'tr-resource/create',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '楼盘学习成绩管理	',
		'auth_url'  =>  'tr-employee/index',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '素材库-首页',
		'auth_url'  =>  'yw-material-library/index',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '素材库-增加分类',
		'auth_url'  =>  'yw-material-library/add-classify',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '素材库-删除分类',
		'auth_url'  =>  'yw-material-library/delete-classify',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '素材库-增加文章',
		'auth_url'  =>  'yw-material-area/create',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' =>  '市场和区域修改',
		'auth_url'  =>  'yw-material-area/update',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],


//	系统管理
	[
		'auth_name' =>  '字段常量配置列表页',
		'auth_url'  =>  'cj-object-field-config/index',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '添加字段常量配置	',
		'auth_url'  =>  'cj-object-field-config/create',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '修改字段常量配置',
		'auth_url'  =>  'cj-object-field-config/update',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '查看字段常量配置',
		'auth_url'  =>  'cj-object-field-config/view',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '城市管理-添加城市',
		'auth_url'  =>  'district/create-city',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '城市管理-列表页',
		'auth_url'  =>  'district/index',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '城市管理-添加区',
		'auth_url'  =>  'district/create-area',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '城市查看',
		'auth_url'  =>  'district/view',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '城市修改',
		'auth_url'  =>  'district/update',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],

	//通州计划
	[
		'auth_name' =>  '上户计划列表页',
		'auth_url'  =>  'alloc_plan/schedule/index',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '上户计划查看明细',
		'auth_url'  =>  'alloc_plan/put-on-date-detail/see-month-detail	',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '上户计划月历列表页',
		'auth_url'  =>  'alloc_plan/schedule/view',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '投放数据聚合页-列表页',
		'auth_url'  =>  'alloc_plan/put-on-date-detail/index',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '日历页',
		'auth_url'  =>  'alloc_plan/schedule/date-schedule',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],


];
