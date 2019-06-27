<!DOCTYPE html>
<html>

<head>
    <title>vue ajax</title>
</head>

<body>
    <h1>API CALL TEST with Vue.JS</h1>
    <div id="app">
        <div>
            <p>URL</p>
            <input type="text" id="url" v-model="url" size="60">
        </div>
        <div>
            <textarea v-on:change="get" name="" id="sentence" v-model="sentence" cols="30" rows="10"></textarea>
        </div>
        <div>
            <p>関連する単語</p>
            <li v-for="word in words">
                {{ word.name + " " + word.meaning }}
            </li>
        </div>
    </div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue"></script>
    <script src="https://unpkg.com/jquery"></script>
    <script src="/js/ajax.js"> </script>
</body>

</html>