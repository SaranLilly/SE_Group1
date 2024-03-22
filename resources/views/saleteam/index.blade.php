@extends('layout')
@section('title','ข้อมูลพนักงานในทีม')
@section('content')
    <h1>saleteams</h1>

    <div>
        <a href="{{ route('saleteam.create') }}">New Team</a>
    </div>
    
    <div>
        @if(session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div>
        <table border="1">
            <tr>
                {{-- <th>ลำดับ</th> --}}
                <th>ชื่อทีม</th>
                
            </tr>
            @foreach ($saleteams as $saleteam)
            
                <tr>
                    {{-- <td>{{ $saleteam->saleTeamID}}</td> --}}
                    <td>{{ $saleteam->teamName}}</td>
                    
                    <td>
                        <a href="{{ route('saleteam.edit',['saleteam' => $saleteam->saleTeamID]) }}">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('saleteam.destroy',['saleteam'=> $saleteam->saleTeamID]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
    