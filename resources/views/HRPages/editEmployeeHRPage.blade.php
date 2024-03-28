@extends('HRPages/layoutHR')
@section('title','แก้ไขข้อมูลพนักงาน')
@section('content')
    <div class="container">
    <h1>แก้ไขข้อมูลพนักงาน</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                
            @endforeach
        </ul>
        @endif
    </div>
    <form class="row g-3" method="POST" action="{{ route('setkpiupdateHR',['employee'=>$employee->empID]) }}">

        @csrf
        @method('put')
        {{-- <div>
            <label>Prefix</label>
            <input type="text" name="prefix" placeholder="prefix" value="{{ $employee->prefix }}">
        </div> --}}
        <div class="form-label" class="col-md-6">
            <label for="prefix">Prefix</label>
            <select name="prefix" id="prefix">
                <option value="นาย">นาย</option>
                <option value="นาง">นาง</option>
                <option value="นางสาว">นางสาว</option>
            </select>
        </div>
        <div class="form-label">
            <label>Firstname</label>
            <input type="text" name="firstName" placeholder="firstName" value="{{ $employee->firstName }}">
        </div>
        <div class="form-label">
            <label>Lastname</label>
            <input type="text" name="lastName" placeholder="lastName" value="{{ $employee->lastName }}">
        </div>
        <div class="form-label">
            <label>Nickname</label>
            <input type="text" name="nickname" placeholder="nickname" value="{{ $employee->nickname }}">
        </div>
        <div class="form-label">
            <label>userName</label>
            <input type="text" name="userName" placeholder="userName" value="{{ $employee->userName }}">
        </div>
        <div class="form-label">
            <label>Password</label>
            <input type="password" name="password" placeholder="password" value="{{ $employee->password }}"> 
        </div>
        <div class="form-label">
            <label>PhoneNumber</label>
            <input type="text" name="phoneNumber" placeholder="phoneNumber" value="{{ $employee->phoneNumber }}">
        </div>
        <div class="form-label">
            <label>IdCard</label>
            <input type="text" name="idCard" placeholder="idCard" value="{{ $employee->idCard }}">
        </div>
        <div class="form-label">
            <label>Birth</label>
            <input type="date" name="birth" placeholder="birth" value="{{ $employee->birth }}">
        </div>
        <div class="form-label">
            <label>Email</label>
            <input type="text" name="email" placeholder="email" value="{{ $employee->email }}">
        </div>
        <div class="form-label">
            <label>Position </label>
            <select name="positionID">
                @foreach($positions as $position)
                    <option value="{{ $position->positionID }}">{{ $position->positionName }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-label">
            <label>SaleTeam </label>
            <select name="saleTeamID">
                @foreach($saleteams as $saleteam)
                    <option value="{{ $saleteam->saleTeamID  }}">{{ $saleteam->teamName }}</option>
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
