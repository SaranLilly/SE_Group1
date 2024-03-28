{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> --}}
    @extends('HRPages/layoutHR')
    @section('title','หัวข้อการประเมิน')
    @section('content')
    <h3>หัวข้อการประเมิน</h3>
    <div class=" py-3 px-1 d-grid gap-2 d-md-flex justify-content-md-end ">
        <a class="btn btn-primary  md-8 font-family-monospace" href="{{ route('addcriteriakpiHR') }}">เพิ่มหัวข้อการประเมิน</a>
      </div>
    
    
    <div>
        @if(session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div>
        <div class=" table-responsive text-center"style="width: 100%">
            <table class="table-bordered border-white  table-bordered text-center"style="width: 100%"> 
                <tr class="head">
                {{-- <th>ลำดับ</th> --}}
                <th>ชื่อหัวข้อการประเมิน</th>
                <th>เเก้ไข</th>
                <th>ลบ</th>
                
            </tr>
            @foreach ($criteriakpis as $criteriakpi)
            
                <tr>
                    {{-- <td>{{ $saleteam->saleTeamID}}</td> --}}
                    <td>{{ $criteriakpi->title}}</td>
                    
                    <td>
                        <a class="px-1 btn btn-success" href="{{ route('editcriteriakpiHR',['criteriakpi' => $criteriakpi->crID]) }}">เเก้ไข</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('deletecriteriakpiHR',['criteriakpi'=> $criteriakpi->crID]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="ลบ"class="px-2.5 btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
{{-- </body> --}}
</html>
@endsection