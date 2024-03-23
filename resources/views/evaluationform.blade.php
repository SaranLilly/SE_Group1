@extends('layout')

@section('title', 'แบบประเมินพนักงาน')

@section('content')
<div class="container">
    <h1 class="">แบบประเมินพนักงาน</h1>

    <form action="#">
        <div class="row mb-4">
            <div class="col-md-6">
                <label for="round" class="form-label">รอบการประเมิน:</label>
                <select class="form-select" id="round" name="round">
                    <option value="0"></option>
                    <option value="1">ไตรมาสที่ 1</option>
                    <option value="2">ไตรมาสที่ 2</option>
                    <option value="3">ไตรมาสที่ 3</option>
                    <option value="4">ไตรมาสที่ 4</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="evaluated" class="form-label">ผู้ถูกประเมิน:</label>
                <select class="form-select" id="evaluated" name="evaluated">
                    <option value="">-- select name --</option>
                    <option value="1">Bank</option>
                    <option value="2">Kong</option>
                    <option value="3">Ton</option>
                    <option value="4">Coke</option>
                </select>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-6">
                <label for="evaluator" class="form-label">ผู้ประเมิน:</label>
                <select class="form-select" id="evaluator" name="evaluator">
                    <option value="">-- select name --</option>
                    <option value="1">Bank</option>
                    <option value="2">Kong</option>
                    <option value="3">Ton</option>
                    <option value="4">Coke</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="eval_date" class="form-label">วันที่ประเมิน:</label>
                <input type="date" class="form-control" id="eval_date" name="eval_date">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-6">
                <label for="eval_set" class="form-label">เลือกชุดการประเมิน:</label>
                <select class="form-select" id="eval_set" name="eval_set">
                    <option value="0"></option>
                    <option value="1">ชุดที่ 1</option>
                    <option value="2">ชุดที่ 2</option>
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th style="width: 50%; text-align: center">หัวข้อการประเมิน</th>
                        <th style="width: 25%; text-align: center">คะแนนเต็ม</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text text-center">ด้านยอดขาย</td>
                        <td>60</td>
                    </tr>
                </tbody>
            </table> <br>
            <h3>กำหนดเกณฑ์</h3>
            <table class="table table-sm table-bordered">
                <tbody>
                    <tr>
                        <td style="width: 25%; text-align: center">95%-100%</td>
                        <td class="col-md-2">
                            <input class="form-check-input" type="radio" name="score" value="excellent" checked>
                            ดีเยี่ยม
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%; text-align: center">85%-95%</td>
                        <td class="col-md-2">
                            <input class="form-check-input" type="radio" name="score" value="good"> ดี
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%; text-align: center">75%-85%</td>
                        <td class="col-md-2">
                            <input class="form-check-input" type="radio" name="score" value="fair"> ปานกลาง
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%; text-align: center">65%-75%</td>
                        <td class="col-md-2">
                            <input class="form-check-input" type="radio" name="score" value="poor"> พอใช้
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%; text-align: center">ต่ำกว่า 65%</td>
                        <td class="col-md-2">
                            <input class="form-check-input" type="radio" name="score" value="improve"> ปรับปรุง
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-5">
                <button type="submit" class="btn btn-primary">บันทึก</button>
                <button type="reset" class="btn btn-secondary">ยกเลิก</button>
            </div>
            
        </div>

        <div class="col-md-12">
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th style="width: 50%; text-align: center">หัวข้อการประเมิน</th>
                        <th style="width: 25%; text-align: center">คะแนนเต็ม</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text text-center">ด้านสินค้า</td>
                        <td>60</td>
                    </tr>
                </tbody>
            </table> <br>
            <h3>กำหนดเกณฑ์</h3>
            <table class="table table-sm table-bordered">
                <tbody>
                    <tr>
                        <td style="width: 25%; text-align: center">95%-100%</td>
                        <td class="col-md-2">
                            <input class="form-check-input" type="radio" name="score" value="excellent" checked>
                            ดีเยี่ยม
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%; text-align: center">85%-95%</td>
                        <td class="col-md-2">
                            <input class="form-check-input" type="radio" name="score" value="good"> ดี
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%; text-align: center">75%-85%</td>
                        <td class="col-md-2">
                            <input class="form-check-input" type="radio" name="score" value="fair"> ปานกลาง
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%; text-align: center">65%-75%</td>
                        <td class="col-md-2">
                            <input class="form-check-input" type="radio" name="score" value="poor"> พอใช้
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%; text-align: center">ต่ำกว่า 65%</td>
                        <td class="col-md-2">
                            <input class="form-check-input" type="radio" name="score" value="improve"> ปรับปรุง
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-5">
                <button type="submit" class="btn btn-primary">บันทึก</button>
                <button type="reset" class="btn btn-secondary">ยกเลิก</button>
            </div>
            
        </div>

        <div class="col-md-12">
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th style="width: 50%; text-align: center">หัวข้อการประเมิน</th>
                        <th style="width: 25%; text-align: center">คะแนนเต็ม</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text text-center">ด้านความสัมพันธ์กับลูกค้า</td>
                        <td>60</td>
                    </tr>
                </tbody>
            </table> <br>
            <h3>กำหนดเกณฑ์</h3>
            <table class="table table-sm table-bordered">
                <tbody>
                    <tr>
                        <td style="width: 25%; text-align: center">95%-100%</td>
                        <td class="col-md-2">
                            <input class="form-check-input" type="radio" name="score" value="excellent" checked>
                            ดีเยี่ยม
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%; text-align: center">85%-95%</td>
                        <td class="col-md-2">
                            <input class="form-check-input" type="radio" name="score" value="good"> ดี
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%; text-align: center">75%-85%</td>
                        <td class="col-md-2">
                            <input class="form-check-input" type="radio" name="score" value="fair"> ปานกลาง
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%; text-align: center">65%-75%</td>
                        <td class="col-md-2">
                            <input class="form-check-input" type="radio" name="score" value="poor"> พอใช้
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%; text-align: center">ต่ำกว่า 65%</td>
                        <td class="col-md-2">
                            <input class="form-check-input" type="radio" name="score" value="improve"> ปรับปรุง
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-5">
                <button type="submit" class="btn btn-primary">บันทึก</button>
                <button type="reset" class="btn btn-secondary">ยกเลิก</button>
            </div>
            
        </div>

        <div class="col-md-12">
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th style="width: 50%; text-align: center">หัวข้อการประเมิน</th>
                        <th style="width: 25%; text-align: center">คะแนนเต็ม</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text text-center">ด้านยอดใบเสนอราคา</td>
                        <td>60</td>
                    </tr>
                </tbody>
            </table> <br>
            <h3>กำหนดเกณฑ์</h3>
            <table class="table table-sm table-bordered">
                <tbody>
                    <tr>
                        <td style="width: 25%; text-align: center">95%-100%</td>
                        <td class="col-md-2">
                            <input class="form-check-input" type="radio" name="score" value="excellent" checked>
                            ดีเยี่ยม
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%; text-align: center">85%-95%</td>
                        <td class="col-md-2">
                            <input class="form-check-input" type="radio" name="score" value="good"> ดี
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%; text-align: center">75%-85%</td>
                        <td class="col-md-2">
                            <input class="form-check-input" type="radio" name="score" value="fair"> ปานกลาง
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%; text-align: center">65%-75%</td>
                        <td class="col-md-2">
                            <input class="form-check-input" type="radio" name="score" value="poor"> พอใช้
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%; text-align: center">ต่ำกว่า 65%</td>
                        <td class="col-md-2">
                            <input class="form-check-input" type="radio" name="score" value="improve"> ปรับปรุง
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-5">
                <button type="submit" class="btn btn-primary">บันทึก</button>
                <button type="reset" class="btn btn-secondary">ยกเลิก</button>
            </div>
            
        </div>
        {{-- <div class="">
            <a href="{{ route('evaluation.submitform') }}" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="false">ด้านยอดขาย</a> <br><br>
            <a href="{{ route('evaluation.submitform') }}" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="false">ด้านสินค้า</a> <br><br>
            <a href="{{ route('evaluation.submitform') }}" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="false">ด้านความสัมพันธ์กับลูกค้า</a> <br><br>
            <a href="{{ route('evaluation.submitform') }}" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="false">ด้านยอดใบเสนอราคา</a> <br><br>
        </div> --}}

          
           
       

        <!-- <div class="container">
            <form action="#">
                <button type="submit" class="btn btn-primary" onclick="saveData()">บันทึก</button>
                <button type="submit" class="btn btn-secondary" onclick="cancelData()">ยกเลิก</button>
            </form>
        </div> -->
        
       <!-- <script>
            function saveData() {
                alert("บันทึกข้อมูลเรียบร้อย");
                window.location.href = 'evaluationsubmitform.blade.php';
            }
            function cancelData() {
                alert("ยกเลิกเรียบร้อย");
            }
        </script> -->
    </form>
</div>
@endsection
