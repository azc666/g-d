<template>
     <form method="POST" action="contactus" @submit.prevent="submit()">

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" v-model="name" />
            <div v-if="errors && errors.name" class="text-danger">{{ errors.name[0] }}</div>
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" id="email" v-model="email" />
            <div v-if="errors && errors.email" class="text-danger">{{ errors.email[0] }}</div>
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" v-model="name" />
            <div v-if="errors && errors.name" class="text-danger">{{ errors.name[0] }}</div>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" v-model="message"></textarea>
            <div v-if="errors && errors.message" class="text-danger">{{ errors.message[0] }}</div>
        </div>

        <button type="submit" class="btn btn-primary">Send message</button>

        <!-- <div v-if="success" class="alert alert-success mt-3">
            Message sent!

        </div> -->
    </form>
</template>

<script>
// import qs from 'qs';
export default {
  data() {
    return {
      name: '',
      email: '',
      subject: '',
      message: ''
    }
  },
  methods: {
    submit(){

      axios.post('/contactus',{
        name: this.name,
        email: this.email,
        subject: this.subject,
        message: this.message,
      })
       .then((response)=>{
this.$router.push("/aboutus?"+this.name)
        // $('#success').html(response.data.message)

        })
    }
  },
}
    // submit() {
    //   if (this.loaded) {
    //     this.loaded = false;
    //     this.success = false;
    //     this.errors = {};
    //     // axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded';
    //     axios.post('contactus', qs.stringify(data()) ).then(response => {
    //       // alert('hola');
    //       this.fields = {}; //Clear input fields.
    //       this.loaded = true;
    //       this.success = true;
    //     }).catch(error => {
    //       this.loaded = true;
    //       if (error.response.status === 422) {
    //         this.errors = error.response.data.errors || {};
    //       }
    //     });
    //   }

    // },


// $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });
</script>
