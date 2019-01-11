<?php
namespace console\template\auth\common;

/**
 * @author: 白少杰
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

	//人力系统
	[
		'auth_name' =>  '审批统计页-列表页',
		'auth_url'  =>  'hr-approval-apply/index',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '个人工作台',
		'auth_url'  =>  'hr-employee-check/work-bench',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '考勤详情',
		'auth_url'  =>  'hr-employee-check/check-list',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '工作台-上传头像',
		'auth_url'  =>  'hr-employee-check/upload-avatar',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '工作台-附件上传',
		'auth_url'  =>  'hr-upload/index',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],

	//人力审批发起


	[
		'auth_name' =>  '自定义审批发起',
		'auth_url'  =>  'hr-approval/custom-approval',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' =>  '调薪审批发起',
		'auth_url'  =>  'hr-approval-salary/salary',
		'parent_url'=>  'hr-approval',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '休假审批发起',
		'auth_url'  =>  'hr-approval-vacation/create',
		'parent_url'=>  'hr-approval',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '考勤申诉审批发起',
		'auth_url'  =>  'hr-approval-check/create-check-approval',
		'parent_url'=>  'hr-approval',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '加班审批发起',
		'auth_url'  =>  'hr-approval-overjob/overjob',
		'parent_url'=>  'hr-approval',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' =>  '外出审批发起',
		'auth_url'  =>  'hr-approval-out/create',
		'parent_url'=>  'hr-approval',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' =>  '出差审批发起',
		'auth_url'  =>  'hr-approval-evection/create',
		'parent_url'=>  'hr-approval',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' =>  '晋升审批发起	',
		'auth_url'  =>  'hr-approval-promotion/promotion',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '转组审批发起',
		'auth_url'  =>  'hr-approval-group-transfer/create	',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '见习期转正审批发起',
		'auth_url'  =>  'hr-approval-intern-regular/create',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '转岗审批发起	',
		'auth_url'  =>  'hr-approval-job-transfer/create',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' =>  '离职审批发起',
		'auth_url'  =>  'hr-approval-quit/create',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' =>  '离职交接审批发起',
		'auth_url'  =>  'hr-approval-offjob/offjob',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '试用期转正审批发起',
		'auth_url'  =>  'hr-turn-positive-probationer/create',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '增加编制审批发起',
		'auth_url'  =>  'hr-approval-add-unit/create',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' =>  '人力-获取出差天数',
		'auth_url'  =>  'hr-approval-evection/get-evection-day-num',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '审批-获取见习期时间',
		'auth_url'  =>  'hr-approval-intern-regular/get-internship-end-time',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],




	[
		'auth_name' =>  '财务-获取增加审批模板	',
		'auth_url'  =>  'cw-approval/get-add-approver-html	',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,

		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '财务-增加审批人接口',
		'auth_url'  =>  'cw-approval/add-approver',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,

		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '销假',
		'auth_url'  =>  'hr-employee-check/cancel-vacation',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,

		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '工作台-获取考勤记录',
		'auth_url'  =>  'hr-employee-check/get-check-record',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,

		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '人力消息删除	',
		'auth_url'  =>  'hr-employee-check/delete-msg',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,

		'creator'   =>  '白少杰',
	],


	[
		'auth_name' =>  '人力-前往修改密码',
		'auth_url'  =>  'hr-task/edit-pwd',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],




	//财务审批  一个方法
	[
		'auth_name' =>  '合同审批',
		'auth_url'  =>  'cw-approval/create',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],



	[
		'auth_name' =>  '财务-金额求和接口',
		'auth_url'  =>  'cw-approval/get-sum',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '审批获取社保公积金城市列表	',
		'auth_url'  =>  'hr-approval-job-transfer/get-city-list	',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '检查是否填写离职时间或是附件',
		'auth_url'  =>  'hr-approval-record/check-job',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '发送短信',
		'auth_url'  =>  'hr-upload/send-sms',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' =>  '获取审批类型下拉框',
		'auth_url'  =>  'hr-approval-type/get-approval-type-list',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '审批详情-下载审批单	',
		'auth_url'  =>  'hr-approval-record/download-form',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
//	[
//		'auth_name' =>  '审批详情-获取下载链接	',
//		'auth_url'  =>  'hr-approval-record/get-form-page',
//		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
//		'role' => CommonConstant::ADD_ROLE_ALL,
//		'creator'   =>  '白少杰',
//	],

	[
		'auth_name' =>  '修改审批人',
		'auth_url'  =>  'hr-approval-record/edit-approver',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '审批-获取入职时间',
		'auth_url'  =>  'hr-approval-job-transfer/get-entry-date-time',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],


	[
		'auth_name' =>  '审批统计详情页',
		'auth_url'  =>  'hr-approval-record/detail',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '人事审批通过	',
		'auth_url'  =>  'hr-approval-apply/pass	',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '人事审批撤回	',
		'auth_url'  =>  'hr-approval-apply/revoke',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '人事审批驳回	',
		'auth_url'  =>  'hr-approval-apply/reject',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' =>  '审批-考勤申诉获取可申诉的日期	',
		'auth_url'  =>  'hr-approval-check/get-can-approval-date',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '审批-获取休假提示文案	',
		'auth_url'  =>  'hr-approval-vacation/get-vacation-tip',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],

	[
		'auth_name' =>  '审批-获取员工入职时间	',
		'auth_url'  =>  'hr-turn-positive-probationer/get-entry-date-time',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name' =>  '审批-获取未转正list',
		'auth_url'  =>  'hr-approval-intern-regular/employee-drop-down-list	',
		'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
		'role' => CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],

	[
		'auth_name'=>'保存上传病假附件',
		'auth_url'=>'hr-approval-vacation/attachment',
		'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
		'role'      =>  CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name'=>'工作台-上传头像',
		'auth_url'=>'hr-employee-check/upload-avatar',
		'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
		'role'      =>  CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name'=>'附件上传',
		'auth_url'=>'hr-upload/index',
		'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
		'role'      =>  CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name'=>'人力图片上传',
		'auth_url'=>'hr-upload/upload-img',
		'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
		'role'      =>  CommonConstant::ADD_ROLE_ALL,
		'creator'   =>  '白少杰',
	],
	[
		'auth_name'  => '审批-获取未转正list',
		'auth_url' => 'hr-approval-intern-regular/employee-drop-down-list',
		'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
		'role'      => CommonConstant::ADD_ROLE_ALL,
		'creator'   => '白少杰',
	],
	[
		'auth_name'  => '审批获取社保公积金城市列表',
		'auth_url' => 'hr-approval-job-transfer/get-city-list',
		'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
		'role'      => CommonConstant::ADD_ROLE_ALL,
		'creator'   => '白少杰',
	],
	[
		'auth_name'  => '获取审批类型下拉框',
		'auth_url' => 'hr-approval-type/get-approval-type-list',
		'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
		'role'      => CommonConstant::ADD_ROLE_ALL,
		'creator'   => '白少杰',
	],
	[
		'auth_name'  => '考勤详情',
		'auth_url' => 'hr-employee-check/check-list',
		'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
		'role'      => CommonConstant::ADD_ROLE_ALL,
		'creator'   => '白少杰',
	],
	[
		'auth_name'  => '生日提醒',
		'auth_url' => 'hr-employee-manage-department/birth-employee-list',
		'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
		'role'      => CommonConstant::ADD_ROLE_ALL,
		'creator'   => '白少杰',
	],
	[
		'auth_name'  => '人力系统-获取员工信息下拉列表',
		'auth_url' => 'hr-employee/get-employee-dropdown-list',
		'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
		'role'      => CommonConstant::ADD_ROLE_ALL,
		'creator'   => '白少杰',
	],
	[
		'auth_name'  => '组织架构列表-部门下拉列表',
		'auth_url' => 'hr-org/get-dropdown-list',
		'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
		'role'      => CommonConstant::ADD_ROLE_ALL,
		'creator'   => '白少杰',
	],
	[
		'auth_name'  => '岗位词典-获取岗位分类下拉列表',
		'auth_url' => 'hr-post-cate/get-cate-dropdown-list',
		'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
		'role'      => CommonConstant::ADD_ROLE_ALL,
		'creator'   => '白少杰',
	],
	[
		'auth_name'  => '岗位词典-获取岗位下拉列表',
		'auth_url' => 'hr-post/get-post-dropdown-list',
		'role_type' => CommonConstant::ROLE_TYPE_RECOVER,
		'role'      => CommonConstant::ADD_ROLE_ALL,
		'creator'   => '白少杰',
	],

];
