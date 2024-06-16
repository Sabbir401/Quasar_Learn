<template>

    <div class="q-pa-md row items-start q-gutter-md">

        
<work
    :isOpen="isModalOpened"
    @modal-close="closeModal"
    name="first-modal"
  />

  {{ isModalOpened }}

        <q-card class="my-card">
            <q-card-section class="bg-primary text-white">
                <div class="text-h6">
                    Work Experience
                    <q-btn
                        push
                        color="green"
                        label="Add"
                        icon="add"
                        @click="openModal"
                    />
                </div>
            </q-card-section>
            <q-separator />
            <q-card-section>
                <div class="q-pa-md">
                    <q-table
                        flat
                        bordered
                        :rows="stores"
                        :columns="columns"
                        row-key="name"
                        hide-bottom
                    />
                </div>
            </q-card-section>
        </q-card>

        <q-card class="my-card">
            <q-card-section class="bg-primary text-white">
                <div class="text-h6">
                    Training Information
                    <q-btn push color="green" label="Add" icon="add" />
                </div>
            </q-card-section>
            <q-separator />
            <q-card-section>
                <div class="q-pa-md">
                    <q-table
                        flat
                        bordered
                        :rows="stores"
                        :columns="columns"
                        row-key="name"
                        hide-bottom
                    />
                </div>
            </q-card-section>
        </q-card>

        <q-card class="my-card">
            <q-card-section class="bg-primary text-white">
                <div class="text-h6">
                    Academic Information
                    <q-btn push color="green" label="Add" icon="add" />
                </div>
            </q-card-section>
            <q-separator />
            <q-card-section>
                <div class="q-pa-md">
                    <q-table
                        flat
                        bordered
                        :rows="stores"
                        :columns="columns"
                        row-key="name"
                        hide-bottom
                    />
                </div>
            </q-card-section>
        </q-card>
    </div>
</template>

<script>
import { ref, onMounted, watch } from "vue";
import axios from "axios";
import work from "./work.vue";



const columns = [
    {
        name: "name",
        required: true,
        label: "Level of Education",
        align: "left",
        field: (row) => row.name,
        sortable: true,
    },
    {
        name: "calories",
        align: "center",
        label: "Degree",
        field: "calories",
        sortable: true,
    },
    { name: "fat", label: "Institute", field: "fat", sortable: true },
    { name: "carbs", label: "Board", field: "carbs" },
    { name: "protein", label: "Major/Group", field: "protein" },
    { name: "sodium", label: "Result", field: "sodium" },
    {
        name: "calcium",
        label: "Passing Year",
        field: "calcium",
        sortable: true,
        sort: (a, b) => parseInt(a, 10) - parseInt(b, 10),
    },
    {
        name: "iron",
        label: "Achievements",
        field: "iron",
        sortable: true,
        sort: (a, b) => parseInt(a, 10) - parseInt(b, 10),
    },
];

export default {
    components: [work],
    setup() {
        const isModalOpened = ref(false);
        const stores = ref([]);
        const isLoading = ref(true);
        const error = ref(null);
        const selectedStore = ref(null);
        const heading = ref(null);
        let search = ref("");

        const openModal = () => {
            console.log("open");
            isModalOpened.value = true;
        };

        const closeModal = () => {
            isModalOpened.value = false;
        };


        return {
            isModalOpened,
            stores,
            isLoading,
            error,
            selectedStore,
            heading,
            search,
            columns,
            openModal,
            closeModal,
            work,
        };
    },
};
</script>

<style scoped>
.my-card {
    width: 100%;
}
</style>

<style lang="sass" scoped>
.my-card
  width: 100%
</style>
