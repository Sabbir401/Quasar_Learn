<template>
    <div class="container q-my-xl q-mx-xl">
        <q-form>
            <div class="row bg-white">
                <div class="col-lg-3 col-sm-12 q-px-sm q-mt-sm">
                    <q-select
                        filled
                        dense
                        label="Company Name"
                        :options="companies"
                        option-value="id"
                        option-label="Name"
                        v-model="emp.company_id"
                    />
                </div>
                <div class="col-lg-3 col-sm-12 q-px-sm q-mt-sm">
                    <q-input dense filled label="emp ID" v-model="emp.emp_id" />
                </div>
                <div class="col-lg-3 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        dense
                        filled
                        label="Card No"
                        v-model="emp.card_no"
                    />
                </div>
                <div class="col-lg-3 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        dense
                        filled
                        label="Full Name"
                        v-model="emp.full_name"
                    />
                </div>
            </div>

            <div class="row bg-white q-mt-sm">
                <div class="col-lg-3 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        dense
                        filled
                        label="Father's Name"
                        v-model="emp.father_name"
                    />
                </div>
                <div class="col-lg-3 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        dense
                        filled
                        label="Mother's Name"
                        v-model="emp.mother_name"
                    />
                </div>
                <div class="col-lg-3 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        dense
                        filled
                        label="Spouse Name"
                        v-model="emp.spouse_name"
                    />
                </div>
                <div class="col-lg-3 col-sm-12 q-px-sm q-mt-sm">
                    <q-select
                        filled
                        dense
                        label="Marital Status"
                        :options="marital"
                        v-model="emp.marital"
                    />
                </div>
            </div>

            <div class="row bg-white q-mt-sm">
                <div class="col-lg-3 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        dense
                        filled
                        label="Place of Birth"
                        v-model="emp.pob"
                    />
                </div>

                <div class="col-lg-3 col-sm-12 q-px-sm q-mt-sm">
                    <div>
                        <q-input
                            filled
                            dense
                            mask="date"
                            :rules="['date']"
                            label="Date of Birth"
                            v-model="emp.dob"
                        >
                            <template v-slot:append>
                                <q-icon name="event" class="cursor-pointer">
                                    <q-popup-proxy
                                        cover
                                        transition-show="scale"
                                        transition-hide="scale"
                                    >
                                        <q-date v-model="emp.dob">
                                            <div
                                                class="row items-center justify-end"
                                            >
                                                <q-btn
                                                    v-close-popup
                                                    label="Close"
                                                    color="primary"
                                                    flat
                                                />
                                            </div>
                                        </q-date>
                                    </q-popup-proxy>
                                </q-icon>
                            </template>
                        </q-input>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        dense
                        filled
                        label="Official Contact"
                        v-model="emp.official_contact"
                    />
                </div>
                <div class="col-lg-3 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        dense
                        filled
                        label="Emergency Contact"
                        v-model="emp.emergency_contact"
                    />
                </div>
            </div>

            <div class="row bg-white">
                <div class="col-lg-6 col-md-6 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        filled
                        dense
                        type="textarea"
                        label="Permanent Address"
                        v-model="emp.permanent_address"
                    />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        filled
                        dense
                        type="textarea"
                        label="Present Address"
                        v-model="emp.present_address"
                    />
                </div>
            </div>

            <div class="row bg-white q-mt-sm">
                <div class="col-lg-3 col-sm-12 q-px-sm q-mt-sm">
                    <q-select
                        filled
                        dense
                        label="Gender"
                        :options="gender"
                        v-model="emp.gender"
                    />
                </div>
                <div class="col-lg-3 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        filled
                        dense
                        type="email"
                        label="Personal Email"
                        v-model="emp.personal_email"
                    >
                        <template v-slot:append>
                            <q-icon name="mail" />
                        </template>
                    </q-input>
                </div>
                <div class="col-lg-3 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        filled
                        dense
                        type="email"
                        label="Official Email"
                        v-model="emp.official_email"
                    >
                        <template v-slot:append>
                            <q-icon name="mail" />
                        </template>
                    </q-input>
                </div>
                <div class="col-lg-3 col-sm-12 q-px-sm q-mt-sm">
                    <q-select
                        filled
                        dense
                        label="Religion"
                        :options="religions"
                        option-value="id"
                        option-label="Name"
                        v-model="emp.religion_id"
                    />
                </div>
            </div>

            <div class="row bg-white q-mt-sm">
                <div class="col-lg-3 col-sm-12 q-px-sm q-mt-sm">
                    <q-select
                        filled
                        dense
                        label="Blood group"
                        :options="bloodGroups"
                        option-value="id"
                        option-label="Name"
                        v-model="emp.blood_group_id"
                    />
                </div>
                <div class="col-lg-3 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        dense
                        filled
                        label="Nationality"
                        v-model="emp.nationality"
                    />
                </div>
                <div class="col-lg-3 col-sm-12 q-px-sm q-mt-sm">
                    <q-input dense filled label="NID" v-model="emp.nid" />
                </div>
            </div>
            <div class="q-mt-lg row justify-end">
                <q-btn
                    label="Submit"
                    color="info"
                    class="q-ml-xl"
                    @click="submit"
                />
                <q-btn
                    label="Reset"
                    type="reset"
                    color="primary"
                    class="q-ml-md"
                />
            </div>
        </q-form>
    </div>
</template>

<script>
export default {
    components: {},
    data() {
        return {
            bloodGroups: [],
            religions: [],
            companies: [],
            gender: ["Male", "Female"],
            marital: ["Married", "Unmarried"],
            emp: {
                company_id: "",
                emp_id: "",
                card_no: "",
                full_name: "",
                father_name: "",
                mother_name: "",
                spouse_name: "",
                marital: "",
                official_contact: "",
                emergency_contact: "",
                permanent_address: "",
                present_address: "",
                gender: "",
                personal_email: "",
                official_email: "",
                religion_id: "",
                blood_group_id: "",
                nationality: "",
                nid: "",
            },
        };
    },
    mounted() {
        this.getInfo();
    },
    methods: {
        async getInfo() {
            try {
                const [
                    bloodGroupsResponse,
                    religionsResponse,
                    companiesResponse,
                ] = await axios.all([
                    axios.get("/api/blood-groups"),
                    axios.get("/api/religions"),
                    axios.get("/api/companies"),
                ]);

                this.bloodGroups = bloodGroupsResponse.data;
                this.religions = religionsResponse.data;
                this.companies = companiesResponse.data;
            } catch (error) {
                console.error("Error fetching dropdown data:", error);
            }
        },
        async submit() {
            let { data } = await api.post("/employee",  this.emp);
            if(data){
                this.$q.notify({
                    type: "positive",
                    message: "Information Saved!"
                })
            }
        },
    },
};
</script>
