<?php
namespace console\template\auth\b_869_20180829_backend;
/**
 * 上线权限配置数据
 * @author: pengqiucheng<pengqiucheng@julive.com>
 *
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
        'auth_name' =>  '待筛选简历',
        'auth_url'  =>  'zp-group/screen-resume',
        'parent_url'=>  'zp-group',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_hr,
        ],
    ],
    [
        'auth_name' =>  '待筛选简历-认领和取消认领',
        'auth_url'  =>  'zp-group/lock-order',
        'parent_url'=>  'zp-group',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_hr,
        ],
    ],
    [
        'auth_name' =>  '待录入电面结果',
        'auth_url'  =>  'zp-group/phone-result',
        'parent_url'=>  'zp-group',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_hr,
        ],
    ],
    [
        'auth_name' =>  '待发offer',
        'auth_url'  =>  'zp-group/send-offer',
        'parent_url'=>  'zp-group',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_hr,
        ],
    ],
    [
        'auth_name' =>  '文件上传',
        'auth_url'  =>  'zp-upload/index',
        'parent_url'=>  'zp-upload',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_admin,
            RbacConstant::$role_zp_hr,
            RbacConstant::$role_zp_city_hr,
            RbacConstant::$role_zp_first_interviewer,
            RbacConstant::$role_zp_second_interviewer,
        ],
    ],
    [
        'auth_name' =>  '文件删除',
        'auth_url'  =>  'zp-upload/delete',
        'parent_url'=>  'zp-upload',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_admin,
            RbacConstant::$role_zp_hr,
            RbacConstant::$role_zp_city_hr,
            RbacConstant::$role_zp_first_interviewer,
            RbacConstant::$role_zp_second_interviewer,
        ],
    ],
    [
        'auth_name' =>  '一面录入招聘组意见',
        'auth_url'  =>  'zp-follower/add-follower',
        'parent_url'=>  'zp-follower',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_hr,
        ],
    ],
    [
        'auth_name' =>  '二面录入招聘组意见',
        'auth_url'  =>  'zp-follower/add-follower-two',
        'parent_url'=>  'zp-follower',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_hr,
        ],
    ],
    [
        'auth_name' =>  '添加一面二面问题',
        'auth_url'  =>  'zp-interview/add-question',
        'parent_url'=>  'zp-interview',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_first_interviewer,
            RbacConstant::$role_zp_second_interviewer,
        ],
    ],
    [
        'auth_name' =>  '删除一面二面问题',
        'auth_url'  =>  'zp-interview/delete-question',
        'parent_url'=>  'zp-interview',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_first_interviewer,
            RbacConstant::$role_zp_second_interviewer,
        ],
    ],
    [
        'auth_name' =>  '录入一面第一步',
        'auth_url'  =>  'zp-interview/first-interview-one',
        'parent_url'=>  'zp-interview',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_first_interviewer,
        ],
    ],
    [
        'auth_name' =>  '录入一面第二步',
        'auth_url'  =>  'zp-interview/first-interview-two',
        'parent_url'=>  'zp-interview',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_first_interviewer,
        ],
    ],
    [
        'auth_name' =>  '录入一面第三步',
        'auth_url'  =>  'zp-interview/first-interview-three',
        'parent_url'=>  'zp-interview',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_first_interviewer,
        ],
    ],
    [
        'auth_name' =>  '录入一面和二面第二步保存草稿',
        'auth_url'  =>  'zp-interview/save-draft',
        'parent_url'=>  'zp-interview',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_first_interviewer,
            RbacConstant::$role_zp_second_interviewer,
        ],
    ],
    [
        'auth_name' =>  '录入一面和二面第三步保存草稿',
        'auth_url'  =>  'zp-interview/save-draft-three',
        'parent_url'=>  'zp-interview',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_first_interviewer,
            RbacConstant::$role_zp_second_interviewer,
        ],
    ],
    [
        'auth_name' =>  '一面面试官编辑一面面试结果-质量评估',
        'auth_url'  =>  'zp-interview/first-interview-three-edit-quality',
        'parent_url'=>  'zp-interview',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_first_interviewer,
        ],
    ],
    [
        'auth_name' =>  '一面面试官编辑一面面试结果-评分结果',
        'auth_url'  =>  'zp-interview/first-interview-three-edit-result',
        'parent_url'=>  'zp-interview',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_first_interviewer,
        ],
    ],
    [
        'auth_name' =>  '录入二面第一步',
        'auth_url'  =>  'zp-interview-two/second-interview-one',
        'parent_url'=>  'zp-interview-two',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_second_interviewer,
        ],
    ],
    [
        'auth_name' =>  '录入二面第二步',
        'auth_url'  =>  'zp-interview-two/second-interview-two',
        'parent_url'=>  'zp-interview-two',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_second_interviewer,
        ],
    ],
    [
        'auth_name' =>  '录入二面第三步',
        'auth_url'  =>  'zp-interview-two/second-interview-three',
        'parent_url'=>  'zp-interview-two',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_second_interviewer,
        ],
    ],
    [
        'auth_name' =>  '二面面试官编辑二面面试结果-质量评估',
        'auth_url'  =>  'zp-interview-two/second-interview-three-edit-quality',
        'parent_url'=>  'zp-interview-two',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_second_interviewer,
        ],
    ],
    [
        'auth_name' =>  '二面面试官编辑二面面试结果-评分结果',
        'auth_url'  =>  'zp-interview-two/second-interview-three-edit-result',
        'parent_url'=>  'zp-interview-two',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_second_interviewer,
        ],
    ],
    [
        'auth_name' =>  '插入跟进记录',
        'auth_url'  =>  'zp-follow/add-follow',
        'parent_url'=>  'zp-follow',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_hr,
        ],
    ],
    [
        'auth_name' =>  '编辑跟进记录',
        'auth_url'  =>  'zp-follow/edit-follow',
        'parent_url'=>  'zp-follow',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_hr,
        ],
    ],
    [
        'auth_name' =>  '录入offer跟进记录',
        'auth_url'  =>  'zp-follow/offer',
        'parent_url'=>  'zp-follow',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_hr,
        ],
    ],
    [
        'auth_name' =>  '录入offer跟进记录-编辑',
        'auth_url'  =>  'zp-follow/edit-offer',
        'parent_url'=>  'zp-follow',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_hr,
        ],
    ],
    [
        'auth_name' =>  '查看一面面试评价',
        'auth_url'  =>  'zp-follow/first-evaluate',
        'parent_url'=>  'zp-follow',
        'role_type' =>  CommonConstant::ROLE_TYPE_RECOVER,
        'role'      =>  [
            RbacConstant::$role_zp_admin,
            RbacConstant::$role_zp_hr,
        ],
    ],
];