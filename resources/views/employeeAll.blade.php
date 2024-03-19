{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
</head> --}}
@extends('layout')
@section('title', 'ข้อมูลพนักงาน')
@section('content')

<body>
    <h2 class="text pb-4">ข้อมูลพนักงาน</h2>

    {{-- <div>
        <a href="{{ route('employee.create') }}">New Employee</a>
    </div> --}}

    <div>
        @if (session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div>
        <table class="table">
            <tr>
                <th>ลำดับ</th>
                <th>คำนำหน้าชื่อ</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>ชื่อเล่น</th>
                <th>userName</th>
                <th>password</th>
                <th>เบอร์โทรศัพท์</th>
                <th>รหัสบัตรประจำตัวประชาชน</th>
                <th>วันเกิด</th>
                <th>email</th>
                <th>ตำแหน่ง</th>
                <th>ทีม</th>
                {{-- <th>edit</th> --}}
                {{-- <th>delete</th> --}}
            </tr>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->empID }}</td>
                    <td>{{ $employee->prefix }}</td>
                    <td>{{ $employee->firstName }}</td>
                    <td>{{ $employee->lastName }}</td>
                    <td>{{ $employee->nickname }}</td>
                    <td>{{ $employee->userName }}</td>
                    <td>{{ $employee->password }}</td>
                    <td>{{ $employee->phoneNumber }}</td>
                    <td>{{ $employee->idCard }}</td>
                    <td>{{ $employee->birth }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->positionName }}</td>
                    <td>{{ $employee->teamName }}</td>
                    {{-- <td>
                        <a href="{{ route('employee.edit', ['employee' => $employee->empID]) }}">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('employee.destroy', ['employee' => $employee->empID]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td> --}}
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
