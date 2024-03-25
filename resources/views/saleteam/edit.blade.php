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
    <form method="POST" action="{{ route('saleteam.update',['saleteam'=>$saleteam->saleTeamID]) }}">

        @csrf
        @method('put')
        <div>
            <label>ชื่อทีม</label>
            <input type="text" name="teamName" placeholder="teamName"value="{{ $saleteam->teamName }}">
            
        </div>
        <div><br>
            <input type="submit" value="แก้ไข">
        </div>
    </form>
    @endsection
