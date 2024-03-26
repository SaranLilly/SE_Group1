@extends('layout')
@section('title', 'ข้อมูลพนักงาน')
@section('content')
    <h1>ข้อมูลพนักงาน</h1>

    <div>
        @if (session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    
    <div class="table table-responsive " style="width: 100%">
        <table style="width: 100%">
            <tr class="head">
                {{-- <th>คำนำหน้าชื่อ</th> --}}
                {{--    <th>เบอร์โทรศัพท์</th> --}}
                <th>รหัสพนักงาน</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>ชื่อเล่น</th>
                <th>email</th>
                <th>ตำแหน่ง</th>
                <th>ทีม</th>
                <th></th>
            </tr>
            @foreach ($employees as $employee)
                <tr class="column">
                    {{-- <td>{{ $employee->prefix}}</td> --}}
                    {{-- <td>{{ $employee->phoneNumber}}</td> --}}
                    <td>{{ $employee->userName }}</td>
                    <td>{{ $employee->firstName }}</td>
                    <td>{{ $employee->lastName }}</td>
                    <td>{{ $employee->nickname }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->positionName }}</td>
                    <td>{{ $employee->teamName }}</td>
                    <td><a href="{{ route('empOverall.index') }}" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">ผลการทำงาน</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
