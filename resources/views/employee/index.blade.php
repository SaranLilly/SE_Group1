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
    <div>
        <table border="1" class="table table-striped">
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
</body>
</html>
    