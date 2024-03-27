@extends('layout')
@section('title', 'แบบประเมิน')
@section('content')
    <h1 style="font-weight: 800">Evaluation</h1>
    <button><a class="btn btn-primary" href="/evaluation/create">เพิ่ม</a></button>
    <br><br>

    <div class="table">
        <table style="width: 100%">
            <thead>
                <tr class="head">

                    <th>ผู้ประเมิน</th>
                    <th>ผู้ถูกประเมิน</th>
                    <th>รอบการประเมิน</th>
                    <th>หัวข้อ</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($evaluations as $evaluation)
                    <tr class="column">

                        <td><label name="idassess ">{{ $evaluation->assessN }} {{ $evaluation->assessF }}</label></td>

                        <td><label name="idassessed ">{{ $evaluation->assessedN }} {{ $evaluation->assessedF }}</label></td>

                        <td><label name="idround ">{{ $evaluation->date }}</label></td>
                        <td><label name="idset ">{{ $evaluation->titleset }}</label></td>

                        <td><a class="btn btn-success"
                                href="{{ route('evaluation.edit', ['evaluation' => $evaluation->idevaluation]) }}">แก้ไข</a>
                        </td>
                        <td>
                            <form method="POST"
                                action="{{ route('evaluation.delete', ['evaluation' => $evaluation->idevaluation]) }}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="ลบ" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>


    </div>

@endsection
