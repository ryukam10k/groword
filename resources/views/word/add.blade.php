<html>
<head>
<title>Add | Words | Growords</title>
<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
    <h1>Add - Words</h1>
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <table class="table">
    <form action="/word/add" method="post">
        {{ csrf_field() }}
        <tr>
            <th>name: </th>
            <td><input type="text" name="name" value="{{old('name')}}"></td>
        </tr>
        <tr>
            <th>howtoread: </th>
            <td><input type="text" name="howtoread" vaule="{{old('howtoread')}}"></td>
        </tr>
        <tr>
            <th>meaning: </th>
            <td><input type="text" name="meaning" value="{{old('meaning')}}"></td>
        </tr>
        <tr>
            <th>source: </th>
            <td><input type="text" name="source" value="{{old('source')}}"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </form>
    </table>
</body>
</html>