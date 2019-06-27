
var app = new Vue({
    el: "#app",
    data: {
        url: "http://192.168.10.10/wordapi/getwords/",
        sentence: "",
        words: {}
    },
    methods: {
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