@extends('layout')
@section('content')
    <h1>Orders</h1>

    <div>
        <a class="btn btn-primary" href="{{ route('orders.create') }}">เพิ่ม</a> 
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
                {{-- <th>ลำดับ</th>  --}}
                <th>พนักงาน</th>
                <th>ลูกค้า</th>
                <th>สถานะ</th>
                
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>

            @foreach ($orders as $order)
            
                <tr>
                {{-- <td>{{ $order->orderID}}</td>  --}}
                    <td>{{ $order->firstName}}</td>
                    <td>{{ $order->firstname}}</td>
                    <td>{{ $order->status}}</td>
                    
                    
                    <td>
                        <a class="btn btn-success" href="{{ route('orders.edit',['orders' => $order->orderID]) }}">แก้ไข</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('orders.destroy',['orders'=> $order->orderID]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="ลบ" class="btn btn-danger">
                        </form>
                    </td> 
                </tr>
            @endforeach
        </table>
    </div>
    @endsection