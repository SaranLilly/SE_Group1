@extends('layout')
@section('title', 'หน้าของหัวหน้าทีม')
@section('content')
    <h1 class="display-4 text-center">ยินดีต้อนรับคุณ {{ Auth::user()->name }}</h1>
@endsection
