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
    <form method="post" action="{{route('round.update',['round'=>$round->idround])}}">
        @csrf
        @method('put')
        <div>
            <input type="date" name="date" value="{{$round->date}}">
        </div>
        
        <div>
            <input type="submit" value="update">
        </div>
    </form>
</body>
</html>