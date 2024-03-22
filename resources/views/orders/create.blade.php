<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Order</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                
            @endforeach
        </ul>

        @endif
    </div>
    <form method="POST" action="{{ route('orders.listoforders') }}">
        @csrf
        @method('post')
        
        <div>
            <label>Employee </label>
            <select name="empID">
                @foreach($employee as $employee)
                    <option value="{{ $employee->empID }}">{{ $employee->firstName }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Customer </label>
            <select name="customerID">
                @foreach($customers as $customers)
                    <option value="{{ $customers->cusId  }}">{{ $customers->firstname }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>status </label>
            <select name="statusid">
                @foreach($status as $status)
                    <option value="{{ $status->statusid  }}">{{ $status->status }}</option>
                @endforeach
            </select>
        </div>
            <input type="submit" value="Save New Order">
        </div>
    </form>
</body>
</html>