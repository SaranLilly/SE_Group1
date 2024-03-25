@extends('layout')
@section('content')
    <h1>เพิ่ม</h1>

    <form method="post" action="{{route('setkpi.store')}}">
        @csrf
        @method('post')
        <div>
            <label>ชื่อชุด</label>
            <input type="text" name="titleset" placeholder="title">
        </div>
        <div><br>
            <input type="submit" value="บันทึก">
        </div>
    </form>
    @endsection