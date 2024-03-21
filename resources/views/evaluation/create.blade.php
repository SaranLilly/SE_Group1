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
    <form method="post" action="{{route('evaluation.store')}}">
        @csrf
        @method('post')
        <div>
            <label>ผู้ประเมิน </label>
            <select name="idassess">
                @foreach($employees as $employee)
                    <option value="{{ $employee->empID }}">{{ $employee->firstName }}</option>
                @endforeach
            </select>
            <label>ผู้ถูกประเมิน </label>
            <select name="idassessed">
                @foreach($employees as $employee)
                    <option value="{{ $employee->empID }}">{{ $employee->firstName }}</option>
                @endforeach
            </select>
            <label>round </label>
            <select name="idround">
                @foreach($rounds as $round)
                    <option value="{{ $round->idround }}">{{ $round->date }}</option>
                @endforeach
            </select>
            <label>set </label>
            <select name="idset">
                @foreach($setkpis as $setkpi)
                    <option value="{{ $setkpi->idset }}">{{ $setkpi->titleset }}</option>
                @endforeach
            </select>
            
        </div>
        <div>
            <input type="submit" value="save">
        </div>
    </form>
</body>
</html>