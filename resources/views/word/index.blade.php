<html>
<head>
<title>Words | Growords</title>
<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
    <h1>Words</h1>
    <div><a href="/word/add">Add</a></div>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Meaning</th>
            <th></th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->meaning}}</td>
            <td>
                <a href="/word/show?id={{$item->id}}">show</a> | 
                <a href="/word/edit?id={{$item->id}}">edit</a> | 
                <a href="/word/del?id={{$item->id}}">del</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>