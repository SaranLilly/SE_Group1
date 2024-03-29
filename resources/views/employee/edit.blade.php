@extends('layout')
@section('title', 'แก้ไขข้อมูลพนักงาน')
@section('content')

<style>
    .edit {
        margin: auto;
        width: 50%;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    }

    form {
        margin-top: 20px;
    }

    .form-label {
        display: flex;
        flex-direction: column;
        margin-bottom: 15px;
        border-radius: 8px;
        margin-top: 20px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        background-color: #1d8551;
        color: white;
        border-radius: 10px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #2bc678;
    }

    /* เพิ่มข้อมูล CSS สำหรับ label */
    label {
        font-weight: bold;
        margin-bottom: 5px;
    }

    /* เพิ่มข้อมูล CSS สำหรับ input */
    input {
        padding: 8px;
        border-radius: 10px;
        border: 1px solid #ccc;
        outline: none;
    }
    select {
        padding: 8px;
        border-radius: 10px;
        border: 1px solid #ccc;
        outline: none;
    }
</style>

    <div class="edit">
        <h1 style="font-weight: 800">แก้ไขข้อมูลพนักงาน</h1>
        <div>
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <form class="row g-3" method="POST" action="{{ route('employee.update', ['employee' => $employee->empID]) }}">

            @csrf
            @method('put')
            {{-- <div>
            <label>Prefix</label>
            <input type="text" name="prefix" placeholder="prefix" value="{{ $employee->prefix }}">
        </div> --}}
            <div class="form-label" class="col-md-6">
                <label for="prefix">คำนำหน้า</label>
                <select name="prefix" id="prefix">
                    <option value="นาย">นาย</option>
                    <option value="นาง">นาง</option>
                    <option value="นางสาว">นางสาว</option>
                </select>
            </div>
            <div class="form-label">
                <label>ชื่อ</label>
                <input type="text" name="firstName" placeholder="firstname" value="{{ $employee->firstName }}">
            </div>
            <div class="form-label">
                <label>นามสกุล</label>
                <input type="text" name="lastName" placeholder="Lastname" value="{{ $employee->lastName }}">
            </div>
            <div class="form-label">
                <label>ชื่อเล่น</label>
                <input type="text" name="nickname" placeholder="Nickname" value="{{ $employee->nickname }}">
            </div>
            <div class="form-label">
                <label>Username</label>
                <input type="text" name="userName" placeholder="Username" value="{{ $employee->userName }}">
            </div>
            <div class="form-label">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password" value="{{ $employee->password }}">
            </div>
            <div class="form-label">
                <label>หมายเลขโทรศัพท์</label>
                <input type="text" name="phoneNumber" placeholder="Phonenumber" value="{{ $employee->phoneNumber }}">
            </div>
            <div class="form-label">
                <label>หมายเลขบัตรประชาชน</label>
                <input type="text" name="idCard" placeholder="Idcard" value="{{ $employee->idCard }}">
            </div>
            <div class="form-label">
                <label>วันเกิด</label>
                <input type="date" name="birth" placeholder="Birth" value="{{ $employee->birth }}">
            </div>
            <div class="form-label">
                <label>อีเมล</label>
                <input type="text" name="email" placeholder="Email" value="{{ $employee->email }}">
            </div>
            <div class="form-label">
                <label>ตำแหน่ง</label>
                <select name="positionID">
                    @foreach ($positions as $position)
                        <option value="{{ $position->positionID }}">{{ $position->positionName }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-label">
                <label>ทีม</label>
                <select name="saleTeamID">
                    @foreach ($saleteams as $saleteam)
                        <option value="{{ $saleteam->saleTeamID }}">{{ $saleteam->teamName }}</option>
                    @endforeach
                </select>
            </div>
            {{-- <div>
            <label>PositionID </label>
            <input type="text" name="positionID" placeholder="positionID" value="{{ $employee->positionID }}">
        </div>
        <div>
            <label>SaleTeamID </label>
            <input type="text" name="saleTeamID" placeholder="saleTeamID" value="{{ $employee->saleTeamID }}">
        </div> --}}
            <div class="col-12">
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
@endsection
