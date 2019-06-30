
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

Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });


var app = new Vue({
    el: "#app",
    data: {
        url: "/wordapi/getwords/",
        sentence: document.getElementById('sentence').value,
        words: []
    },
    mounted: function () {
        this.getWords()
    },
    methods: {
        window: onload = function () {
            this.getWords();
        },
        getWords: function () {
            // Ajax by Axios
            config = {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-Type': 'application / x-www-form-urlencoded'
                },
                withCredentials: true,
            }

            param = "";

            axios.get(this.url + this.sentence, param, config)
                .then(function (res) {
                    app.words = res.data
                    console.log(res)
                })
                .catch(function (res) {
                    app.words = res.data
                    console.log(res)
                });
        }
    }
})