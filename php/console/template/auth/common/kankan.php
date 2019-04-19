<?php

namespace console\template\auth\common;

use common\constants\CommonConstant;
use common\constants\RbacConstant;

/**
 * 侃侃而谈
 * Created by PhpStorm.
 * User: Julive.com
 * Date: 2018/11/6
 * Time: 10:38
 */

return [
	[
		'auth_name'=>'添加反馈-添加用户建议',
		'auth_url'=>'bbs-forum/add-advice',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => CommonConstant::ADD_ROLE_ALL,
	],
	[
		'auth_name'=>'添加反馈-添加用户问题',
		'auth_url'=>'bbs-forum/add-question',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => CommonConstant::ADD_ROLE_ALL,
	],
	[
		'auth_name'=>'添加反馈-添加用户核算bug',
		'auth_url'=>'bbs-forum/add-user-bug-adjust',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => CommonConstant::ADD_ROLE_ALL,
	],
	[
		'auth_name'=>'添加反馈-添加用户常见问题',
		'auth_url'=>'bbs-forum/add-user-bug-common',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => CommonConstant::ADD_ROLE_ALL,
	],
	[
		'auth_name'=>'添加反馈-添加话务系统问题',
		'auth_url'=>'bbs-forum/add-user-bug-sysmobile',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => CommonConstant::ADD_ROLE_ALL,
	],
	[
		'auth_name'=>'侃侃尔坛首页管理-添加反馈',
		'auth_url'=>'bbs-forum/add-user-feedback',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => CommonConstant::ADD_ROLE_ALL,
	],
//	[
//		'auth_name'=>'bb帖子详情-删帖',
//		'auth_url'=>'bbs-forum/del-post',
//		'role_type' => CommonConstant::ROLE_TYPE_ADD,
//		'role'      => CommonConstant::ADD_ROLE_ALL,
//	],
	[
		'auth_name'=>'bbs帖子管理-删回复',
		'auth_url'=>'bbs-forum/del-user-reply',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => CommonConstant::ADD_ROLE_ALL,
	],
	[
		'auth_name'=>'bbs帖子管理-帖子详情',
		'auth_url'=>'bbs-forum/detail',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => CommonConstant::ADD_ROLE_ALL,
	],
	[
		'auth_name'=>'侃侃尔坛首页管理-列表',
		'auth_url'=>'bbs-forum/index',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => CommonConstant::ADD_ROLE_ALL,
	],
	[
		'auth_name'=>'侃侃尔坛首页管理-我的列表',
		'auth_url'=>'bbs-forum/index-user',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => CommonConstant::ADD_ROLE_ALL,
	],
	[
		'auth_name'=>'bbs帖子管理-普通员工回复',
		'auth_url'=>'bbs-forum/user-reply',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => CommonConstant::ADD_ROLE_ALL,
	],
	[
		'auth_name'=>'侃侃尔坛获取员工下拉',
		'auth_url'=>'bbs-employee/get-employee-dropdown-list',
		'role_type' => CommonConstant::ROLE_TYPE_ADD,
		'role'      => CommonConstant::ADD_ROLE_ALL,
	],


];

