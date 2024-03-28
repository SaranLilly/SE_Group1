@extends('layout')
@section('title','เพิ่มชุดการประเมินและหัวข้อการประเมิน')
@section('content')
    <style>
        .edit {
            margin: auto;
            width: 59%;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        form {
            margin-top: 20px;
        }

        .form-label {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
            border-radius: 8px;
            margin-top: 20px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #1d8551;
            color: white;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #2bc678;
        }

        /* เพิ่มข้อมูล CSS สำหรับ label */
        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* เพิ่มข้อมูล CSS สำหรับ input */
        input {
            padding: 8px;
            border-radius: 10px;
            border: 1px solid #ccc;
            outline: none;
        }
        select {
            padding: 8px;
            border-radius: 10px;
            border: 1px solid #ccc;
            outline: none;
        }
    </style>


    <div class="edit">
        <h1 style="font-weight: 800">เพิ่มชุดการประเมินและหัวข้อการประเมิน</h1>
        <form method="post" action="{{ route('selectionkpi.store') }}">
            @csrf
            @method('post')
            <div class="form-label">
                <label>ชื่อชุด</label>
                <select name="idset">
                    @foreach ($setkpis as $setkpi)
                        <option value="{{ $setkpi->idset }}">{{ $setkpi->titleset }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-label">
                <label>หัวข้อ </label>
                <select name="idcriteriakpi">
                    @foreach ($criteriakpis as $kpi)
                        <option value="{{ $kpi->crID }}">{{ $kpi->title }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <input type="submit" value="บันทึก">
            </div>
        </form>




    </div>
   
@endsection
