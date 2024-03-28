@extends('layout')
@section('title','เพิ่มเเบบประเมิน')
@section('content')
    <h1>เพิ่มเเบบประเมิน</h1>
    <div>
        @if (session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    <form method="post" action="{{route('setkpiHR.store')}}">
        @csrf
        @method('post')
        <div>
            <label>titleset</label>
            <input type="text" name="titleset" placeholder="title">
        </div>
        <div>
            <input type="submit" value="save">
        </div>
    </form>
@endsection
    