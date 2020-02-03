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

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('example2-component', require('./components/Example2Component.vue').default);
Vue.component('nav-component', require('./components/NavComponent.vue').default);
Vue.component('footer-component', require('./components/FooterComponent.vue').default);
Vue.component('footer2-component', require('./components/Footer2Component.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

const footer = new Vue({
    el: '#footer',
});

const footer2 = new Vue({
    el: '#footer2',
});

const app5 = new Vue({
    el: '#app5',
});

const app3 = new Vue({
    el: '#app3'
});

// const app3 = new Vue ({
//     el: '#app3',
//     components: {
//         DestinationCard,
//     },
//     data() {
//         return {
//             popularDestinations: [
//                 {
//                     city: 'Toronto',
//                     averagePrice: 120,
//                     propertyCount: 76,
//                     imageUrl: '/img/toronto.jpg',
//                     imageAlt: 'Toronto skyline',
//                 },
//                 {
//                     city: 'Malibu',
//                     averagePrice: 215,
//                     propertyCount: 43,
//                     imageUrl: '/img/malibu.jpg',
//                     imageAlt: 'Cliff in Malibu',
//                 },
//                 {
//                     city: 'Chicago',
//                     averagePrice: 130,
//                     propertyCount: 115,
//                     imageUrl: '/img/chicago.jpg',
//                     imageAlt: 'Chicago skyline',
//                 },
//                 {
//                     city: 'Seattle',
//                     averagePrice: 135,
//                     propertyCount: 63,
//                     imageUrl: '/img/seattle.jpg',
//                     imageAlt: 'Seattle skyline',
//                 },
//                 {
//                     city: 'Colorado',
//                     averagePrice: 85,
//                     propertyCount: 47,
//                     imageUrl: '/img/colorado.jpg',
//                     imageAlt: 'Lake in Colorado',
//                 },
//                 {
//                     city: 'Miami',
//                     averagePrice: 115,
//                     propertyCount: 86,
//                     imageUrl: '/img/miami.jpg',
//                     imageAlt: 'Beach in Miami',
//                 },
//             ]
//         }
//     }
// })
