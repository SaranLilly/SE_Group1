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
    <form method="post" action="{{route('evaluation.update',['evaluation'=>$evaluation->idevaluation])}}">
        @csrf
        @method('put')

        <label>ผู้ประเมิน </label>
            <select name="idassess">
                @foreach($employees as $employee)
                    <option value="{{ $employee->empID }}">{{ $employee->firstName }} {{ $employee->lastName }}</option>
                @endforeach
            </select>
            <label>ผู้ถูกประเมิน </label>
            <select name="idassessed">
                @foreach($employees2 as $employee)
                    <option value="{{ $employee->empID }}">{{ $employee->firstName }} {{ $employee->lastName }}</option>
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
       
        <div>
            <input type="submit" value="update">
        </div>
    </form>
</body>
</html>