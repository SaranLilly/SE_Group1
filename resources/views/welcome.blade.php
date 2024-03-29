@extends('layout')
@section('title', 'หน้าแรก')
@section('content')
    @foreach ($employee_log1 as $item) 
    <h1 class="display-4 text-center">ยินดีต้อนรับคุณ {{$item->firstName}} {{$item->lastName}} </h1>
    @endforeach 
    
@endsection
