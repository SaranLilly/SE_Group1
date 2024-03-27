@extends('layout')
@section('content')
    <h1>Quotationdetail</h1>

    <div>
        <a class="btn btn-primary" href="{{ route('quotationdetail.create') }}">New Quotationdetail</a> 
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
                <th>ลูกค้า</th>
                <th>สินค้า</th>
                <th>สี</th>
                <th>ราคา</th>
                
                <th>edit</th>
                <th>delete</th>
            </tr>

            @foreach ($quotationdetail as $quotationdetail)
            
                <tr>
    
                    <td>{{ $quotationdetail->firstName}}</td>
                    <td>{{ $quotationdetail->firstname}}</td>
                    <td>{{ $quotationdetail->productname}}</td>
                    <td>{{ $quotationdetail->color}}</td>
                    <td>{{ $quotationdetail->price}}</td>
                    
                    
                    <td>
                        <a class="btn btn-success" href="{{ route('quotationdetail.edit',['quotationdetail' => $quotationdetail->quotationdetailID]) }}">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('quotationdetail.destroy',['quotationdetail'=> $quotationdetail->quotationdetailID]) }}">
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