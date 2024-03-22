@extends('layout');
@section('title','ผลการประเมินไตรมาสที่....')
@section('content')
<div class="container">
    <h2>ผลการประเมินไตรมาสที่1</h2>
    <table class="table table-bordered table-striped text text-center">
      <thead>
        <tr>
          <th>ลำดับที่</th>
          <th>หัวข้อการประเมิน</th>
          <th>คะแนนเต็ม</th>
          <th>คะแนน</th>
          <th>เกณฑ์</th>
          <th>ทำได้</th>
          <th>คะแนนที่ได้</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>1</td>
          <td>ยอดขาย</td>
          <td>60</td>
          <td>
            <ul>
                <li>60</li>
                <li>50</li>
                <li>40</li>
                <li>30</li>
                <li>20</li>
            </ul>
          </td>
          <td>
            <ul>
                <li>มากกว่า 100% = ดีเยี่ยม</li>
                <li>95% - 100% = ดี</li>
                <li>85% - 95% = ปานกลาง</li>
                <li>75% - 85% = พอใช้</li>
                <li>ต่ำกว่า 75% = ต้องปรับปรุง</li>
            </ul>
          </td>
          <td>85%</td>
          <td>51</td>
        </tr>

        <tr>
          <td>2</td>
          <td>สินค้า</td>
          <td>20</td>
          <td>
                <li>20</li>
                <li>15</li>
                <li>10</li>
                <li>5</li>
                <li>0</li>
          </td>
          <td>
            <ul>            
                <li>มากกว่า 15 คัน = ดีเยี่ยม</li>
                <li>10 - 15 คัน = ดี</li>
                <li>7 - 10 คัน = ปานกลาง</li>
                <li>3 - 7 คัน = พอใช้</li>
                <li>0 - 3 คัน = ต้องปรับปรุง</li>
              </ul>
          </td>
          <td>10 คัน</td>
          <td>15</td>
        </tr>

        <tr>
          <td>3</td>
          <td>เปอร์เซ็นสำเร็จในการปิดการขาย</td>
          <td>10 </td>
          <td>
            <ul>
                <li>60</li>
                <li>50</li>
                <li>40</li>
                <li>30</li>
                <li>20</li>
            </ul>
          </td>
          <td>
            <ul>
                <li>มากกว่า 100% = ดีเยี่ยม</li>
                <li>95% - 100% = ดี</li>
                <li>85% - 95% = ปานกลาง</li>
                <li>75% - 85% = พอใช้</li>
                <li>ต่ำกว่า 75% = ต้องปรับปรุง</li>
            </ul>
          </td>
          <td>100%</td>
          <td>10</td>
        </tr>

        <tr>
            <td>4</td>
            <td>ความสัมพันธ์กับลูกค้า</td>
            <td>10</td>
            <td>
                <li>10</li>
                <li>5</li>
                <li>0</li>
            </td>
            <td>
              <ul>
                  <li>ดีตั้งแต่3คนขึ้นไป</li>
                  <li>ดีตั้งแต่2คนขึ้นไป</li>
                  <li>ดี1คนหรือไม่ดีเลย</li>
                </ul>
            </td>
            <td>ดี3คน</td>
            <td>10</td>
          </tr>
      </tbody>
    </table>
  </div>


@endsection