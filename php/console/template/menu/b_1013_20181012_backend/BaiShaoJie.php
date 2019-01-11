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

return [
	[
		'menu_name' =>  '员工管理',
		'menu_url'  =>  'employee/index',
		'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
		'role'      =>  [
			RbacConstant::$role_operation_manager,
		],
		'creator'   =>  '白少杰',
	],
    [
        'menu_name' =>  '运营楼盘信息审核',
        'menu_url'  =>  'cj-project-dictionary-audit/index',
        'parent_url'=>'yw-projects',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
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
        'menu_name' =>  '楼盘列表',
        'menu_url'  =>  'yw-projects/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
            RbacConstant::$role_operation_interns,
        ],
        'creator'   =>  '白少杰',
    ],
    [
        'menu_name' =>  '楼盘点评规则',
        'menu_url'  =>  'yw-project-review-rule/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
            RbacConstant::$role_operation_interns,
        ],
        'creator'   =>  '白少杰',
    ],

    [
        'menu_name' =>  '楼盘点评审核',
        'menu_url'  =>  'yw-project-review/verify',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
            RbacConstant::$role_operation_interns,
        ],
        'creator'   =>  '白少杰',
    ],

    [
        'menu_name' =>  '用户楼盘点评审核表',
        'menu_url'  =>  'yw-user-project-comment/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
            RbacConstant::$role_operation_interns,
        ],
        'creator'   =>  '白少杰',
    ],
    [
        'menu_name' =>  '各源楼盘列表',
        'menu_url'  =>  'bd-project/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
            RbacConstant::$role_operation_interns,
        ],
        'creator'   =>  '白少杰',
    ],
    [
        'menu_name' =>  '楼盘组列表',
        'menu_url'  =>  'bd-project-group/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
            RbacConstant::$role_operation_interns,
        ],
        'creator'   =>  '白少杰',
    ],
    [
        'menu_name' =>  '人工审核',
        'menu_url'  =>  'bd-project-img/audit-list',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
            RbacConstant::$role_operation_interns,
        ],
        'creator'   =>  '白少杰',
    ],


    [
        'menu_name' =>  '敏感词过滤配置化',
        'menu_url'  =>  'cj-black-words/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
            RbacConstant::$role_operation_interns,
        ],
        'creator'   =>  '白少杰',
    ],
    [
        'menu_name' =>  '动态留电模版',
        'menu_url'  =>  'cj-reserve-template/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
            RbacConstant::$role_operation_interns,
        ],
        'creator'   =>  '白少杰',
    ],

    [
        'menu_name' =>  '楼盘商务信息管理',
        'menu_url'  =>  'project/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
        ],
        'creator'   =>  '白少杰',
    ],
    [
        'menu_name' =>  '楼盘标签管理',
        'menu_url'  =>  'cj-tag/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
        ],
        'creator'   =>  '白少杰',
    ],




    [
        'menu_name' =>  '楼盘点评列表',
        'menu_url'  =>  'yw-project-review/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
        'creator'   =>  '白少杰',
    ],
    [
        'menu_name' =>  '区域报告楼盘定位',
        'menu_url'  =>  'project/projectmap',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
        ],
        'creator'   =>  '白少杰',
    ],
    [
        'menu_name' =>  '变更通知列表',
        'menu_url'  =>  'project-change-notify/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
        ],
        'creator'   =>  '白少杰',
    ],

    [
        'menu_name' =>  '敏感词过滤配置化',
        'menu_url'  =>  'cj-black-words/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
        ],
        'creator'   =>  '白少杰',
    ],
    [
        'menu_name' =>  '楼盘抓取脚本执行监控',
        'menu_url'  =>  'bd-project-catch-time/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
        ],
        'creator'   =>  '白少杰',
    ],



    [
        'menu_name' =>  '楼盘信息运营',
        'menu_url'  =>  'yw-down-payment-rule/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
        ],
        'creator'   =>  '白少杰',
    ],
    [
        'menu_name' =>  '动态留电模版',
        'menu_url'  =>  'cj-reserve-template/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
        ],
        'creator'   =>  '白少杰',
    ],





    [
        'menu_name' =>  '服务评价管理',
        'menu_url'  =>  'yw-order-comment/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
        'creator'   =>  '白少杰',
    ],
    [
        'menu_name' =>  '京东活动统计',
        'menu_url'  =>  'activity-jd/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
        'creator'   =>  '白少杰',
    ],
    [
        'menu_name' =>  '京东卡记录页',
        'menu_url'  =>  'activity-jd-card-record/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
        'creator'   =>  '白少杰',
    ],
    [
        'menu_name' =>  '问答质检结果页',
        'menu_url'  =>  'yw-qa-quality-test/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
        'creator'   =>  '白少杰',
    ],
    [
        'menu_name' =>  '咨询师审核',
        'menu_url'  =>  'header/audit-list',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
		],
        'creator'   =>  '白少杰',
    ],


    [
        'menu_name' =>  '个人工作台',
        'menu_url'  =>  'hr-employee-check/work-bench',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
            RbacConstant::$role_operation_interns,
		],
        'creator'   =>  '白少杰',
    ],
	[
        'menu_name' =>  '审批',
        'menu_url'  =>  'hr-approval-apply/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
            RbacConstant::$role_operation_interns,
		],
        'creator'   =>  '白少杰',
    ],


    [
        'menu_name' =>  '变更通知',
        'menu_url'  =>  'project-change-notify/index_new',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
            RbacConstant::$role_operation_interns,
		],
        'creator'   =>  '白少杰',
    ],
    [
        'menu_name' =>  '问答知识库',
        'menu_url'  =>  'qa-question/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
        'creator'   =>  '白少杰',
    ],
    [
        'menu_name' =>  '主推楼盘库存',
        'menu_url'  =>  'yw-main-push-project/base-info',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
        'creator'   =>  '白少杰',
    ],
    [
        'menu_name' =>  '资源中心',
        'menu_url'  =>  'tr-resource/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
		],
        'creator'   =>  '白少杰',
    ],
    [
        'menu_name' =>  '楼盘学习管理',
        'menu_url'  =>  'tr-employee/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
		],
        'creator'   =>  '白少杰',
    ],
    [
        'menu_name' =>  '素材库',
        'menu_url'  =>  'yw-material-library/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
		],
        'creator'   =>  '白少杰',
    ],

    [
        'menu_name' =>  '字段常量配置',
        'menu_url'  =>  'cj-object-field-config/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
		],
        'creator'   =>  '白少杰',
    ],
    [
        'menu_name' =>  '城市管理',
        'menu_url'  =>  'district/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
		],
        'creator'   =>  '白少杰',
    ],

    [
        'menu_name' =>  '上户计划管理',
        'menu_url'  =>  'alloc_plan/schedule/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
		],
        'creator'   =>  '白少杰',
    ],


    [
        'menu_name' =>  '行家订单列表',
        'menu_url'  =>  'expert/expert-order/index',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_operation_manager,
			RbacConstant::$role_operation_interns,
		],
        'creator'   =>  '白少杰',
    ],


];
