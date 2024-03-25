<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>เพิ่ม</h1>
    <form method="post" action="{{route('result.store')}}">
        @csrf
        @method('post')
        <div>
            <div>
            <label>หัวข้อ </label>
            <select name="idcriterakipi">
                @foreach($criteriakpis as $criteriakpi)
                    <option value="{{ $criteriakpi->crID }}">{{ $criteriakpi->title }}</option>
                @endforeach
            </select>
            </div>
            <div>
            <label> </label>
            <select name="idevalution">
                @foreach($evaluations as $evaluation)
                    <option value="{{ $evaluation->idevaluation  }}">{{ $evaluation->idevaluation }}</option>
                @endforeach
            </select>
            </div>
            <div>
                <label>weight </label>
                <input type="text" name="weight" placeholder="weight" >
            </div>
            <div>
                <label>score </label>
                <input type="text" name="score" placeholder="score" >
            </div>
        
        </div>
        <div>
            <input type="submit" value="save" >
        </div>
    </form>
</body>
</html>