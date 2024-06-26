<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laravel Vue</title>
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
    <link rel="icon" type="image/png" href="logo.png" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons|Material+Icons+Outlined" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/quasar@2.16.4/dist/quasar.prod.css" rel="stylesheet" type="text/css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/vue@3/dist/vue.global.prod.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/quasar@2.16.4/dist/quasar.umd.prod.js"></script>
    <script src="/js/vue-router.global.js"></script>
    <script src="/js/vue3-sfc-loader.js"></script>
    <script src="/js/axios.min.js"></script>
    <script src="/js/vue3-sfc-loader.config.js"></script>
    <script src="/js/api.js"></script>

    <div id="main-vue">
        <router-view></router-view>
    </div>

    <script>
        const router = VueRouter.createRouter({
            mode: "history",
            history: VueRouter.createWebHistory(),
            routes: [{
                    path: `/login`,
                    name: `login`,
                    component: () => loadModule("/layout/auth.vue", options),
                    children: [{
                        path: '',
                        component: () => loadModule("/pages/auth/login.vue", options),
                    }, ],
                },
                {
                    path: `/`,
                    name: `layout-dashboard`,
                    component: () => loadModule("/layout/dashboard.vue", options),
                    alias: ['/:catchAll(.*)'],
                    children: [{
                        path: '',
                        component: () => loadModule("/pages/dashboard/dashboard.vue", options),
                    }, ],
                }
            ],
        })

        const app = Vue.createApp({
            name: 'HomePage',
            data() {
                return {
                    
                }
            },
            mounted() {
                
            },
            methods: {
            }
        })

        app.use(Quasar)
        app.use(router);

        let app_root = app.mount('#main-vue');
    </script>


</body>

</html>