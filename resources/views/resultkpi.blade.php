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
          <th>ทำได้</th>
          <th>คะแนนที่ได้</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>1</td>
          <td>ยอดขาย</td>
          <td>60</td>
          <td>85%</td>
          <td>51</td>
        </tr>

        <tr>
          <td>2</td>
          <td>สินค้า</td>
          <td>20</td>
          <td>75%</td>
          <td>15</td>
        </tr>

        <tr>
          <td>3</td>
          <td>เปอร์เซ็นสำเร็จในการปิดการขาย</td>
          <td>10 </td>
          <td>100%</td>
          <td>10</td>
        </tr>

        <tr>
            <td>4</td>
            <td>ความสัมพันธ์กับลูกค้า</td>
            <td>10</td>
            <td>100%</td>
            <td>10</td>
          </tr>
      </tbody>
    </table>
    <h2>ผลการประเมินพนักงาน</h2>
  </div>
  <table class="table table-bordered table-striped text text-center">
    <thead>
      <tr>
        <th>คะเเนนเต็ม</th>
        <th>คะเเนนที่ได้</th>
      </tr>
      <tbody>
        <tr>
          <td>100</td>
          <td>86</td>
        </tr> 


@endsection