
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

Vue.component('dropdown', require('./components/header/Dropdown.vue'));



const vue = new Vue({
    el: '#app',
    data: {
        name: '',
        url: "123",
        form: {
            url: "new_url"
        }
    },
    computed: {
        slug: function () {

            return this.name;
        }
    },
    watch: {
        "name": function() {

            axios.post('/admin', {
                firstName: 'Fred',
                lastName: 'Flintstone'
            })
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    }
});

require('./components/menu/menu.js');


