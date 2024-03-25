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
    <h1>Productvarity</h1>

    <div>
        <a class="btn btn-primary" href="{{ route('productvarity.create') }}">New Productvarity</a> 
    </div>
    
    <div>
        @if(session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div>
        <table border="1" class="table table-striped">
            <tr>

                <th>สินค้า</th>
                <th>จำนวน</th>
                <th>สี</th>
                <th>ราคา</th>
                
                <th>edit</th>
                <th>delete</th>
            </tr>

            @foreach ($productvarity as $productvarity)
            
                <tr>
    
                    <td>{{ $productvarity->productname}}</td>
                    <td>{{ $productvarity->amount}}</td>
                    <td>{{ $productvarity->color}}</td>
                    <td>{{ $productvarity->price}}</td>
                    
                    
                    <td>
                        <a class="btn btn-success" href="{{ route('productvarity.edit',['productvarity' => $productvarity->productvarityID]) }}">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('productvarity.destroy',['productvarity'=> $productvarity->productvarityID]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td> 
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>