@extends('layout')
@section('content')
    <div class="container">
    <h1>Edit Orderdetail</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                
            @endforeach
        </ul>
        @endif
    </div>
    <form class="row g-3" method="POST" action="{{ route('orderdetail.update',['orderdetail'=>$orderdetail->orderdetailID])}}">

        @csrf
        @method('put')
        
        <div class="form-label">
            <label>order </label>
            <select name="orderID">
                @foreach($orders as $orders)
                    <option value="{{ $orders->orderID }}">{{ $orders->orderID }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-label">
            <label>productvarity</label>
            <select name="productvarity">
                @foreach($productvarity as $productvarity)
                    <option value="{{ $productvarity->productvarityID }}">{{ $productvarity->productvarityID}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-12">
            <input type="submit" value="Update">
        </div>
    </form>
</div>
@endsection