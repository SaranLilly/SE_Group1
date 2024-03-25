@extends('layout')
@section('content')
<div class="container">
    <h2>ผลการประเมินพนักงาน</h2>
    <table class="table table-bordered table-striped text text-center">
      <thead>
        <tr>
          <th>ลำดับที่</th>
          <th>หัวข้อการประเมิน</th>
          <th>คะแนนเต็ม</th>
          <th>คะแนนที่ได้</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>1</td>
          <td>ยอดขาย</td>
          <td>12</td>
          <td>12</td>
        </tr>

        <tr>
          <td>2</td>
          <td>สินค้า</td>
          <td>8</td>
          <td>6</td>
        </tr>

        <tr>
          <td>3</td>
          <td>เปอร์เซ็นสำเร็จในการปิดการขาย</td>
          <td>4 </td>
          <td>4</td>
        </tr>

        <tr>
            <td>4</td>
            <td>ความสัมพันธ์กับลูกค้า</td>
            <td>4</td>
            <td>4</td>
          </tr>
      </tbody>
    </table>
  </div>
@endsection