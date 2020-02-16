<template>
  <div id="validate">
    <div
      class="flex-2/3 sm:-ml-24 md:ml-8 lg:ml-16 2xl:ml-16 mx-auto mt-2 md:mt-0 px-2 pb-6 pt-0 h-56 sm:w-108 lg:w-122 xl:w-650 2xl:w- bg-teal-300 opacity-75 order-solid border-2 border-gray-600 rounded">

      <form class="w-full">
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3 py-2 mb-0">
            <label
              for="fname"
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1"
            >Name*</label>
            <input
              id="fname"
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-600 rounded py-2 px-4 mb-1 leading-tight focus:outline-none focus:bg-white"
              v-model="$v.formResponses.name.$model"
              type="text"
              placeholder="John Lennon"
            />
            <p v-if="errors" class="text-red-700 leading-none">
              <span v-if="!$v.formResponses.name.required">this field is required.</span>
              <span
                v-if="!$v.formResponses.name.minLength"
              >Field must have at least {{ $v.formResponses.name.$params.minLength.min }} characters.</span>
            </p>
          </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label
              for="femail"
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1"
            >Email*</label>
            <input
              id="femail"
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-600 rounded py-2 px-4 -mb-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              v-model="$v.formResponses.email.$model"
              type="email"
              placeholder="you@me.com"
            />
            <p v-if="errors" class="error">
              <span v-if="!$v.formResponses.email.required">this field is required.</span>
              <span v-if="!$v.formResponses.email.email">Needs to be a valid email.</span>
            </p>
          </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3 mb-0">
            <label
              for="fsubject"
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1"
            >Subject*</label>
            <input
              id="fsubject"
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-600 rounded py-2 px-4 -mb-2 leading-tight focus:outline-none focus:bg-white"
              v-model="$v.formResponses.subject.$model"
              type="text"
              placeholder="Subject"
            />
            <p v-if="errors" class="error">
              <span v-if="!$v.formResponses.subject.required">this field is required.</span>
              <span
                v-if="!$v.formResponses.subject.minLength"
              >Field must have at least {{ $v.formResponses.subject.$params.minLength.min }} characters.</span>
            </p>
          </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label
              for="fmessage"
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1">
              Message*
            </label>
            <textarea
              id="fmessage"
              class="no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-600 rounded py-1 px-2 pb-2 mb-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-lg resize-none"
              v-model="$v.formResponses.message.$model"
              type="text"
              placeholder="Your Message">
            </textarea>
            <p v-if="errors" class="error">
              <span v-if="!$v.formResponses.message.required">this field is required.</span>
              <span
                v-if="!$v.formResponses.name.minLength"
              >Field must have at least {{ $v.formResponses.message.$params.minLength.min }} characters.</span>
            </p>
          </div>
        </div>

        <div class="md:flex md:justify-center">
              <div class="md:w-full">
          <button @click.prevent="submitForm" class="submit  shadow bg-teal-700 hover:bg-teal-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-2 w-full rounded" type="button">
            <span class="uppercase">Send the Message</span>
            </button>
          <p v-if="errors" class="error">
            The form above has errors,
            <br />please get your act together and resubmit
          </p>
          <p v-else-if="empty && uiState === 'submit clicked'" class="error">
            The form above is empty,
            <br />cmon y'all you can't submit an empty form!
          </p>
          <p
            v-else-if="uiState === 'form submitted'"
            class="success"
          >Hooray! Your form was submitted!</p>
        </div>
            </div>

      </form>
    </div>
  </div>
</template>

<script>
import { required, minLength, email, sameAs } from "vuelidate/lib/validators";

export default {
  data() {
    return {
      uiState: "submit not clicked",
      errors: false,
      empty: true,
      formResponses: {
        name: null,
        email: null,
        subject: null,
        message: null,
        // password1: null,
        // password2: null
      }
    };
  },
  validations: {
    formResponses: {
      name: {
        required,
        minLength: minLength(6)
      },
      email: {
        required,
        email
      },
      subject: {
        required,
        minLength: minLength(4)
      },
      message: {
        required,
        minLength: minLength(12)
      },

      // password1: {
      //   required,
      //   strongPassword(password1) {
      //     return (
      //       /[a-z]/.test(password1) && //checks for a-z
      //       /[0-9]/.test(password1) && //checks for 0-9
      //       /\W|_/.test(password1) && //checks for special char
      //       password1.length >= 8
      //     );
      //   }
      // },
      // password2: {
      //   required,
      //   sameAsPassword: sameAs("password1")
      // }
    }
  },
  methods: {
    submitForm() {
      this.empty = !this.$v.formResponses.$anyDirty;
      this.errors = this.$v.formResponses.$anyError;
      this.uiState = "submit clicked";
      if (this.errors === false && this.empty === false) {
        //this is where you send the responses
        this.uiState = "form submitted";
      }
    }
  }
};
</script>

