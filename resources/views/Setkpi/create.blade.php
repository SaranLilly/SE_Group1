<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>create</h1>
    <form method="post" action="{{route('test.store')}}">
        @csrf
        @method('post')
        <div>
            <label>titleset</label>
            <input type="text" name="titleset" placeholder="title">
        </div>
        <div>
            <input type="submit" value="save">
        </div>
    </form>
</body>
</html>