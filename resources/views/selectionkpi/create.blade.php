@extends('layout')
@section('content')
    <h1>เพิ่ม</h1>
    <form method="post" action="{{route('selectionkpi.store')}}">
        @csrf
        @method('post')
        <div>
            <label>ชื่อชุด</label>
            <select name="idset">
                @foreach($setkpis as $setkpi)
                    <option value="{{ $setkpi->idset }}">{{ $setkpi->titleset }}</option>
                @endforeach
            </select>
            <label>หัวข้อ </label>
            <select name="idcriteriakpi">
                @foreach($criteriakpis as $kpi)
                    <option value="{{ $kpi->crID }}">{{ $kpi->title }}</option>
                @endforeach
            </select>
            
            
        </div>
        <div><br>
            <input type="submit" value="บันทึก">
        </div>
    </form>
@endsection