<html>
<head>
    <title>Hello/Index</title>
</head>
<body>
    <h1>Index</h1>
    <p>{{$msg}}</p>
    <form method="post" action="/hello">
        @csrf
        <input type="text" name="msg">
        <input type="submit">
    </form>
</body>
</html>
