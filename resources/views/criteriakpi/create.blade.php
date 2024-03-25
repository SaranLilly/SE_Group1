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
    <form method="POST" action="{{ route('criteriakpi.listofname') }}">
        @csrf
        @method('post')
    
        <div>
            <label>หัวข้อ</label>
            <input type="text" name="title" placeholder="title">
        </div>
        {{-- <div>
            <label>Lastname</label>
            <input type="text" name="lastName" placeholder="lastName">
        </div> --}}
        
        <div>
            <input type="submit" value="บันทึก">
        </div>
    </form>
    @endsection