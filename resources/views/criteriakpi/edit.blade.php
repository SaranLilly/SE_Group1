@extends('layout')
@section('content')
    <h1>แก้ไข</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                
            @endforeach
        </ul>
        @endif
    </div>
    <form method="POST" action="{{ route('criteriakpi.update',['criteriakpi'=>$criteriakpi->crID]) }}">

        @csrf
        @method('put')
        <div>
            <label>ชื่อหัวข้อการประเมิน</label>
            <input type="text" name="title" placeholder="title"value="{{ $criteriakpi->title }}">
            
        </div>
        <div>
            <input type="submit" value="แก้ไข">
        </div>
    </form>
    @endsection
