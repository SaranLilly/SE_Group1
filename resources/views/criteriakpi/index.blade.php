@extends('layout')
@section('content')
    <h1>criteriakpi</h1>

    <div>
        <button><a class="btn btn-primary" href="{{ route('criteriakpi.create') }}">เพิ่ม</a></button>
    </div>
    
    <div>
        @if(session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div>
        <table border="1" class="table table-striped table-align-middle">
            <tr>
                {{-- <th>ลำดับ</th> --}}
                <th>ชื่อหัวข้อการประเมิน</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>
            @foreach ($criteriakpis as $criteriakpi)
            
                <tr>
                    {{-- <td>{{ $saleteam->saleTeamID}}</td> --}}
                    <td>{{ $criteriakpi->title}}</td>
                    
                    <td>
                        <a class="btn btn-success" href="{{ route('criteriakpi.edit',['criteriakpi' => $criteriakpi->crID]) }}">แก้ไข</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('criteriakpi.destroy',['criteriakpi'=> $criteriakpi->crID]) }}">
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