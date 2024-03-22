@extends('layout')
@section('title','ข้อมูลพนักงาน')
@section('content')
    <h1>Employee</h1>

    <div>
        <a class="btn btn-primary" href="{{ route('employee.create') }}">New Employee</a>
    </div>
    
    <div>
        @if(session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div class="container text-center">
        <table border="1" class="table table-striped table-align-middle">
            <tr>
                {{-- <th>ลำดับ</th> --}}
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
                
                <th>edit</th>
                <th>delete</th>
            </tr>
            @foreach ($employees as $employee)
            
                <tr>
                    {{-- <td>{{ $employee->empID}}</td> --}}
                    <td>{{ $employee->prefix}}</td>
                    <td>{{ $employee->firstName}}</td>
                    <td>{{ $employee->lastName}}</td>
                    <td>{{ $employee->nickname}}</td>
                    <td>{{ $employee->userName}}</td>
                    <td>{{ $employee->password}}</td>
                    <td>{{ $employee->phoneNumber}}</td>
                    <td>{{ $employee->idCard}}</td>
                    <td>{{ $employee->birth}}</td>
                    <td>{{ $employee->email}}</td>
                    <td>{{ $employee->positionName}}</td>
                    
                    <td>{{ $employee->teamName}}</td>
                    
                    
                    <td>
                        <a class="btn btn-success" href="{{ route('employee.edit',['employee' => $employee->empID]) }}">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('employee.destroy',['employee'=> $employee->empID]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
    