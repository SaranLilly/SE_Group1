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
    <form method="post" action="{{route('selectionkpi.update',['selectionkpi'=>$selectionkpi->idselection])}}">
        @csrf
        @method('put')
        <div>
            <input type="text" name="idset" placeholder="idset" value="{{$selectionkpi->idset}}">
        </div>
        <div>
            <input type="text" name="idcriteriakpi" placeholder="idcriteriakpi" value="{{$selectionkpi->idcriteriakpi}}">
        </div>
        
        
        <div>
            <input type="submit" value="update">
        </div>
    </form>
</body>
</html>