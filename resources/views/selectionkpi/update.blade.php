@extends('layout')
@section('title', '')
@section('content')


    <style>
        .edit {
            margin: auto;
            /* จัดให้อยู่ตรงกลาง */
            width: 50%;
            /* ปรับขนาดให้กว้าง 50% */
            padding: 20px;
            /* เพิ่มช่องว่างรอบขอบ */
            border-radius: 10px;
            /* เพิ่มความโค้งให้กับขอบ */
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            /* เพิ่มเงา */
        }

        form {
            margin-top: 20px;
            /* เพิ่มระยะห่างด้านบนของแบบฟอร์ม */
        }

        .form-label {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
            /* เพิ่มระยะห่างระหว่างข้อมูลในแบบฟอร์ม */
            border-radius: 8px;
            width: 100%;
        }

        input[type="submit"] {
            width: 100%;
            /* ทำให้ปุ่มเต็มความกว้าง */
            padding: 10px;
            /* เพิ่มช่องว่างในปุ่ม */
            border: none;
            background-color: #1d8551;
            /*เปลี่ยนสีพื้นหลังของปุ่ม  */
            color: white;
            /* เปลี่ยนสีข้อความในปุ่มเป็นขาว */
            border-radius: 5px;
            /* เพิ่มความโค้งให้กับขอบของปุ่ม */
            cursor: pointer;
            transition: background-color 0.3s;
            /* เพิ่มเอฟเฟคการเปลี่ยนสีเมื่อ hover บนปุ่ม */
        }

        input[type="submit"]:hover {
            background-color: #2bc678;
            /* เปลี่ยนสีพื้นหลังของปุ่มเมื่อ hover */
        }

        select {
            padding: 8px;
            border-radius: 10px;
            border: 1px solid #ccc;
            outline: none;
        }
    </style>
    <div class="edit">
        <h1 style="font-weight: 800">แก้ไข</h1>
        <form method="post" action="{{ route('selectionkpi.update', ['selectionkpi' => $selectionkpi->idselection]) }}">
            @csrf
            @method('put')
            <div class="form-label">
                <label>ชื่อชุด </label>
                <select name="idset">
                    <?php foreach ($setkpis as $setkpi) {
                        echo "<option value= $setkpi->idset ";
                        if ($setkpi->idset == $selectionkpi->idset) {
                            echo 'selected="selected"';
                        }
                        echo "> $setkpi->titleset</option>";
                    } ?>
                </select>
            </div>

            <div class="form-label">
                <label>หัวข้อ </label>
                <select name="idcriteriakpi">
                    <?php foreach ($criteriakpis as $kpi) {
                        echo "<option value= $kpi->crID ";
                        if ($kpi->crID == $selectionkpi->idcriteriakpi) {
                            echo 'selected="selected"';
                        }
                        echo "> $kpi->title</option>";
                    } ?>
                </select>
            </div>




            <div><br>
                <input type="submit" value="แก้ไข">
            </div>
        </form>

    </div>


@endsection
