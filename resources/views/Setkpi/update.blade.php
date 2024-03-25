@extends('layout')
@section('content')
    <h1>แก้ไข</h1>

    <form method="post" action="{{route('setkpi.update',['setkpi'=>$setkpi->idset])}}">
        @csrf
        @method('put')
        <div>
            <label>ชื่อชุด</label>
            <input type="text" name="titleset" placeholder="title" value="{{$setkpi->titleset}}">
        </div>
        
        <div><br>
            <input type="submit" value="แก้ไข">
        </div>
    </form>
    @endsection