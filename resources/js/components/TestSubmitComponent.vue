<template>
  <!-- <form @submit.prevent="submit"> -->
      <form action="/contactus" method="POST">
    <input id="firstname" type="text" v-model="firstname" />
    <input id="lastname" type="text" v-model="lastname" />
    <input id="age" type="text" v-model="age" />
    <input type="hidden" name="_token" :value="csrf">
    <button type="submit">Submit</button>
  </form>
</template>

<script>
export default {
  data() {
    return {
      firstname: "",
      lastname: "",
      age: "",
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    };
  },
//   methods: {
//     submit() {
//       axios.post("contactus", {
//         firstname: firstname,
//         lastname: lastname,
//         age: age
//       }).then(response => {
//       this.resp = response;
//     })
//     .catch(e => {
//       console.error(e);
//     });;
//     }
//   }
};
</script>
