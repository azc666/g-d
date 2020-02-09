/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

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
Vue.component('map-component', require('./components/GoogleMapComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Vue from 'vue'
import * as VueGoogleMaps from 'vue2-google-maps'

Vue.use(VueGoogleMaps, {
    load: {
        key: 'AIzaSyDiqdTLaQL2lvS8H0e25g7Cyu2JkZBtias',
        libraries: 'places'
    },
    installComponents: true
});

const app = new Vue({
    el: "#map"
})

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

const app3 = new Vue({
    el: '#app3'
});


