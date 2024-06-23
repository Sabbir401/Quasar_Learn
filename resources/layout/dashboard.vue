<template>
    <q-layout view="lHh lpr fFf">
        <q-header elevated class="bg-secondary text-white">
            <q-toolbar>
                <q-btn dense flat round icon="menu" @click="toggleLeftDrawer" />

                <q-toolbar-title>
                    <q-avatar>
                        <img
                            src="https://cdn.quasar.dev/logo-v2/svg/logo-mono-white.svg"
                        />
                    </q-avatar>
                    Title
                </q-toolbar-title>
            </q-toolbar>
        </q-header>

        <q-drawer show-if-above v-model="leftDrawerOpen" side="left" bordered>
            <h5 class="q-pl-md">Artisan HRIM</h5>
            <q-list
                bordered
                separator
                v-for="nav in nav_tree"
                :key="nav.id"
                :to="nav.url"
            >
                <q-expansion-item v-if="nav.children" :label="nav.name">
                    <q-item
                        clickable
                        v-for="child in nav.children"
                        :key="child.id"
                        :to="child.url"
                        class="q-mx-lg"
                        >{{ child.name }}</q-item
                    >
                    <q-separator></q-separator>
                </q-expansion-item>
                <q-item clickable :to="nav.url" v-else>{{ nav.name }}</q-item>
            </q-list>
        </q-drawer>

        <q-page-container>
            <router-view />
        </q-page-container>

        <q-footer elevated class="bg-brown-5 text-white">
            <q-toolbar>
                <q-toolbar-title>
                    <div>Developed By: Sabbir</div>
                </q-toolbar-title>
            </q-toolbar>
        </q-footer>
    </q-layout>
</template>

<script>
module.exports = {
    name: "Dashboard",
    data() {
        return {
            nav_arr: [],
            nav_tree: [],
            leftDrawerOpen: false,
        };
    },
    mounted() {
        this.getNavigation();
    },
    methods: {
        toggleLeftDrawer() {
            this.leftDrawerOpen = !this.leftDrawerOpen;
        },
        async getNavigation() {
            let { data } = await api.get("/navigation");
            if (data) {
                this.nav_arr = data["nav"];
                this.nav_tree = data["tree"];
                Object.values(this.nav_arr).forEach((v) => {
                    if (v.page.includes(".vue")) {
                        router.addRoute("layout-dashboard", {
                            name: v.name,
                            path: v.url,
                            component: () => loadModule(v.page, options),
                        });
                    }
                });
            }
        },
    },
};
</script>
