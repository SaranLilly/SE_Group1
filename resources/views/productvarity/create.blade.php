<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Productvarity</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                
            @endforeach
        </ul>

        @endif
    </div>
    <form method="POST" action="{{ route('productvarity.listofproductvarity') }}">
        @csrf
        @method('post')
        
        
        <div>
            <label>Product </label>
            <select name="productID">
                @foreach($products as $products)
                    <option value="{{ $products->productsID }}">{{ $products->productname }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>amount</label>
            <input type="Integer" name="amount" placeholder="amount">
        </div>
        <div>
            <label>color</label>
            <input type="text" name="color" placeholder="color">
        </div>
        <div>
            <label>price</label>
            <input type="Double" name="price" placeholder="price">
        </div>
            <input type="submit" value="Save New Order">
        </div>
    </form>
</body>
</html>