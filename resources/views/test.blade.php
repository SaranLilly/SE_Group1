@extends('layout')
@section('tiitle', 'แบบประเมินพนักงาน');
@section('content')
    

    <main class="container">
        <section class="row">
            <div class="col-md-12">
                <form action="#">
                    <h1 class="display-7">ผลการประเมินไตรมาสที่ 1</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>หัวข้อการประเมิน</th>
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
