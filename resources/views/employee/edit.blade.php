<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Employee</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                
            @endforeach
        </ul>
        @endif
    </div>
    <form method="POST" action="{{ route('employee.update',['employee'=>$employee->empID]) }}">

        @csrf
        @method('put')
        {{-- <div>
            <label>Prefix</label>
            <input type="text" name="prefix" placeholder="prefix" value="{{ $employee->prefix }}">
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
            <input type="text" name="firstName" placeholder="firstName" value="{{ $employee->firstName }}">
        </div>
        <div>
            <label>Lastname</label>
            <input type="text" name="lastName" placeholder="lastName" value="{{ $employee->lastName }}">
        </div>
        <div>
            <label>Nickname</label>
            <input type="text" name="nickname" placeholder="nickname" value="{{ $employee->nickname }}">
        </div>
        <div>
            <label>userName</label>
            <input type="text" name="userName" placeholder="userName" value="{{ $employee->userName }}">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" placeholder="password" value="{{ $employee->password }}"> 
        </div>
        <div>
            <label>PhoneNumber</label>
            <input type="text" name="phoneNumber" placeholder="phoneNumber" value="{{ $employee->phoneNumber }}">
        </div>
        <div>
            <label>IdCard</label>
            <input type="text" name="idCard" placeholder="idCard" value="{{ $employee->idCard }}">
        </div>
        <div>
            <label>Birth</label>
            <input type="date" name="birth" placeholder="birth" value="{{ $employee->birth }}">
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" placeholder="email" value="{{ $employee->email }}">
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
            <label>PositionID </label>
            <input type="text" name="positionID" placeholder="positionID" value="{{ $employee->positionID }}">
        </div>
        <div>
            <label>SaleTeamID </label>
            <input type="text" name="saleTeamID" placeholder="saleTeamID" value="{{ $employee->saleTeamID }}">
        </div> --}}
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>
