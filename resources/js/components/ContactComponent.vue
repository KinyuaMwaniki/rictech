<template>
  <div class="col-lg-12">
    <form @submit.prevent="submitForm" class="php-email-form">
      <div class="form-row">
        <div class="col form-group">
          <input
            type="text"
            name="name"
            class="form-control"
            id="name"
            placeholder="Your Name"
            v-model="form.name"
          />
        </div>
        <div class="col form-group">
          <input
            type="email"
            class="form-control"
            name="email"
            id="email"
            placeholder="Your Email"
            v-model="form.email"
          />
          <div class="validate"></div>
        </div>
      </div>
      <div class="form-group">
        <input
          type="text"
          class="form-control"
          name="subject"
          id="subject"
          placeholder="Subject"
          v-model="form.subject"
        />
        <div class="validate"></div>
      </div>
      <div class="form-group">
        <textarea
          class="form-control"
          name="message"
          rows="5"
          data-rule="required"
          v-model="form.message"
        ></textarea>
        <div class="validate"></div>
      </div>
      <div class="mb-3">
        <div class="alert alert-info" v-if="success">
          Messages sent, thanks for contacting us. We will be in touch soon.
        </div>
        <div class="alert alert-danger" v-if="error">
          Please fill all fields.
        </div>
      </div>
      <div class="text-center"><button type="submit">Send Message</button></div>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        name: "",
        email: "",
        subject: "",
        message: "",
      },
      error: false,
      success: false,
    };
  },
  methods: {
    submitForm() {
      this.error = false;
      this.success = false;

      if (!this.validateForm()) {
        this.error = true;
        return;
      }

      let submit_method = "POST";
      let uri = "/api/v1/contacts";
      let submit_data = this.form;
      let that = this;

      console.log("Before Axios");

      axios({ method: submit_method, url: uri, data: submit_data })
        .then((response) => {
          if (response.data.success == true) {
            this.selected_student = "";
            this.selected_books = [];
            this.success = true;
            this.form.name = "";
            this.form.email = "";
            this.form.subject = "";
            this.form.message = "";
          }
        })
        .catch(function (error) {
          if (error.response) {
            console.log(error.response.data);
            console.log(error.response.status);
            console.log(error.response.headers);
          } else if (error.request) {
            console.log(error.request);
          } else {
            console.log("Error", error.message);
          }
          console.log(error.config);
        });
    },
    validateForm() {
      if (
        this.form.name === "" ||
        this.form.email === "" ||
        this.form.subject === "" ||
        this.form.message === ""
      ) {
        return false;
      }
      return true;
    },
  },
};
</script>