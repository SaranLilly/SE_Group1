@extends('layout')
@section('content')
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
@endsection