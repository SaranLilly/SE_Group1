@extends('layout')
@section('title','ข้อมูลพนักงาน')
@section('content')

 <style>
 </style>



    <h1 style="font-weight: 800">ข้อมูลพนักงาน</h1>

    {{-- <div>
        <a class="btn btn-primary" href="{{ route('employee.create') }}">New Employee</a>
    </div> --}}
    <div class=" py-3 px-1 d-grid gap-2 d-md-flex justify-content-md-end ">
        <a class="btn btn-primary  md-8 font-family-monospace"
            href="{{ route('employee.create') }}">เพิ่ม</a>
    </div>
    <br>
    <div>
        @if(session()->has('success')) 
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div class="table table-responsive" style="width: 100%">
        {{-- <table border="1" class="table table-align-middle"> --}}
        <table style="width: 100%">
            <tr class="head" >
                {{-- <th>ลำดับ</th> --}}
                {{-- <th>คำนำหน้าชื่อ</th> --}}
                <th>ชื่อ</th>
                {{-- <th>นามสกุล</th> --}}
                {{-- <th>ชื่อเล่น</th> --}}
                <th>Username</th>
                {{-- <th>password</th> --}}
                <th>เบอร์โทรศัพท์</th>
                {{-- <th>รหัสบัตรประจำตัวประชาชน</th> --}}
                {{-- <th>วันเกิด</th> --}}
                <th>email</th>
                <th>ตำแหน่ง</th>
                <th>ทีม</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
                <th>ผลการทำงาน</th>
                
            </tr>
            @foreach ($employees as $employee)
            
                <tr class="column">
                    {{-- <td>{{ $employee->empID}}</td> --}}
                    <td>{{ $employee->prefix}}{{ $employee->firstName}} {{ $employee->lastName}}</td>
                    {{-- <td>{{ $employee->nickname}}</td> --}}
                    <td>{{ $employee->userName}}</td>
                   {{--  <td>{{ $employee->password}}</td> --}}
                    <td>{{ $employee->phoneNumber}}</td>
                  {{--   <td>{{ $employee->idCard}}</td> --}}
                    {{-- <td>{{ $employee->birth}}</td> --}}
                    <td>{{ $employee->email}}</td>
                    <td>{{ $employee->positionName}}</td>
                    
                    <td>{{ $employee->teamName}}</td>
                    
                    
                    <td>
                        <a class="btn btn-success" href="{{ route('employee.edit',['employee' => $employee->empID]) }}">แก้ไข</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('employee.destroy',['employee'=> $employee->empID]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="ลบ" class="btn btn-danger">
                        </form>
                    </td>
                    <td>
                    <a href="{{ route('empOverall.index', ['empID' => $employee->empID]) }}" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">ผลการทำงาน</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
    