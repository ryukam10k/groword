//Vueのインスタンスの定義
var app = new Vue({
    el: "#app",
    data: {
        url: "http://192.168.10.10/wordapi/getwords/",
        sentence: "",
        words: {}
    },
    methods: {//v-on:click="hoge"などのイベントに紐づく関数定義
        get: function () { //v-on:click="post"時の処理
            //Axiosを使ったAJAX
            //リクエスト時のオプションの定義
            config = {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-Type': 'application / x-www-form-urlencoded'
                },
                withCredentials: true,
            }

            //window.alert(this.sentence);

            //vueでバインドされた値はmethodの中ではthisで取得できる
            //param = JSON.parse(this.param)
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