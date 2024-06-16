<template>
    <div class="container q-my-xl q-mx-xl">
        <q-form @submit.prevent="Submit">
            <h4 class="q-mx-sm q-my-none">Nominee Information</h4>
            <div class="row bg-white">
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        dense
                        filled
                        v-model="emp.fatherName"
                        label="Nominee Name"
                    />
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        dense
                        filled
                        v-model="emp.motherName"
                        label="Contact No"
                    />
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        filled
                        dense
                        v-model="emp.personalEmail"
                        type="email"
                        label="Email"
                    >
                        <template v-slot:append>
                            <q-icon name="mail" />
                        </template>
                    </q-input>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        dense
                        filled
                        v-model="emp.spouseName"
                        label="National Id"
                    />
                </div>
            </div>

            <div class="row bg-white q-mt-sm">
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <div>
                        <q-input
                            filled
                            dense
                            v-model="emp.dob"
                            mask="date"
                            :rules="['date']"
                            label="Date of Birth"
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

                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        dense
                        filled
                        v-model="emp.officialContact"
                        label="Share %"
                    />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        dense
                        filled
                        v-model="emp.emergencyContact"
                        label="Present Address"
                    />
                </div>
            </div>

            <h4 class="q-mx-sm q-my-none">Child Information</h4>
            <div class="row bg-white q-mt-sm">
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        dense
                        filled
                        v-model="emp.emergencyContact"
                        label="Child Name"
                    />
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        filled
                        dense
                        v-model="emp.personalEmail"
                        type="text"
                        label="NID/Birth Reg"
                    >
                    </q-input>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        filled
                        dense
                        v-model="emp.officialEmail"
                        type="email"
                        label="Email"
                    >
                        <template v-slot:append>
                            <q-icon name="mail" />
                        </template>
                    </q-input>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        filled
                        dense
                        v-model="emp.officialEmail"
                        type="text"
                        label="Contact No"
                    >
                    </q-input>
                </div>
            </div>

            <div class="row bg-white q-mt-sm">
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <div>
                        <q-input
                            filled
                            dense
                            v-model="emp.dob"
                            mask="date"
                            :rules="['date']"
                            label="Date of Birth"
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
            </div>
            <div class="q-mt-lg">
                <q-btn
                    label="Submit"
                    type="submit"
                    color="info"
                    class="q-ml-xl"
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
    <div class="q-pa-md" style="max-width: 400px"></div>
</template>

<script setup>
import { useQuasar } from "quasar";
import { ref, onMounted } from "vue";

const $q = useQuasar();

const emp = ref({
    companyId: "",
    employeeId: "",
    cardNo: "",
    fullName: "",
    fatherName: "",
    motherName: "",
    spouseName: "",
    maritalStatus: "",
    dob: "",
    pob: "",
    presentAddress: "",
    permanentAddress: "",
    officialContact: "",
    emergencyContact: "",
    gender: "",
    personalEmail: "",
    officialEmail: "",
    religion: "",
    bloodGroup: "",
    nationality: "",
    nid: "",
    photo: null,
});

const bloods = ref();
const religions = ref();
const companies = ref([]);
const error = ref();

const gender = ["Male", "Female"];
const status = ["Married", "Unmarried"];

const getData = async () => {
    try {
        const responseBlood = await axios.get("/api/blood");
        const responseReligion = await axios.get("/api/religion");
        const responseCompany = await axios.get("/api/company");

        bloods.value = responseBlood.data;
        religions.value = responseReligion.data;
        companies.value = responseCompany.data;
    } catch (err) {
        error.value = err.message || "Error fetching data";
    } finally {
    }
};

const Submit = async () => {
    try {
        const response = await axios.post("/api/employee", emp.value);
        if (response.data.success) {
            $q.notify({
                color: "green-5",
                textColor: "white",
                icon: "warning",
                message: "Saved Successfully",
            });
        } else {
            $q.notify({
                color: "red-5",
                textColor: "white",
                icon: "warning",
                message: "Something Went Wrong",
            });
        }
    } catch (err) {
        console.error("Error submitting form:", err);
    }
};

onMounted(() => getData());
</script>
