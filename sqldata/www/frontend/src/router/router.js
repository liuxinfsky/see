import Main from '@/views/Main.vue';

// 不作为Main组件的子页面展示的页面单独写，如下
export const loginRouter = {
    path: '/login',
    name: 'login',
    meta: {
        title: 'Login - 登录'
    },
    component: () =>
        import ('@/views/login.vue')
};

// 作为Main组件的子页面展示但是不在左侧菜单显示的路由写在otherRouter里
export const otherRouter = {
    path: '/',
    name: 'otherRouter',
    redirect: '/pandect/dashboard',
    component: Main,
    children: [{
            path: 'home',
            title: { i18n: 'home' },
            name: 'home_index',
            component: () =>
                import ('@/views/pandect/dashboard.vue')
        },
        {
            path: 'ownspace',
            title: '个人中心',
            name: 'ownspace_index',
            component: () =>
                import ('@/views/own-space/own-space.vue')
        },
        {
            path: 'inceptionsql/:id',
            title: '工单详情',
            name: 'inceptiondetail',
            component: () =>
                import ('@/views/sql/inceptionDetail.vue'),
        }, // 用户展示图书详情
        {
            path: 'slowlogquery/:id',
            title: '慢查询详情',
            name: 'slowlogDetail',
            component: () =>
                import ('@/views/sql/slowlogDetail.vue'),
        }, // 慢查询
        {
            path: 'slowquerysql/:id',
            title: '慢查询详细记录',
            name: 'slowrecordList',
            component: () =>
                import ('@/views/sql/slowrecordList.vue')
        }
    ]
};

// 作为Main组件的子页面展示并且在左侧菜单显示的路由写在appRouter里
export const appRouter = [{
        path: '/pandect',
        icon: 'eye',
        title: '总览',
        name: 'pandect',
        component: Main,
        children: [{
            path: 'dashboard',
            title: 'Dashboard',
            name: 'dashboard',
            component: () =>
                import ('@/views/pandect/dashboard.vue')
        }, ]
    },
    {
        path: '/sqlquery',
        icon: 'cube',
        title: '查询优化',
        name: 'sqlquery',
        component: Main,
        children: [{
            path: 'optimize',
            title: '查询优化',
            name: 'optimize',
            component: () =>
                import ('@/views/sql/optimize.vue')
        }, ]
    },
    {
        path: '/slowquery',
        icon: 'load-b',
        title: '慢查询',
        name: 'slowquery',
        component: Main,
        children: [
        {
            path: 'slowList',
            title: '慢查询处理',
            name: 'slowList',
            component: () =>
                import ('@/views/sql/slowList.vue')
        },
        {
            path: 'slowrecordList',
            title: '慢查询详细记录',
            name: 'slowrecordList',
            component: () =>
                import ('@/views/sql/slowrecordList.vue')
        },
        {
            path: 'sloworderList',
            title: '工单列表',
            name: 'sloworderList',
            component: () =>
                import ('@/views/sql/sloworderList.vue')
        },
        {
            path: 'slowmyorderList',
            title: '我的工单',
            name: 'slowmyorderList',
            component: () =>
                import ('@/views/sql/slowmyorderList.vue')
        },
     ]
    },
    {
        path: '/sqlmng',
        icon: 'shuffle',
        title: 'SQL工单',
        name: 'sqlmng',
        component: Main,
        children: [{
                path: 'check',
                title: '工单审核',
                name: 'check',
                component: () =>
                    import ('@/views/sql/check.vue')
            },
            {
                path: 'dbCountList',
                title: '数据库表统计',
                name: 'dbCountList',
                component: () =>
                    import ('@/views/sql/dbCountList.vue')
            },
            {
                path: 'inceptionList',
                title: '工单处理',
                name: 'inceptionList',
                component: () =>
                    import ('@/views/sql/inceptionList.vue')
            },
            {
                path: 'settings',
                title: '设置',
                name: 'personalSettings',
                component: () =>
                    import ('@/views/sql/personalSettings.vue')
            },
        ]
    },

    {
        path: '/settings',
        icon: 'settings',
        title: '平台设置',
        name: 'settings',
        component: Main,
        children: [{
                path: 'authrules',
                title: '权限规则',
                name: 'authrules',
                component: () =>
                    import ('@/views/sql/authRules.vue')
            },
            {
                path: 'platform',
                title: '流程设置',
                name: 'platform',
                component: () =>
                    import ('@/views/sql/platformSettings.vue')
            },
            {
                path: 'inception',
                title: 'Inception设置',
                name: 'inception',
                component: () =>
                    import ('@/views/sql/inceptionSettings.vue')
            },   
            
        ]
    },

    {
        path: '/target',
        icon: 'earth',
        title: '目标库管理',
        name: 'target',
        component: Main,
        children: [{
                path: 'cluster',
                title: '集群',
                name: 'cluster',
                component: () =>
                    import ('@/views/sql/dbcluster.vue')
            },
            {
                path: 'dblist',
                title: '数据库',
                name: 'dblist',
                component: () =>
                    import ('@/views/sql/dbList.vue')
            },
        ]
    },

    {
        path: '/accountmng',
        icon: 'person',
        title: '用户管理',
        name: 'accountmng',
        component: Main,
        children: [{
                path: 'user',
                title: '用户',
                name: 'user',
                component: () =>
                    import ('@/views/account/user.vue')
            },
            {
                path: 'group',
                title: '组',
                name: 'group',
                component: () =>
                    import ('@/views/account/group.vue')
            },

        ]
    },



];

// 所有上面定义的路由都要写在下面的routers里
export const routers = [
    loginRouter,
    otherRouter,
    ...appRouter,
];