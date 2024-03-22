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
    <h1>Edit Order</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                
            @endforeach
        </ul>
        @endif
    </div>
    <form class="row g-3" method="POST" action="{{ route('orders.update',['orders'=>$orders->orderID])}}">

        @csrf
        @method('put')
        
        <div class="form-label">
            <label>Employee </label>
            <select name="empID">
                @foreach($employee as $employee)
                    <option value="{{ $employee->empID }}">{{ $employee->firstName }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-label">
            <label>Customer </label>
            <select name="customerID">
                @foreach($customers as $customers)
                    <option value="{{ $customers->cusId }}">{{ $customers->firstname }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-label">
            <label>status </label>
            <select name="statusid">
                @foreach($status as $status)
                    <option value="{{ $status->statusid }}">{{ $status->status }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-12">
            <input type="submit" value="Update">
        </div>
    </form>
</div>
</body>
</html>