@extends('layout')
@section('title', 'แก้ไขการประเมิน')
@section('content')

    <style>
        .edit {
            margin: auto;
            width: 50%;
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
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #1d8551;
            color: white;
            border-radius: 5px;
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

        /* เพิ่มข้อมูล CSS สำหรับ select */
        select {
            padding: 8px;
            border-radius: 10px;
            border: 1px solid #ccc;
            outline: none;
            /* display: block;  เพิ่มบรรทัดใหม่ให้ select */
            /* margin-bottom: 10px; เพิ่มช่องว่างด้านล่างของ select */
        }





    </style>


    <div class="edit">
        <h1 style="font-weight: 800">แก้ไขการประเมิน</h1>

        <form method="post" action="{{ route('evaluation.update', ['evaluation' => $evaluation->idevaluation]) }}">
            @csrf
            @method('put')
            <div class="form-label">
                <label>ผู้ประเมิน </label>
                <select name="idassess">
                    {{-- @foreach ($employees as $employee)
                        <option value="{{ $employee->empID }}">{{ $employee->firstName }} {{ $employee->lastName }}</option>
                    @endforeach --}}
                    <?php foreach ($employees as $employee) {
                        echo "<option value= $employee->empID ";
                        if ($employee->empID == $evaluation->idassess) {
                            echo 'selected="selected"';
                        }
                        echo "> $employee->firstName $employee->lastName</option>";
                    } ?>
                </select>
            </div>
           <div class="form-label">
            <label>ผู้ถูกประเมิน </label>
            <select name="idassessed">
                {{-- @foreach ($employees2 as $employee)
                    <option value="{{ $employee->empID }}">{{ $employee->firstName }} {{ $employee->lastName }}</option>
                @endforeach --}}
                <?php foreach ($employees2 as $employee) {
                    echo "<option value= $employee->empID ";
                    if ($employee->empID == $evaluation->idassessed) {
                        echo 'selected="selected"';
                    }
                    echo "> $employee->firstName $employee->lastName</option>";
                } ?>
            </select>
           </div>
           <div class="form-label">
            <label>รอบการประเมิน </label>
            <select name="idround">
                {{-- @foreach ($rounds as $round)
                    <option value="{{ $round->idround }}">{{ $round->date }}</option>
                @endforeach --}}
                <?php foreach ($rounds as $round) {
                    echo "<option value= $round->idround ";
                    if ($round->idround == $evaluation->idround) {
                        echo 'selected="selected"';
                    }
                    echo "> $round->date</option>";
                } ?>
            </select>
           </div>            
            
          <div class="form-label">
            <label>ชื่อชุด </label>
            <select name="idset">
                {{--  @foreach ($setkpis as $setkpi)
                    <option value="{{ $setkpi->idset }}">{{ $setkpi->titleset }}</option>
                @endforeach --}}
                <?php foreach ($setkpis as $setkpi) {
                    echo "<option value= $setkpi->idset ";
                    if ($setkpi->idset == $evaluation->idset) {
                        echo 'selected="selected"';
                    }
                    echo "> $setkpi->titleset</option>";
                } ?>
            </select>
          </div>
            

            <div>
                <br>
                <input type="submit" value="แก้ไข">
            </div>
        </form>


    </div>

@endsection
