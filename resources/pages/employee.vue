<template>
  <div class="q-pa-md">
    <div class="q-gutter-y-md">
      <q-card>
        <q-tabs
          v-model="tab"
          dense
          class="bg-grey-2 text-grey-7"
          active-color="primary"
          indicator-color="purple"
          align="justify"
        >
          <q-tab name="employee" label="Employee Information" />
          <q-tab name="personal" label="Personal Information" />
          <q-tab name="professional" label="Professional Information" />
          <q-tab name="official" label="Official Information" />
        </q-tabs>

        <q-tab-panels v-model="tab" animated class="">
          <q-tab-panel name="employee">
            <employee></employee>
          </q-tab-panel>

          <q-tab-panel name="personal">
            <div class="text-h6">Alarms</div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
          </q-tab-panel>

          <q-tab-panel name="professional">
            <professional></professional>
          </q-tab-panel>

          <q-tab-panel name="official">
            <div class="text-h6">Movies</div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
          </q-tab-panel>
        </q-tab-panels>
      </q-card>

    </div>
  </div>
</template>

<script>
import employee from './components/employeeInfo.vue'
import professional from './components/professionalInfo.vue'
export default {
  components: {
    employee
  },
  data () {
    return {
      tab: 'employee',
      professional,
    }
  }
}
</script>
