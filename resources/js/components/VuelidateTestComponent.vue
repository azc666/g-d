<template>
  <div id="validate">
    <div
      class="flex-2/3 sm:-ml-24 md:ml-8 lg:ml-16 xl:ml-32 2xl:ml-16 mx-auto mt-2 sm:mt-8 md:mt-0 px-2 pb-6 pt-0 h-56 sm:w-108 lg:w-122 xl:w-650 2xl:w- bg-teal-300 opacity-75 order-solid border-2 border-gray-600 rounded"
    >
      <form class="w-full" @submit.prevent="submit">
        <div class="input flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3 pt-2 -mb-2 { 'form-group--error': $v.name.$error }">
            <label
              for="name"
              class="block uppercase tracking-wide text-gray-700 text-sm font-semibold mb-1 pl-1"
            >Name*</label>
            <input
              id="name"
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-600 rounded py-2 px-4 -mb-2 leading-tight focus:bg-white focus:border-gray-800"
              v-model.trim="$v.name.$model"
              :class="{ error: $v.name.$error }"
              type="text"
              placeholder="John Lennon"
              @input="$v.name.$touch()"
            />
            <div v-if="$v.name.$dirty">
              <p
                class="text-red-700 pt-3 pl-1 text-base italic"
                v-if="!$v.name.required"
              >Name field is required.</p>
              <p
                class="text-red-700 pt-3 pl-1 text-base italic"
                v-if="!$v.name.minLength"
              >Name must have at least {{ $v.name.$params.minLength.min }} characters.</p>
            </div>
          </div>
        </div>

        <div class="input flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3 pt-2 -mb-2">
            <label
              for="email"
              class="block uppercase tracking-wide text-gray-700 text-sm font-semibold mb-1 pl-1"
            >email*</label>
            <input
              id="email"
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-600 rounded py-2 px-4 -mb-2 leading-tight focus:bg-white focus:border-gray-800"
              :class="{ error: $v.email.$error }"
              type="email"
              placeholder="john@test.com"
              v-model.trim="email"
              @input="$v.email.$touch()"
            />
            <div v-if="$v.email.$dirty">
              <p
                class="text-red-700 pt-3 pl-1 text-base italic"
                v-if="!$v.email.required"
              >Email field is required.</p>
              <p
                class="text-red-700 pt-3 pl-1 text-base italic"
                v-if="!$v.email.email"
              >Needs to be a valid email address.</p>
            </div>
          </div>
        </div>

        <div class="input flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3 pt-2 -mb-2">
            <label
              for="subject"
              class="block uppercase tracking-wide text-gray-700 text-sm font-semibold mb-1 pl-1"
            >subject*</label>
            <input
              id="subject"
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-600 rounded py-2 px-4 -mb-2 leading-tight focus:bg-white focus:border-gray-800"
              :class="{ error: $v.subject.$error }"
              type="text"
              placeholder="Subject of the Message"
              v-model.trim="subject"
              @input="$v.subject.$touch()"
            />
            <div v-if="$v.subject.$dirty">
              <p
                class="text-red-700 pt-3 pl-1 text-base italic"
                v-if="!$v.subject.required"
              >Subject field is required.</p>
              <p
                class="text-red-700 pt-3 pl-1 text-base italic"
                v-if="!$v.subject.minLength"
              >Subject must have at least {{ $v.subject.$params.minLength.min }} characters.</p>
              <p
                class="text-red-700 pt-3 pl-1 text-base italic"
                v-if="!$v.subject.maxLength"
              >Subject must have at most {{ $v.subject.$params.maxLength.max }} characters.</p>
            </div>
          </div>
        </div>

        <div class="input flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3 pt-2 -mb-2">
            <label
              for="message"
              class="block uppercase tracking-wide text-gray-700 text-sm font-semibold mb-1 pl-1"
            >message*</label>
            <textarea
              id="message"
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-600 rounded py-2 px-4 -mb-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-lg"
              :class="{ error: $v.message.$error }"
              type="text"
              placeholder="Your Message"
              v-model.trim="message"
              @input="$v.message.$touch()"
            />
            <div v-if="$v.message.$dirty">
              <p
                class="text-red-700 pt-3 pl-1 text-base italic"
                v-if="!$v.message.required"
              >Message field is required.</p>
              <p
                class="error-message leading-none mt-4"
                v-if="!$v.message.minLength"
              >Message must have at least {{ $v.message.$params.minLength.min }} characters.</p>
              <p
                class="error-message leading-none mt-4 text-base"
                v-if="!$v.message.maxLength"
              >Message must have at most {{ $v.message.$params.maxLength.max }} characters.</p>
            </div>
          </div>
        </div>

        <div class="md:flex md:justify-center">
          <div class="w-full pt-4 px-2">

            <button
              class="submit shadow focus:shadow-outline focus:outline-none text-white font-bold py-2 px-2 w-full rounded"
              v-bind:class="[$v.$invalid ? 'bg-teal-700 opacity-50 cursor-not-allowed' : 'bg-teal-700 hover:bg-teal-600']"
              type="submit"
              :disabled="$v.$invalid"
            ><span class="uppercase">Send the Message</span>
            </button>

            <p
              class="text-green-700 text-xl pt-1"
              v-if="submitStatus === 'OK'"
            >Thanks for your submission!</p>
            <p
              class="text-red-700 ml-1 mt-1 text-base"
              v-if="submitStatus === 'ERROR'"
            >Please fill in the form correctly.
            </p>
            <p
              class="text-red-700 mt-2 text-base text-center"
              v-if="submitStatus === 'EMPTY'"
            >The form is empty&nbsp;!
                <br />You can't submit an empty form.
            </p>
            <p class="text-green-700 text-xl" v-if="submitStatus === 'PENDING'">Sending...
            </p>
          </div>
        </div>
      </form>

      <!-- <div class="validators">
        <pre>{{$v}}</pre>
      </div> -->
    </div>
  </div>
</template>

<script>
import {
  required,
  email,
  minLength,
  maxLength
} from "vuelidate/lib/validators";

export default {
  data() {
    return {
      email: "",
      name: "",
      subject: "",
      message: "",
      submitStatus: null
    };
  },
  methods: {
    submit() {
      console.log("submit!");
      this.$v.$touch();
      if (this.name.length === 0 && this.email.length === 0 && this.subject.length === 0 && this.message.length === 0) {
        this.submitStatus = "EMPTY";
        // console.log('empty');
      } else if (this.$v.$invalid) {
        this.submitStatus = "ERROR";
      } else {
        // do your submit logic here
        console.log('sub');
        this.submitStatus = "PENDING";
        setTimeout(() => {
          this.submitStatus = "OK";
        }, 500);
      }
    }
  },

  validations: {
    email: {
      required,
      email
    },
    name: {
      required,
      minLength: minLength(4)
    },
    subject: {
      required,
      minLength: minLength(6),
      maxLength: maxLength(50)
    },
    message: {
      required,
      minLength: minLength(6),
      maxLength: maxLength(125)
    }
  }
};
</script>

<style scoped>
/* .form {
  display: inline-block;
  text-align: center;
  width: 59%;
} */
.validators {
  display: inline-block;
  width: 39%;
  /* text-align: center; */
  vertical-align: top;
}
.input {
  padding: 5px;
}
input:focus {
  outline: none;
}
.error {
  border: 1px solid red;
  background-color: lightpink;
}
.error-message {
  color: red;
}
</style>
