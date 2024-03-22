<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
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
    <form class="row g-3" method="POST" action="{{ route('employee.update',['employee'=>$employee->empID]) }}">

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
</body>
</html>
