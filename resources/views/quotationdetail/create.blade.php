<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
</body>
</html>