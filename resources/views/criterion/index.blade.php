@extends('layout')
@section('title', 'หน้าเกณฑ์การประเมิน')
@section('content')
    <h1>เกณฑ์การประเมิน</h1>


    {{-- <div>
        <a class="btn btn-primary" href="{{ route('criterion.create') }}">New criterion</a>
    </div> --}}

    <div>
        @if (session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div class="table table-responsive" style="width: 100%">
        <table style="width: 100%">
            <tr class="head">
                {{-- <th>ลำดับ</th> --}}
                <th>หัวข้อการประเมิน</th>
                {{-- <th>max</th>
                <th>min</th> --}}
                <th>ช่วงการประเมิน(%)</th>
                <th>score</th>
                <th>levelOfQuality</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>
            @foreach ($criterions as $criterion)
                <tr class="column">
                    {{-- <td>{{ $employee->empID}}</td> --}}
                    <td>{{ $criterion->title }}</td>
                    {{-- <td>{{ $criterion->max}}</td>
                    <td>{{ $criterion->min}}</td> --}}
                    <td>{{ $criterion->max }} - {{ $criterion->min }}</td> <!-- เพิ่มช่วงเกณฑ์ -->
                    <td>{{ $criterion->score }}</td>
                    <td>{{ $criterion->levelOfQuality }}</td>



                    <td>
                        <a class="btn btn-success"
                            href="{{ route('criterion.edit', ['criterion' => $criterion->idcriterion]) }}">แก้ไข</a>
                    </td>
                    <td>
                        <form method="POST"
                            action="{{ route('criterion.destroy', ['criterion' => $criterion->idcriterion]) }}">
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
