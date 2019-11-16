/**
 * First we will load all of this project's JavaScript dependencies which
<<<<<<< HEAD
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
=======
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
>>>>>>> 515ff881b7d61b9d348df75aad7e1f7bf68cf49d
 */

require('./bootstrap');

<<<<<<< HEAD
/**
 * Next, we will create a fresh React component instance and attach it to
=======
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

/**
 * Next, we will create a fresh Vue application instance and attach it to
>>>>>>> 515ff881b7d61b9d348df75aad7e1f7bf68cf49d
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

<<<<<<< HEAD
require('./components/Example');
=======
const app = new Vue({
    el: '#app',
});
>>>>>>> 515ff881b7d61b9d348df75aad7e1f7bf68cf49d
