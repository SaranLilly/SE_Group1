@extends('layout')
@section('content')
    <h1>แก้ไข</h1>
    <form method="post" action="{{route('round.update',['round'=>$round->idround])}}">
        @csrf
        @method('put')
        <div>
            <label>วันที่</label>
            <input type="date" name="date" value="{{$round->date}}">
        </div>
        
        <div><br>
            <input type="submit" value="แก้ไข">
        </div>
    </form>
@endsection