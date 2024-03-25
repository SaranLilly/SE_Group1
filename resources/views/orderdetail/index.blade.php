@extends('layout')
@section('content')
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
    @endsection