<template>
    <div class="container q-my-xl q-mx-xl">
        <q-form @submit.prevent="Submit">
            <div class="row bg-white">
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-select
                        filled
                        option-value="id"
                        option-label="Name"
                        label="Company Name"
                    />
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        dense
                        filled
                        label="emp ID"
                    />
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        dense
                        filled
                        label="Card No"
                    />
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        dense
                        filled
                        label="Full Name"
                    />
                </div>
            </div>

            <div class="row bg-white q-mt-sm">
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        dense
                        filled
                        label="Father's Name"
                    />
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        dense
                        filled
                        label="Mother's Name"
                    />
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        dense
                        filled
                        label="Spouse Name"
                    />
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-select
                        filled
                        label="Marital Status"
                    />
                </div>
            </div>

            <div class="row bg-white q-mt-sm">
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        dense
                        filled
                        label="Place of Birth"
                    />
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <div>
                        <q-input
                            filled
                            dense
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
                                        <q-date>
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
                        label="Official Contact"
                    />
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        dense
                        filled
                        label="Emergency Contact"
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
                    />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        filled
                        dense
                        type="textarea"
                        label="Present Address"
                    />
                </div>
            </div>

            <div class="row bg-white q-mt-sm">
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-select
                        filled
                        dense
                        label="Gender"
                    />
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        filled
                        dense
                        type="email"
                        label="Personal Email"
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
                        type="email"
                        label="Official Email"
                    >
                        <template v-slot:append>
                            <q-icon name="mail" />
                        </template>
                    </q-input>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-select
                        filled
                        dense
                        label="Religion"
                    />
                </div>
            </div>

            <div class="row bg-white q-mt-sm">
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-select
                        filled
                        dense
                        label="Blood group"
                    />
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-input
                        dense
                        filled
                        label="Nationality"
                    />
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 q-px-sm q-mt-sm">
                    <q-input dense filled label="NID" />
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
</template>

<script>

</script>
