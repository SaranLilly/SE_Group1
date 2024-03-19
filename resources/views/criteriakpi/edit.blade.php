<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit criteriakpi</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                
            @endforeach
        </ul>
        @endif
    </div>
    <form method="POST" action="{{ route('criteriakpi.update',['criteriakpi'=>$criteriakpi->crID]) }}">

        @csrf
        @method('put')
        <div>
            <label>ชื่อหัวข้อการประเมิน</label>
            <input type="text" name="title" placeholder="title"value="{{ $criteriakpi->title }}">
            
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>
