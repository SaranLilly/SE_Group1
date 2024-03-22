@extends('layout')
@section('tiitle', 'แบบประเมินพนักงาน');
@section('content')
    <div class="container">
        <h1>แบบประเมินพนักงาน</h1><br>
        <main class="container">
            <section class="row">
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
            </section>
        </main>
    </div>
    </section>
@endsection
