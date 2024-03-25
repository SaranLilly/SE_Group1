@extends('layout')
@section('title','ข้อมูลพนักงานในทีม')
@section('content')
    <h1>saleteams</h1>
    <button><a class="btn btn-primary" href="{{ route('saleteam.create') }}">เพิ่ม</a></button>
    <br><br>
    <div>
        @if(session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div>
        <table class="table table-striped table-align-middle" border="1">
            <tr>
                {{-- <th>ลำดับ</th> --}}
                <th>ชื่อทีม</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
                
            </tr>
            @foreach ($saleteams as $saleteam)
            
                <tr>
                    {{-- <td>{{ $saleteam->saleTeamID}}</td> --}}
                    <td>{{ $saleteam->teamName}}</td>
                    
                    <td>
                        <a class="btn btn-success" href="{{ route('saleteam.edit',['saleteam' => $saleteam->saleTeamID]) }}">แก้ไข</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('saleteam.destroy',['saleteam'=> $saleteam->saleTeamID]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="ลบ" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
    