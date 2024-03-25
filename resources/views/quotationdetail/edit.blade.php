@extends('layout')
@section('content')
    <div class="container">
    <h1>Edit Quotationdetail</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                
            @endforeach
        </ul>
        @endif
    </div>
    <form class="row g-3" method="POST" action="{{ route('quotationdetail.update',['quotationdetail'=>$quotationdetail->quotationdetailID])}}">

        @csrf
        @method('put')
        
        <div class="form-label">
            <label>productvarity</label>
            <select name="productvarityID">
                @foreach($productvarity as $productvarity)
                    <option value="{{ $productvarity->productvarityID }}">{{ $productvarity->productvarityID}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-label">
            <label>quotation</label>
            <select name="quotationID">
                @foreach($quotation as $quotation)
                    <option value="{{ $quotation->quotationID }}">{{ $quotation->quotationID }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-12">
            <input type="submit" value="Update">
        </div>
    </form>
</div>
@endsection