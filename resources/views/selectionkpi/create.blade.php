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
    <form method="post" action="{{route('selectionkpi.store')}}">
        @csrf
        @method('post')
        <div>
            <label>set</label>
            <input type="text" name="idset" placeholder="idset EX 1">
            <label>kpi</label>
            <input type="text" name="idcriteriakpi" placeholder="idcriteriakpi EX 1 ">
        </div>
        <div>
            <input type="submit" value="save">
        </div>
    </form>
</body>
</html>