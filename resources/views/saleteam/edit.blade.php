<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Saleteam</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                
            @endforeach
        </ul>
        @endif
    </div>
    <form method="POST" action="{{ route('saleteam.update',['saleteam'=>$saleteam->saleTeamID]) }}">

        @csrf
        @method('put')
        <div>
            <label>ชื่อทีม</label>
            <input type="text" name="teamName" placeholder="teamName"value="{{ $saleteam->teamName }}">
            
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>
