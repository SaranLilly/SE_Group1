@extends('layout')
@section('content')
    <h1>เพิ่ม</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                
            @endforeach
        </ul>

        @endif
    </div>
    <form method="POST" action="{{ route('saleteam.listofname') }}">
        @csrf
        @method('post')
    
        <div>
            <label>ชื่อทีม</label>
            <input type="text" name="teamName" placeholder="teamName">
        </div>
        {{-- <div>
            <label>Lastname</label>
            <input type="text" name="lastName" placeholder="lastName">
        </div> --}}
        
        <div><br>
            <input type="submit" value="บันทึก">
        </div>
    </form>
    @endsection