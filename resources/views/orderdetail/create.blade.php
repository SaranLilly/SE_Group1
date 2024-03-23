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
    <form method="POST" action="{{ route('orderdetail.listoforderdetail') }}">
        @csrf
        @method('post')
        
        <div>
            <label>order </label>
            <select name="orderID">
                @foreach($orders as $orders)
                    <option value="{{ $orders->orderID }}">{{ $orders->orderID }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>productvarity </label>
            <select name="productvarity">
                @foreach($productvarity as $productvarity)
                    <option value="{{ $productvarity->productvarityID}}">{{ $productvarity->productvarityID}}</option>
                @endforeach
            </select>
        </div>
            <input type="submit" value="Save New Orderdetail">
        </div>
    </form>
</body>
</html>