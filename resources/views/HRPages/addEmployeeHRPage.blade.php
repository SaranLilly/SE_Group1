@extends('HRPages/layoutHR')
@section('titlle','การเพิ่มข้อมูลพนักงาน')
@section('content')
    <h1>การเพิ่มข้อมูลพนักงาน</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                
            @endforeach
        </ul>

        @endif
    </div>
    <form method="POST" action="{{ route('employeeHR.listofname') }}">
        @csrf
        @method('post')
        {{-- <div>
            <label>Prefix</label>
            <input type="text" name="prefix" placeholder="prefix">
        </div> --}}
        <div>
            <label for="prefix">Prefix</label>
            <select name="prefix" id="prefix">
                <option value="นาย">นาย</option>
                <option value="นาง">นาง</option>
                <option value="นางสาว">นางสาว</option>
            </select>
        </div>
        
        <div>
            <label>Firstname</label>
            <input type="text" name="firstName" placeholder="firstName">
        </div>
        <div>
            <label>Lastname</label>
            <input type="text" name="lastName" placeholder="lastName">
        </div>
        <div>
            <label>Nickname</label>
            <input type="text" name="nickname" placeholder="nickname">
        </div>
        <div>
            <label>userName</label>
            <input type="text" name="userName" placeholder="userName">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" placeholder="password">
        </div>
        <div>
            <label>PhoneNumber</label>
            <input type="text" name="phoneNumber" placeholder="phoneNumber">
        </div>
        <div>
            <label>IdCard</label>
            <input type="text" name="idCard" placeholder="idCard">
        </div>
        <div>
            <label>Birth</label>
            <input type="date" name="birth" placeholder="birth">
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" placeholder="email">
        </div>
        <div>
            <label>Position </label>
            <select name="positionID">
                @foreach($positions as $position)
                    <option value="{{ $position->positionID }}">{{ $position->positionName }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>SaleTeam </label>
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
        <div>
            <input type="submit" value="บันทึกพนักงานคนใหม่">
        </div>
    </form>
@endsection