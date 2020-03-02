<template>
  <form>
    <div class="pb-2">
      <label for="firstName">First Name</label>
      <input
				type="text"
				id="firstName"
				@input="updateForm('firstName', $event.target.value)"
      :value="form.firstName" />
    </div>

    <div class="pb-2">
      <label for="lastName">Last Name</label>
      <input
				type="text"
				id="lastName"
				@input="updateForm('lastName', $event.target.value)"
      :value="form.lastName" />
    </div>

    <div class="pb-2">
      <label for="email">Email</label>
      <input
				type="email"
				id="email"
				@input="updateForm('email', $event.target.value)"
      :value="form.email" />
    </div>

    <div class="pb-2">
      <label for="framework">Favorite Framework</label>
				<select id="framework" @change="updateForm('framework', $event.target.value)">
					<option value="vue" :selected="form.framework === 'vue'">Vue</option>
					<option value="stillvue" :selected="form.framework === 'stillvue'">Vue!</option>
					<option value="vuevuevue" :selected="form.framework === 'vuevuevue'">Vue :D</option>
					<option value="okfine" :selected="form.framework === 'okfine'">Other</option>
				</select>
    </div>

    <div class="flex pb-2">
      <label for="extras">Describe why you love Vue</label>
			<textarea
				id="extras"
				@input="updateForm('extras', $event.target.value)"
				:value="form.extras"
				rows="5"></textarea>
    </div>

    <div class="pb-2">
      <label>
        <input
					type="checkbox"
					:checked="form.spam"
					@change="updateForm('spam', $event.target.checked)" />
      I want all the spams
    	</label>

      <button type="submit">Submit</button>
    </div>
  </form>
</template>

    <script>
export default {
  data() {
    return {
      form: {
        firstName: "",
        lastName: "",
        email: "",
        framework: "vue",
        extras: "",
        spam: false
      }
    };
  },
	methods: {
      updateForm (input, value) {
      	this.form[input] = value

				let storedForm = this.openStorage() // extract stored form
				if (!storedForm) storedForm = {} // if none exists, default to empty object

				storedForm[input] = value // store new value
				this.saveStorage(storedForm) // save changes into localStorage
			},
			openStorage () {
      	return JSON.parse(localStorage.getItem('form'))
    	},
    	saveStorage (form) {
      	localStorage.setItem('form', JSON.stringify(form))
    	},
			created () {
				const storedForm = this.openStorage()
				if (storedForm) {
					this.form = {
						...this.form,
						...storedForm
					}
				}
    	}
    }
};
</script>
