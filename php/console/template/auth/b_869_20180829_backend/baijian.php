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
        'auth_name' =>  '订单详情',
        'auth_url'  =>  'zp-order/detail',
        'parent_url'=>  'zp-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_admin,
            RbacConstant::$role_zp_hr,
            RbacConstant::$role_zp_city_hr,
            RbacConstant::$role_zp_first_interviewer,
            RbacConstant::$role_zp_second_interviewer
        ],
        'creator'   =>  '白健',
    ],
    [
        'auth_name' =>  '质量评估',
        'auth_url'  =>  'zp-order/cv-quality',
        'parent_url'=>  'zp-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_admin,
            RbacConstant::$role_zp_hr,
            //RbacConstant::$role_zp_city_hr,
            RbacConstant::$role_zp_first_interviewer,
            RbacConstant::$role_zp_second_interviewer
        ],
        'creator'   =>  '白健',
    ],
    [
        'auth_name' =>  '修改候选人联系方式',
        'auth_url'  =>  'zp-order/edit-tel',
        'parent_url'=>  'zp-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            //RbacConstant::$role_zp_admin,
            RbacConstant::$role_zp_hr,
            //RbacConstant::$role_zp_city_hr,
            //RbacConstant::$role_zp_first_interviewer,
            //RbacConstant::$role_zp_second_interviewer
        ],
        'creator'   =>  '白健',
    ],
    [
        'auth_name' =>  '转移订单跟进人',
        'auth_url'  =>  'zp-order/transfer-follower',
        'parent_url'=>  'zp-order',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_admin,
            //RbacConstant::$role_zp_hr,
            //RbacConstant::$role_zp_city_hr,
            //RbacConstant::$role_zp_first_interviewer,
            //RbacConstant::$role_zp_second_interviewer
        ],
        'creator'   =>  '白健',
    ],
    [
        'auth_name' =>  '简历筛选',
        'auth_url'  =>  'zp-cv-filter',
        'parent_url'=>  'zp-manager',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            //RbacConstant::$role_zp_admin,
            RbacConstant::$role_zp_hr,
           // RbacConstant::$role_zp_city_hr,
            //RbacConstant::$role_zp_first_interviewer,
            //RbacConstant::$role_zp_second_interviewer
        ],
        'creator'   =>  '白健',
    ],

    [
        'auth_name' =>  '录入简历筛选结果',
        'auth_url'  =>  'zp-cv-filter/insert',
        'parent_url'=>  'zp-cv-filter',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            //RbacConstant::$role_zp_admin,
            RbacConstant::$role_zp_hr,
            //RbacConstant::$role_zp_city_hr,
            //RbacConstant::$role_zp_first_interviewer,
            //RbacConstant::$role_zp_second_interviewer
        ],
        'creator'   =>  '白健',
    ],

    [
        'auth_name' =>  '录入简历筛选结果',
        'auth_url'  =>  'zp-cv-filter/update',
        'parent_url'=>  'zp-cv-filter',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            //RbacConstant::$role_zp_admin,
            RbacConstant::$role_zp_hr,
            //RbacConstant::$role_zp_city_hr,
            //RbacConstant::$role_zp_first_interviewer,
            //RbacConstant::$role_zp_second_interviewer
        ],
        'creator'   =>  '白健',
    ],

    [
        'auth_name' =>  '简历',
        'auth_url'  =>  'zp-cv',
        'parent_url'=>  'zp-manager',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_admin,
            RbacConstant::$role_zp_hr,
            //RbacConstant::$role_zp_city_hr,
            RbacConstant::$role_zp_first_interviewer,
            RbacConstant::$role_zp_second_interviewer
        ],
        'creator'   =>  '白健',
    ],
    [
        'auth_name' =>  '简历展示页',
        'auth_url'  =>  'zp-cv/index',
        'parent_url'=>  'zp-cv',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_admin,
            RbacConstant::$role_zp_hr,
            //RbacConstant::$role_zp_city_hr,
            RbacConstant::$role_zp_first_interviewer,
            RbacConstant::$role_zp_second_interviewer
        ],
        'creator'   =>  '白健',
    ],
    [
        'auth_name' =>  '简历上传',
        'auth_url'  =>  'zp-cv/cv-upload',
        'parent_url'=>  'zp-cv',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            //RbacConstant::$role_zp_admin,
            RbacConstant::$role_zp_hr,
            //RbacConstant::$role_zp_city_hr,
            //RbacConstant::$role_zp_first_interviewer,
            //RbacConstant::$role_zp_second_interviewer
        ],
        'creator'   =>  '白健',
    ],
    [
        'auth_name' =>  '简历删除',
        'auth_url'  =>  'zp-cv/delete',
        'parent_url'=>  'zp-cv',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            //RbacConstant::$role_zp_admin,
            RbacConstant::$role_zp_hr,
           // RbacConstant::$role_zp_city_hr,
            //RbacConstant::$role_zp_first_interviewer,
            //RbacConstant::$role_zp_second_interviewer
        ],
        'creator'   =>  '白健',
    ],
    [
        'auth_name' =>  '简历下载',
        'auth_url'  =>  'zp-cv/download',
        'parent_url'=>  'zp-cv',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_admin,
            RbacConstant::$role_zp_hr,
            //RbacConstant::$role_zp_city_hr,
            RbacConstant::$role_zp_first_interviewer,
            RbacConstant::$role_zp_second_interviewer
        ],
        'creator'   =>  '白健',
    ],
    [
        'auth_name' =>  'offer展示',
        'auth_url'  =>  'zp-offer/show',
        'parent_url'=>  'zp-offer',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            RbacConstant::$role_zp_admin,
            RbacConstant::$role_zp_hr,
            //RbacConstant::$role_zp_city_hr,
            RbacConstant::$role_zp_first_interviewer,
            RbacConstant::$role_zp_second_interviewer
        ],
        'creator'   =>  '白健',
    ],
    [
        'auth_name' =>  'offer更新',
        'auth_url'  =>  'zp-offer/upload',
        'parent_url'=>  'zp-offer',
        'role_type' =>  CommonConstant::ROLE_TYPE_ADD,
        'role'      =>  [
            //RbacConstant::$role_zp_admin,
            RbacConstant::$role_zp_hr,
            //RbacConstant::$role_zp_city_hr,
            //RbacConstant::$role_zp_first_interviewer,
            //RbacConstant::$role_zp_second_interviewer
        ],
        'creator'   =>  '白健',
    ]

];