@extends('layout')
@section('content')
    <h1>เพิ่ม</h1>
    <form method="post" action="{{route('round.store')}}">
        @csrf
        @method('post')
        <div>
            <label>วันที่</label>
            <input type="date" name="date" placeholder="date">
        </div>
        <div><br>
            <input type="submit" value="บันทึก">
        </div>
    </form>
@endsection