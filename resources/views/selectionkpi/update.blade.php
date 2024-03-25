@extends('layout')
@section('content')
    <h1>แก้ไข</h1>
    <form method="post" action="{{route('selectionkpi.update',['selectionkpi'=>$selectionkpi->idselection])}}">
        @csrf
        @method('put')

        <label>ชื่อชุด </label>
        <select name="idset">
            <?php foreach($setkpis as $setkpi){
                echo"<option value= $setkpi->idset ";
                if($setkpi->idset == $selectionkpi->idset){
                    echo 'selected="selected"';
                }
                echo"> $setkpi->titleset</option>";
            }?>
        </select>
        <label>หัวข้อ </label>
        <select name="idcriteriakpi">
            <?php foreach($criteriakpis as $kpi){
                echo"<option value= $kpi->crID ";
                if($kpi->crID == $selectionkpi->idcriteriakpi){
                    echo 'selected="selected"';
                }
                echo"> $kpi->title</option>";
            }?>
        </select>
       
        
        
        <div><br>
            <input type="submit" value="แก้ไข">
        </div>
    </form>
@endsection