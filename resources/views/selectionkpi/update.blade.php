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

        <select name="idset">
            @foreach($setkpis as $setkpi)
                <option value="{{ $setkpi->idset }}">{{ $setkpi->titleset }}</option>
            @endforeach
        </select>
        <label>kpi </label>
        <select name="idcriteriakpi">
            @foreach($criteriakpis as $kpi)
                <option value="{{ $kpi->crID }}">{{ $kpi->title }}</option>
            @endforeach
        </select>
       
        
        
        <div>
            <input type="submit" value="update">
        </div>
    </form>
</body>
</html>