<script>
import { ref, onMounted, reactive, watch } from "vue";

export default {
  props: {
    isOpen: Boolean,
  },
  setup(props, { emit }) {
    const target = ref(null);
    const form = reactive({
      id: "",
      name: "",
      address: "",
      date: "",
      status: "",
    });


    onMounted(() => {
      onClickOutside(target, () => emit("modal-close"));
    });

    const closeModal = () => {
      emit("modal-close");
    };


    return {
      target,
      closeModal,
      submit,
      form,
    };
  },
};
</script>

<template>
  <div
    v-if="isOpen"
    class="modal-mask col-md-6 grid-margin stretch-card"
    ref="target"
  >
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Information</h4>
        <form class="forms-sample" @submit.prevent="submit">
          <div class="form-group">
            <label for="exampleInputUsername1">Name</label>
            <input
              type="text"
              class="form-control"
              id="exampleInputUsername1"
              placeholder="Username"
              v-model="form.name"
            />
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input
              type="text"
              class="form-control"
              id="exampleInputEmail1"
              placeholder="Address"
              v-model="form.address"
            />
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Date</label>
            <input
              type="date"
              class="form-control"
              id="exampleInputEmail1"
              placeholder=""
              v-model="form.date"
            />
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Status</label>
            <select
              class="form-control"
              name="status"
              id=""
              v-model="form.status"
            >
              <option class="form-control" value="Active">Active</option>
              <option class="form-control" value="Inactive">Inactive</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary mr-2">
            Submit
          </button>
          <button class="btn btn-dark" @click.stop="closeModal">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</template>

<style scoped>
#BrandModal,
.modal-mask {
  position: absolute;
  z-index: 9998;
  top: 100;
  left: auto;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.5);
}

.modal-container {
  width: 300px;
  margin: 150px auto;
  padding: 20px 30px;
  background-color: #620d0d;
  border-radius: 2px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.33);
}
</style>
