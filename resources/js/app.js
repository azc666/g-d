/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from "vue";
import FormTestComponent from "./components/FormTestComponent.vue";
import Vuelidate from "vuelidate";

Vue.use(Vuelidate);
Vue.config.productionTip = false;

new Vue({
    render: h => h(FormTestComponent)
}).$mount("#app");




/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('nav-component', require('./components/NavComponent.vue').default);
Vue.component('navlanding-component', require('./components/NavLandingComponent.vue').default);
Vue.component('footer-component', require('./components/FooterComponent.vue').default);
Vue.component('contactform-component', require('./components/ContactFormComponent.vue').default);
Vue.component('formtest-component', require('./components/FormTestComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const nav = new Vue({
    el: '#mainnav',
});

const footer = new Vue({
    el: '#footer',
});

const navLanding = new Vue({
    el: '#navlanding',
});

const app5 = new Vue({
    el: '#contactus',
});

// const validate = new Vue({

//     el: '#app'
// });


