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

        <label>set </label>
        <select name="idset">
            <?php foreach($setkpis as $setkpi){
                echo"<option value= $setkpi->idset ";
                if($setkpi->idset == $selectionkpi->idset){
                    echo 'selected="selected"';
                }
                echo"> $setkpi->titleset</option>";
            }?>
        </select>
        <label>kpi </label>
        <select name="idcriteriakpi">
            <?php foreach($criteriakpis as $kpi){
                echo"<option value= $kpi->crID ";
                if($kpi->crID == $selectionkpi->idcriteriakpi){
                    echo 'selected="selected"';
                }
                echo"> $kpi->title</option>";
            }?>
        </select>
       
        
        
        <div>
            <input type="submit" value="update">
        </div>
    </form>
</body>
</html>