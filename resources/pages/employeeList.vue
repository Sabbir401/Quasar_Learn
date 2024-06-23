<template>
    <div class="q-pa-md">
        <q-table
            flat
            bordered
            title="Employees"
            :rows="rows"
            :columns="columns"
            row-key="Employee_Id"
            selection="single"
            v-model:selected="selected"
            :pagination="initialPagination"
        />
    </div>
</template>

<script>
export default {
    data() {
        return {
            rows: [],
            selected: [],
            initialPagination: { page: 1, rowsPerPage: 10 }, // Add initial pagination if necessary
            columns: [
                {
                    name: "Employee_Id",
                    label: "Employee ID",
                    align: "left",
                    field: "Employee_Id",
                    sortable: true,
                },
                {
                    name: "Full_Name",
                    align: "center",
                    label: "Full Name",
                    field: "Full_Name",
                    sortable: true,
                },
                {
                    name: "DOB",
                    label: "Date of Birth",
                    field: "DOB",
                    sortable: true,
                },
                {
                    name: "Contact_No",
                    label: "Contact No",
                    field: "Contact_No",
                },
                {
                    name: "Gender",
                    label: "Gender",
                    field: "Gender"
                },
                {
                    name: "Official_Email",
                    label: "Official Email",
                    field: row => row.religion ? row.religion.Name : '',
                },
                {
                    name: "Blood_Group_Id",
                    label: "Blood Group",
                    field: row => row.blood ? row.blood.Name : '', 
                    sortable: true,
                },
            ],
        };
    },
    mounted() {
        this.getEmployee();
    },
    methods: {
        async getEmployee() {
            try {
                let { data } = await api.get("/employee");
                this.rows = data;
            } catch (error) {
                console.error("Error fetching employee data:", error);
            }
        },
    },
};
</script>
