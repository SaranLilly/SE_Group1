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
    <form method="post" action="{{route('round.store')}}">
        @csrf
        @method('post')
        <div>
            <label>date</label>
            <input type="date" name="date" placeholder="date">
        </div>
        <div>
            <input type="submit" value="save">
        </div>
    </form>
</body>
</html>