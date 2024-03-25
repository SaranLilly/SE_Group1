@extends('layout')
@section('content')
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
    @endsection