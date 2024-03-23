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
    <h1>Ordersdetail</h1>

    <div>
        <a class="btn btn-primary" href="{{ route('orderdetail.create') }}">New Orderdetail</a> 
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

                <th>พนักงาน</th>
                <th>จำนวน</th>
                <th>ราคา</th>
                
                <th>edit</th>
                <th>delete</th>
            </tr>

            @foreach ($orderdetail as $orderdetail)
            
                <tr>
    
                    <td>{{ $orderdetail->firstName}}</td>
                    <td>{{ $orderdetail->amount}}</td>
                    <td>{{ $orderdetail->price}}</td>
                    
                    
                    <td>
                        <a class="btn btn-success" href="{{ route('orderdetail.edit',['orderdetail' => $orderdetail->orderdetailID]) }}">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('orderdetail.destroy',['orderdetail'=> $orderdetail->orderdetailID]) }}">
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