<template>
  <div class="q-pa-md" style="max-width: 400px">

    <q-form
      @submit="onSubmit"
      class="q-gutter-md"
    >
      <q-input
        filled
        v-model="FormData.email"
        label="Your name *"
        hint="Name and surname"
        lazy-rules
      />

      <q-input
        filled
        type="password"
        v-model="FormData.password"
        label="Your age *"
        lazy-rules
      />


      <div>
        <q-btn label="Submit" type="submit" color="primary"/>
      </div>
    </q-form>

  </div>
</template>

  <script>
const { mounted } = require('../../layout/dashboard.vue');

  module.exports = {
    data() {
      return {
        FormData: {
          email: "",
          password: ""
        }
      };
    },
    mounted(){
      if(localStorage.getItem('token')){
        this.$router.push({path: '/home'})
      }
    },
    methods: {
      async onSubmit(){
        let {data} = await api.post('/login', this.FormData)
        if(data && data.token){
          localStorage.setItem('token', data.token)
          window.location.reload();
        }
      }
    }
  };
  </script>
