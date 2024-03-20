<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create saleteam</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                
            @endforeach
        </ul>

        @endif
    </div>
    <form method="POST" action="{{ route('saleteam.listofname') }}">
        @csrf
        @method('post')
    
        <div>
            <label>ชื่อทีม</label>
            <input type="text" name="teamName" placeholder="teamName">
        </div>
        {{-- <div>
            <label>Lastname</label>
            <input type="text" name="lastName" placeholder="lastName">
        </div> --}}
        
        <div>
            <input type="submit" value="Save New Team">
        </div>
    </form>
</body>
</html>