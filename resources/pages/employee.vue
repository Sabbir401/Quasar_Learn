<template>
  <div class="q-pa-md">
    <div class="q-gutter-y-md">
      <q-card>
        <q-tabs
          v-model="tab"
          dense
          class="text-grey"
          active-color="primary"
          indicator-color="primary"
          align="justify"
          narrow-indicator
        >
          <q-tab name="employee" label="Employee Information" />
        </q-tabs>

        <q-separator />

        <q-tab-panels v-model="tab" animated>
          <q-tab-panel name="employee">
            <employee></employee>
          </q-tab-panel>

        </q-tab-panels>
      </q-card>
    </div>
  </div>
</template>

<script>
import { ref } from "vue";

import employee from "./components/employeeInfo.vue";
import personal from "./components/personalInfo.vue";
import processional from "./components/professionalInfo.vue";
import official from "./components/officialInfo.vue";

export default {
  components: {
    employee,
    personal,
    processional,
    official,
  },
  data() {
    return {
      tab: ref("employee"),
    };
  },
};
</script>
