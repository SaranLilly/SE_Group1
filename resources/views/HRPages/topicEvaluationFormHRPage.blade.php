@extends('layout')
@section('title', 'หัวข้อการประเมิน')
@section('content')
    <h1 style="font-weight: 800">หัวข้อการประเมิน</h1>

    <div class=" py-3 px-1 d-grid gap-2 d-md-flex justify-content-md-end ">
        <a class="btn btn-primary  md-8 font-family-monospace" href="{{ route('addcriteriakpiHR') }}">เพิ่ม</a>
    </div>


    <div>
        @if (session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div class= "table table-responsive" style="width: 100%">
        <table style="width: 100%">
            <tr class="head">
                {{-- <th>ลำดับ</th> --}}
                <th>ชื่อหัวข้อการประเมิน</th>
                <th>เเก้ไข</th>
                <th>ลบ</th>

            </tr>
            @foreach ($criteriakpis as $criteriakpi)
                <tr class="column">
                    {{-- <td>{{ $saleteam->saleTeamID}}</td> --}}
                    <td>{{ $criteriakpi->title }}</td>

                    <td>
                        <a class="px-1 btn btn-success"
                            href="{{ route('editcriteriakpiHR', ['criteriakpi' => $criteriakpi->crID]) }}">เเก้ไข</a>
                    </td>
                    <td>
                        <form method="POST"
                            action="{{ route('deletecriteriakpiHR', ['criteriakpi' => $criteriakpi->crID]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="ลบ"class="px-2.5 btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
