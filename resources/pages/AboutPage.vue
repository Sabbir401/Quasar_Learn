<template>
    <div class="row">
        <div class="col-2">
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
        </div>
        
        <div class="col-10 q-m-lg">
            <router-view></router-view>
        </div>

    </div>
</template>

<script>
module.exports = {
    name: "Dashboard",
    data() {
        return {
            nav_arr: [],
            nav_tree: [],
        };
    },
    mounted() {
        this.getNavigation();
    },
    methods: {
        async getNavigation() {
            let { data } = await api.get("/navigation");
            if (data) {
                this.nav_arr = data["nav"];
                this.nav_tree = data["tree"];
                console.log(this.nav_tree);
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
