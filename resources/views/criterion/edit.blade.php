@extends('layout')

@section('title', 'แก้ไขเกณฑ์การประเมิน')

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
            border-radius: 10px;
            /* เพิ่มความโค้งให้กับขอบของปุ่ม */
            cursor: pointer;
            transition: background-color 0.3s;
            /* เพิ่มเอฟเฟคการเปลี่ยนสีเมื่อ hover บนปุ่ม */
        }

        input[type="submit"]:hover {
            background-color: #2bc678;
            /* เปลี่ยนสีพื้นหลังของปุ่มเมื่อ hover */
        }
        
        input {
            padding: 8px;
            border-radius: 10px;
            border: 1px solid #ccc;
            outline: none;
        }
    </style>

    <div class="edit">
        <h1 style="font-weight: 800; text-align: center;">แก้ไขเกณฑ์การประเมิน</h1>
        <div>
            @if ($errors->any())
                <div style="color: red;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <form class="row g-3" method="POST"
            action="{{ route('criterion.update', ['criterion' => $criterion->idcriterion]) }}">

            @csrf
            @method('put')
            <div class="form-label col-md-6">
                <label style="font-weight: bold;">หัวข้อการประเมิน</label>
                @foreach ($criteriakpis as $criteriakpi)
                    <input readonly type="text" name="title" placeholder="title" value="{{ $criteriakpi->title }}">
                @endforeach
            </div>

            <div class="form-label">
                <label style="font-weight: bold;">max</label>
                <input type="text" name="max" placeholder="max" value="{{ $criterion->max }}">
            </div>
            <div class="form-label">
                <label style="font-weight: bold;">min</label>
                <input type="text" name="min" placeholder="min" value="{{ $criterion->min }}">
            </div>
            <div class="form-label">
                <label style="font-weight: bold;">score</label>
                <input readonly type="text" name="score" placeholder="score" value="{{ $criterion->score }}">
            </div>

            <div class="form-label">
                <label style="font-weight: bold;">levelOfQuality</label>
                <input readonly type="text" name="levelOfQuality" placeholder="levelOfQuality"
                    value="{{ $criterion->levelOfQuality }}">
            </div>

            <div class="col-12">
                <input type="submit" value="บันทึก">
            </div>
        </form>
    </div>
@endsection
