
@extends('layout')
@section('content')

    <h1>Create Quotationdetail</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                
            @endforeach
        </ul>

        @endif
    </div>
    <form method="POST" action="{{ route('quotationdetail.listofquotationdetail') }}">
        @csrf
        @method('post')
        
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
            <input type="submit" value="Save New Quotationdetail">
        </div>
    </form>
    @endsection