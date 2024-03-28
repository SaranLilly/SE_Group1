@extends('HRPages/layoutHR')
@section('title','ข้อมูลพนักงาน')
@section('content')
    <h3 style="font-family: Arial">ข้อมูลพนักงาน</h3>

    {{-- <div>
        <a class="btn btn-primary" href="{{ route('employee.create') }}">New Employee</a>
    </div> --}}
    <div class=" py-3 px-1 d-grid gap-2 d-md-flex justify-content-md-end ">
        <a class="btn btn-primary  md-8 font-family-monospace" href="{{ route('allemployeeHR') }}">เพิ่มพนักงาน</a>
      </div>
    <div>
        @if(session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div class=" table-responsive text-center"style="width: 100%">
        <table style="width: 100%"> 
            <tr class="head">
                {{-- <th>ลำดับ</th> --}}  
                <th style=" justify-content: center">รหัสพนักงาน</th>
                <th style="justify-content: center">คำนำหน้าชื่อ</th>
                <th style="justify-content: center">ชื่อ</th>
                <th style="justify-content: center">นามสกุล</th>
                <th style="justify-content: center">ชื่อเล่น</th>
              
                <th style="justify-content: center">password</th>
                <th style="justify-content: center">เบอร์โทรศัพท์</th>
                <th style="justify-content: center">รหัสบัตรประจำตัวประชาชน</th>
                <th style="justify-content: center">วันเกิด</th>
                <th style="justify-content: center">email</th>
                <th style="justify-content: center">ตำแหน่ง</th>
                <th style="justify-content: center">ทีม</th>
                
                <th style="justify-content: center">เเก้ไข</th>
                <th style="justify-content: center">ลบ</th>
            </tr>
            @foreach ($employees as $employee)
            
                <tr>
                    {{-- <td>{{ $employee->empID}}</td> --}}
                    <td>{{ $employee->userName}}</td>
                    <td>{{ $employee->prefix}}</td>
                    <td>{{ $employee->firstName}}</td>
                    <td>{{ $employee->lastName}}</td>
                    <td>{{ $employee->nickname}}</td>
                   
                    <td>{{ $employee->password}}</td>
                    <td>{{ $employee->phoneNumber}}</td>
                     <td>{{ $employee->idCard}}</td>
                    <td>{{ $employee->birth}}</td>
                    <td>{{ $employee->email}}</td>
                    <td>{{ $employee->positionName}}</td>
                    <td>{{ $employee->teamName}}</td>
                    
                    
                    <td>
                        <a class="px-1 btn btn-success" href="{{ route('employeeHR.edit',['employee' => $employee->empID]) }}">เเก้ไข</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('employeeHR.destroy',['employee'=> $employee->empID]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="ลบ" class="px-2.5 btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
    