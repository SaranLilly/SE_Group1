@extends('layout')
@section('titlle','การเพิ่มข้อมูลพนักงาน')
@section('content')

<style>
    .edit {
        margin: auto;
        /* จัดให้อยู่ตรงกลาง */
        width: 50%;
        /* ปรับขนาดให้กว้าง 50% */
        padding: 20px;
        /* เพิ่มช่องว่างรอบขอบ */
        border-radius: 10px;
        /* เพิ่มความโค้งให้กับขอบ */
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        /* เพิ่มเงา */
    }

    form {
        margin-top: 20px;
        /* เพิ่มระยะห่างด้านบนของแบบฟอร์ม */
    }

    .form-label {
        display: flex;
        flex-direction: column;
        margin-bottom: 15px;
        /* เพิ่มระยะห่างระหว่างข้อมูลในแบบฟอร์ม */
        border-radius: 8px;
        width: 100%;
        margin-top: 20px;
    }

    input[type="submit"] {
        width: 100%;
        /* ทำให้ปุ่มเต็มความกว้าง */
        padding: 10px;
        /* เพิ่มช่องว่างในปุ่ม */
        border: none;
        background-color: #1d8551;
        /*เปลี่ยนสีพื้นหลังของปุ่ม  */
        color: white;
        /* เปลี่ยนสีข้อความในปุ่มเป็นขาว */
        border-radius: 10px;
        /* เพิ่มความโค้งให้กับขอบของปุ่ม */
        cursor: pointer;
        transition: background-color 0.3s;
        /* เพิ่มเอฟเฟคการเปลี่ยนสีเมื่อ hover บนปุ่ม */
    }

    input[type="submit"]:hover {
        background-color: #2bc678;
        /* เปลี่ยนสีพื้นหลังของปุ่มเมื่อ hover */
    }

    select {
        padding: 8px;
        border-radius: 10px;
        border: 1px solid #ccc;
        outline: none;
    }

    input {
        padding: 8px;
        border-radius: 10px;
        border: 1px solid #ccc;
        outline: none;
    }
</style>

<div class="edit">
    <h1 style="font-weight:800">เพิ่มข้อมูลพนักงาน</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                
            @endforeach
        </ul>

        @endif
    </div>
    <form method="POST" action="{{ route('employee.listofname') }}">
        @csrf
        @method('post')
        {{-- <div>
            <label>Prefix</label>
            <input type="text" name="prefix" placeholder="prefix">
        </div> --}}
        <div class="form-label">
            <label for="prefix">คำนำหน้าชื่อ</label>
            <select name="prefix" id="prefix">
                <option value="นาย">นาย</option>
                <option value="นาง">นาง</option>
                <option value="นางสาว">นางสาว</option>
            </select>
        </div>
        
        <div class="form-label">
            <label>ชื่อ</label>
            <input type="text" name="firstName" placeholder="Firstname">
        </div>
        <div class="form-label">
            <label>นามสกุล</label>
            <input type="text" name="lastName" placeholder="Lastname">
        </div>
        <div class="form-label">
            <label>ชื่อเล่น</label>
            <input type="text" name="nickname" placeholder="Nickname">
        </div>
        <div class="form-label">
            <label>Username</label>
            <input type="text" name="userName" placeholder="Username">
        </div>
        <div class="form-label">
            <label>Password</label>
            <input type="password" name="password" placeholder="Password">
        </div>
        <div class="form-label">
            <label>เบอร์โทรศัพท์</label>
            <input type="text" name="phoneNumber" placeholder="Phonenumber">
        </div>
        <div class="form-label">
            <label>หมายเลขบัตรประชาชน</label>
            <input type="text" name="idCard" placeholder="Idcard">
        </div>
        <div class="form-label">
            <label>วันเกิด</label>
            <input type="date" name="birth" placeholder="Birth">
        </div>
        <div class="form-label">
            <label>อีเมล</label>
            <input type="text" name="email" placeholder="Email">
        </div>
        <div class="form-label">
            <label>ตำแหน่ง</label>
            <select name="positionID">
                @foreach($positions as $position)
                    <option value="{{ $position->positionID }}">{{ $position->positionName }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-label">
            <label>ทีม</label>
            <select name="saleTeamID">
                @foreach($saleteams as $saleteam)
                    <option value="{{ $saleteam->saleTeamID  }}">{{ $saleteam->teamName }}</option>
                @endforeach
            </select>
        </div>
        {{-- <div>
            <label>Position </label>
            <input type="text" name="positionName" placeholder="positionName">
        </div> --}}
        
        {{-- <div>
            <label>SaleTeam </label>
            <input type="text" name="teamName" placeholder="teamName">
        </div> --}}
        <div class="form-label">
            <input type="submit" value="บันทึก">
        </div>
    </form>

</div>
    
@endsection