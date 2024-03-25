@extends('layout')
@section('content')
    <h1>Quotation</h1>

    <div>
        <a class="btn btn-primary" href="{{ route('quotation.create') }}">New Quotation</a> 
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

                <th>วันที่</th>
                <th>พนักงาน</th>
                <th>ลูกค้า</th>
                
                <th>edit</th>
                <th>delete</th>
            </tr>

            @foreach ($quotation as $quotation)
            
                <tr>
    
                    <td>{{ $quotation->date}}</td>
                    <td>{{ $quotation->firstName}}</td>
                    <td>{{ $quotation->firstname}}</td>
                    
                    
                    
                    <td>
                        <a class="btn btn-success" href="{{ route('quotation.edit',['quotation' => $quotation->quotationID]) }}">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('quotation.destroy',['quotation'=> $quotation->quotationID]) }}">
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