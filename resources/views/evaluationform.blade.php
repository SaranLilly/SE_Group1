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

        <div class="">
            <a href="{{ route('evaluation.submitform') }}" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="false">ด้านยอดขาย</a> <br><br>
            <a href="{{ route('evaluation.submitform') }}" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="false">ด้านสินค้า</a> <br><br>
            <a href="{{ route('evaluation.submitform') }}" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="false">ด้านความสัมพันธ์กับลูกค้า</a> <br><br>
            <a href="{{ route('evaluation.submitform') }}" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="false">ด้านยอดใบเสนอราคา</a> <br><br>
        </div>

          
           
       

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
