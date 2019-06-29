
var vue_app = new Vue({
    el: "#vue_app",
    data: {
        url: "/wordapi/getwords/",
        sentence: document.getElementById('sentence').value,
        words: []
    },
    methods: {
        window: onload = function () {
            //this.window.alert();
            this.getWords();
            this.window.alert('test2');
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
                    vue_app.words = res.data
                    console.log(res)
                })
                .catch(function (res) {
                    vue_app.words = res.data
                    console.log(res)
                });
        }
    }
})