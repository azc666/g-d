<template>
  <div id="app" class="container py-4">
    <div class="row">
      <div class="col-12">
        <form @submit.prevent="onSubmit">
          <div class="form-group">
            <label>Name:</label>
            <input v-model="form.name" type="text" class="form-control" />
          </div>

          <div class="form-group">
            <label>Email:</label>
            <input v-model="form.email" type="email" class="form-control" />
          </div>

          <div class="form-group">
            <label>Subject:</label>
            <input v-model="form.subject" type="text" class="form-control" />
          </div>

          <div class="form-group">
            <label>Message:</label>
            <textarea rows="5" v-model="form.message" type="text" class="form-control"></textarea>
          </div>

          <div class="form-group">
            <button
              :disabled="!formIsValid"
              @click.prevent="onSubmit"
              type="submit"
              class="btn btn-primary"
            >Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "app",
  data() {
    return {
      form: {
        name: "",
        subject: "",
        email: "",
        message: ""
      }
    };
  },
  methods: {
    onSubmit() {
      if (!this.formIsValid) return;
      axios
        .post("/contactus", { params: this.form })
        .then(response => {
          console.log("Form has been posted", response);
        })
        .catch(err => {
          console.log("An error occurred", err);
        });
    }
  },
  computed: {
    formIsValid() {
      return (
        this.form.name.length > 0 &&
        this.form.subject.length > 0 &&
        this.form.email.length > 0 &&
        this.form.message.length > 0
      );
    }
  }
};
</script>


