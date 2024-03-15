@extends('layout')
@section('tiitle', 'แบบประเมินพนักงาน');
@section('content')
    
<h1 class="display-4">แบบประเมินพนักงาน</h1>
    <main class="container">
        <section class="row">
            <div class="col-md-12">
                <form action="#">
                    <div class="mb-3">
                        <label for="employeeName" class="form-label">ชื่อพนักงาน</label>
                        <input type="text" class="form-control" id="employeeName" placeholder="ชื่อ-นามสกุล">
                    </div>
                    <div class="mb-3">
                        <label for="department" class="form-label">แผนก</label>
                        <select class="form-select" id="department">
                            <option value="">เลือกแผนก</option>
                            <option value="1">IT</option>
                            <option value="2">Marketing</option>
                            <option value="3">Sales</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="position" class="form-label">ตำแหน่ง</label>
                        <input type="text" class="form-control" id="position" placeholder="ตำแหน่ง">
                    </div>

                    <h2 class="mt-5">หัวข้อการประเมิน</h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>หัวข้อ</th>
                                <th>คะแนนเต็ม</th>
                                <th>คะแนนที่ได้</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ยอดขาย</td>
                                <td>60</td>
                                <td>
                                    <input type="number" class="form-control" min="0" max="60">
                                </td>
                            </tr>
                            <tr>
                                <td>ความรับผิดชอบ</td>
                                <td>50</td>
                                <td>
                                    <input type="number" class="form-control" min="0" max="50">
                                </td>
                            </tr>
                            <tr>
                                <td>การทำงานเป็นทีม</td>
                                <td>40</td>
                                <td>
                                    <input type="number" class="form-control" min="0" max="40">
                                </td>
                            </tr>
                            <tr>
                                <td>ทักษะการสื่อสาร</td>
                                <td>30</td>
                                <td>
                                    <input type="number" class="form-control" min="0" max="30">
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="mt-5">
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <button type="reset" class="btn btn-secondary">ยกเลิก</button>
                    </div>
                </form>
            </div>
        </section>
    </main>


@endsection
