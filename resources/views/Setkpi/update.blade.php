<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>update</h1>
    <form method="post" action="{{route('Setkpi.update')}}">
        @csrf
        @method('post')
        <div>
            <input type="text" name="id" value="{{$setid->setid}}">
            <input type="text" name="titleset" placeholder="title">
        </div>
        <div>
            <input type="submit" value="save">
        </div>
    </form>
</body>
</html>