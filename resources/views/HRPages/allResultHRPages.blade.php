@extends('HRPages/layoutHR')
@section('title')
    เเบบประเมินพนักงาน
@endsection
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Display Image inside button Element in HTML</title>
<style>
    .image-btn{
        background: none;
        border: none;
        padding: 0;
    }
    .image-btn img{
        display: block; /* to remove extra space below image */
    }
</style>
</head>
<body>
    <button type="button" class="image-btn">
        <img src="Pictures/application-form.png" width="250">
    </button>
</body>
</html>


<style>
  .edit {
      margin: auto;
      width: 50%;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  }

  form {
      margin-top: 20px;
  }

  .form-label {
      display: flex;
      flex-direction: column;
      margin-bottom: 15px;
      border-radius: 8px;
  }

  input[type="submit"] {
      width: 100%;
      padding: 10px;
      border: none;
      background-color: #1d8551;
      color: white;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
  }

  input[type="submit"]:hover {
      background-color: #2bc678;
  }

  /* เพิ่มข้อมูล CSS สำหรับ label */
  label {
      font-weight: bold;
      margin-bottom: 5px;
  }

  /* เพิ่มข้อมูล CSS สำหรับ select */
  select {
      padding: 8px;
      border-radius: 10px;
      border: 1px solid #ccc;
      outline: none;
  }

</style>
    <h2>เเบบประเมินพนักงาน</h2>
   
    <table class="table table-striped table-bordered border-white">
        <thead class=" table-info  table-bordered border-white">


            <tr class="edit">
                <th scope="col">รหัสพนักงาน</th>
                <th style="justify-content: center">ชื่อ</th>
                <th style="justify-content: center">นามสกุล</th>
                <th scope="col">ตำเเหน่ง</th>
                <th scope="col">ผลการประเมิน</th>
            </tr>
        </thead>

        {{-- @foreach ($employees as $employee)
            <tr>
                
                <td>{{ $employee->userName }}</td>
                <td>{{ $employee->firstName }}</td>
                <td>{{ $employee->lastName }}</td>
                <td>{{ $employee->positionName }}</td>
            </tr>
        @endforeach
    </table>
    </div>
@endsection --}}




<tbody>
          <tr>
            <th scope="row">Q001</th>
            <td>พลอย</td>
            <td>หิว</td>
            <td>นักงานฝ่ายขาย</td>
            <td>
              <button class="btn btn-primary" type="submit">Button</button></td>
          </tr>
          <tr>
            <th scope="row">Q001</th>
            <td>Jacob</td>
            <td>หิว</td>
            <td>ผู้จัดการ</td>
            <td><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAArCAYAAADR0WDhAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAKqSURBVGhD7ZhLaBNBGMf/k80mJNLUVCvaFnoQIaKetYdiT3qpgqio0FMPCop4qEJ7ETxVUMEHCgriRVHxIIIXvagg4vOiFHJRKbTxlTa2aZvXZtf5dlfzMG7cZhcnuD+YzGNnv5n/zPd9IWEaB02Oz6ybGk+EKLgm4tWbj9i26xy6Y0Po33kWL19/MJ84jyuBPZvOYGDwCt6OJaCpCpjPj/VrV+LGtQNojYTNWc7hyk2k01kkPqW4gKLep/rzlxnMzeX0vtO4IkKW/ZCkStPUp3E3sHSn85ce4tmL97ylgWataI/g+PB2tPP6J6qq4fLVR3j8NA7G+4wx5HIK3o1NIJ9XjEmcQMCPDeu6EAz6uS3DXl9vDPsH+yoEJ5NpnBi9h6/fZrktGmHo2bgaRw5u0Z/XwlJEd+woN2QsQPXyZSHcvXUYXZ1t+hiR+j6PzVtP8jgokN+Yo7ypGa5UDmOS2eJwe5EWGU8ejCC6tBQnE5PT2LH3ApJTGW7DsEf1ePy03q5FHXeiEyv+KrIs6SddjqKokP1SxTwqtaieQ+8ViyXhBNmndcrn0T6saDgm6CKz2YKegewWes/CEf6aOu40ZLYMd+pY1Yo71w+hsyNqjgILmTxu3n6O+UyOe2/lLVnB7xhLQkHs27MJ4VDAHAUmEynsHrjIs9sMF1i6pfH4GbP1Ow2LcJrFiGjYnUTAlggKOkqVbkL2q5NHPWy5U1s0jJFj/TzVtjgSkNXQ5pNTaYyeuo/p1ILzMUHQIpLE4PP5XBOhqipPu5TaK+07FhNkWFE0/k1cRKGgOl7ILtm3e0CLCGxawO1ij/8vO4mKJ0IUPBGi4IkQBU+EKHgiRMETIQqeCFGwFmHzB7tr1NmHpYjenjX8818LYeY+/ozlHwXNghfYouCJEAPgB9pYhLxNTBH7AAAAAElFTkSuQmCC" alt="Logo"width="30px"/></td>
          </tr>
          <tr>
            <th scope="row">Q001</th>
            <td>Jacob</td>
            <td>หิว</td>
            <td>พนักงานฝ่ายขาย</td>
            <td><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAArCAYAAADR0WDhAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAKqSURBVGhD7ZhLaBNBGMf/k80mJNLUVCvaFnoQIaKetYdiT3qpgqio0FMPCop4qEJ7ETxVUMEHCgriRVHxIIIXvagg4vOiFHJRKbTxlTa2aZvXZtf5dlfzMG7cZhcnuD+YzGNnv5n/zPd9IWEaB02Oz6ybGk+EKLgm4tWbj9i26xy6Y0Po33kWL19/MJ84jyuBPZvOYGDwCt6OJaCpCpjPj/VrV+LGtQNojYTNWc7hyk2k01kkPqW4gKLep/rzlxnMzeX0vtO4IkKW/ZCkStPUp3E3sHSn85ce4tmL97ylgWataI/g+PB2tPP6J6qq4fLVR3j8NA7G+4wx5HIK3o1NIJ9XjEmcQMCPDeu6EAz6uS3DXl9vDPsH+yoEJ5NpnBi9h6/fZrktGmHo2bgaRw5u0Z/XwlJEd+woN2QsQPXyZSHcvXUYXZ1t+hiR+j6PzVtP8jgokN+Yo7ypGa5UDmOS2eJwe5EWGU8ejCC6tBQnE5PT2LH3ApJTGW7DsEf1ePy03q5FHXeiEyv+KrIs6SddjqKokP1SxTwqtaieQ+8ViyXhBNmndcrn0T6saDgm6CKz2YKegewWes/CEf6aOu40ZLYMd+pY1Yo71w+hsyNqjgILmTxu3n6O+UyOe2/lLVnB7xhLQkHs27MJ4VDAHAUmEynsHrjIs9sMF1i6pfH4GbP1Ow2LcJrFiGjYnUTAlggKOkqVbkL2q5NHPWy5U1s0jJFj/TzVtjgSkNXQ5pNTaYyeuo/p1ILzMUHQIpLE4PP5XBOhqipPu5TaK+07FhNkWFE0/k1cRKGgOl7ILtm3e0CLCGxawO1ij/8vO4mKJ0IUPBGi4IkQBU+EKHgiRMETIQqeCFGwFmHzB7tr1NmHpYjenjX8818LYeY+/ozlHwXNghfYouCJEAPgB9pYhLxNTBH7AAAAAElFTkSuQmCC" alt="Logo"width="30px"/></td>
          </tr>
          <tr>
            <th scope="row">Q001</th>
            <td>Jacob</td>
            <td>หิว</td>
            <td>หัวหน้าฝ่าย</td>
            <td><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAArCAYAAADR0WDhAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAKqSURBVGhD7ZhLaBNBGMf/k80mJNLUVCvaFnoQIaKetYdiT3qpgqio0FMPCop4qEJ7ETxVUMEHCgriRVHxIIIXvagg4vOiFHJRKbTxlTa2aZvXZtf5dlfzMG7cZhcnuD+YzGNnv5n/zPd9IWEaB02Oz6ybGk+EKLgm4tWbj9i26xy6Y0Po33kWL19/MJ84jyuBPZvOYGDwCt6OJaCpCpjPj/VrV+LGtQNojYTNWc7hyk2k01kkPqW4gKLep/rzlxnMzeX0vtO4IkKW/ZCkStPUp3E3sHSn85ce4tmL97ylgWataI/g+PB2tPP6J6qq4fLVR3j8NA7G+4wx5HIK3o1NIJ9XjEmcQMCPDeu6EAz6uS3DXl9vDPsH+yoEJ5NpnBi9h6/fZrktGmHo2bgaRw5u0Z/XwlJEd+woN2QsQPXyZSHcvXUYXZ1t+hiR+j6PzVtP8jgokN+Yo7ypGa5UDmOS2eJwe5EWGU8ejCC6tBQnE5PT2LH3ApJTGW7DsEf1ePy03q5FHXeiEyv+KrIs6SddjqKokP1SxTwqtaieQ+8ViyXhBNmndcrn0T6saDgm6CKz2YKegewWes/CEf6aOu40ZLYMd+pY1Yo71w+hsyNqjgILmTxu3n6O+UyOe2/lLVnB7xhLQkHs27MJ4VDAHAUmEynsHrjIs9sMF1i6pfH4GbP1Ow2LcJrFiGjYnUTAlggKOkqVbkL2q5NHPWy5U1s0jJFj/TzVtjgSkNXQ5pNTaYyeuo/p1ILzMUHQIpLE4PP5XBOhqipPu5TaK+07FhNkWFE0/k1cRKGgOl7ILtm3e0CLCGxawO1ij/8vO4mKJ0IUPBGi4IkQBU+EKHgiRMETIQqeCFGwFmHzB7tr1NmHpYjenjX8818LYeY+/ozlHwXNghfYouCJEAPgB9pYhLxNTBH7AAAAAElFTkSuQmCC" alt="Logo"width="30px"/></td>
          </tr>
          <tr>
            <th scope="row">Q001</th>
            <td>Jacob</td>
            <td>หิว</td>
            <td>หัวหน้าฝ่าย</td>
            <td><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAArCAYAAADR0WDhAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAKqSURBVGhD7ZhLaBNBGMf/k80mJNLUVCvaFnoQIaKetYdiT3qpgqio0FMPCop4qEJ7ETxVUMEHCgriRVHxIIIXvagg4vOiFHJRKbTxlTa2aZvXZtf5dlfzMG7cZhcnuD+YzGNnv5n/zPd9IWEaB02Oz6ybGk+EKLgm4tWbj9i26xy6Y0Po33kWL19/MJ84jyuBPZvOYGDwCt6OJaCpCpjPj/VrV+LGtQNojYTNWc7hyk2k01kkPqW4gKLep/rzlxnMzeX0vtO4IkKW/ZCkStPUp3E3sHSn85ce4tmL97ylgWataI/g+PB2tPP6J6qq4fLVR3j8NA7G+4wx5HIK3o1NIJ9XjEmcQMCPDeu6EAz6uS3DXl9vDPsH+yoEJ5NpnBi9h6/fZrktGmHo2bgaRw5u0Z/XwlJEd+woN2QsQPXyZSHcvXUYXZ1t+hiR+j6PzVtP8jgokN+Yo7ypGa5UDmOS2eJwe5EWGU8ejCC6tBQnE5PT2LH3ApJTGW7DsEf1ePy03q5FHXeiEyv+KrIs6SddjqKokP1SxTwqtaieQ+8ViyXhBNmndcrn0T6saDgm6CKz2YKegewWes/CEf6aOu40ZLYMd+pY1Yo71w+hsyNqjgILmTxu3n6O+UyOe2/lLVnB7xhLQkHs27MJ4VDAHAUmEynsHrjIs9sMF1i6pfH4GbP1Ow2LcJrFiGjYnUTAlggKOkqVbkL2q5NHPWy5U1s0jJFj/TzVtjgSkNXQ5pNTaYyeuo/p1ILzMUHQIpLE4PP5XBOhqipPu5TaK+07FhNkWFE0/k1cRKGgOl7ILtm3e0CLCGxawO1ij/8vO4mKJ0IUPBGi4IkQBU+EKHgiRMETIQqeCFGwFmHzB7tr1NmHpYjenjX8818LYeY+/ozlHwXNghfYouCJEAPgB9pYhLxNTBH7AAAAAElFTkSuQmCC" alt="Logo"width="30px"/></td>
          </tr>
          <tr>
            <th scope="row">Q001</th>
            <td>Jacob</td>
            <td>หิว</td>
            <td>หัวหน้าฝ่าย</td>
            <td><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAArCAYAAADR0WDhAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAKqSURBVGhD7ZhLaBNBGMf/k80mJNLUVCvaFnoQIaKetYdiT3qpgqio0FMPCop4qEJ7ETxVUMEHCgriRVHxIIIXvagg4vOiFHJRKbTxlTa2aZvXZtf5dlfzMG7cZhcnuD+YzGNnv5n/zPd9IWEaB02Oz6ybGk+EKLgm4tWbj9i26xy6Y0Po33kWL19/MJ84jyuBPZvOYGDwCt6OJaCpCpjPj/VrV+LGtQNojYTNWc7hyk2k01kkPqW4gKLep/rzlxnMzeX0vtO4IkKW/ZCkStPUp3E3sHSn85ce4tmL97ylgWataI/g+PB2tPP6J6qq4fLVR3j8NA7G+4wx5HIK3o1NIJ9XjEmcQMCPDeu6EAz6uS3DXl9vDPsH+yoEJ5NpnBi9h6/fZrktGmHo2bgaRw5u0Z/XwlJEd+woN2QsQPXyZSHcvXUYXZ1t+hiR+j6PzVtP8jgokN+Yo7ypGa5UDmOS2eJwe5EWGU8ejCC6tBQnE5PT2LH3ApJTGW7DsEf1ePy03q5FHXeiEyv+KrIs6SddjqKokP1SxTwqtaieQ+8ViyXhBNmndcrn0T6saDgm6CKz2YKegewWes/CEf6aOu40ZLYMd+pY1Yo71w+hsyNqjgILmTxu3n6O+UyOe2/lLVnB7xhLQkHs27MJ4VDAHAUmEynsHrjIs9sMF1i6pfH4GbP1Ow2LcJrFiGjYnUTAlggKOkqVbkL2q5NHPWy5U1s0jJFj/TzVtjgSkNXQ5pNTaYyeuo/p1ILzMUHQIpLE4PP5XBOhqipPu5TaK+07FhNkWFE0/k1cRKGgOl7ILtm3e0CLCGxawO1ij/8vO4mKJ0IUPBGi4IkQBU+EKHgiRMETIQqeCFGwFmHzB7tr1NmHpYjenjX8818LYeY+/ozlHwXNghfYouCJEAPgB9pYhLxNTBH7AAAAAElFTkSuQmCC" alt="Logo"width="30px"/></td>
          </tr>
          <tr>
            <th scope="row">Q001</th>
            <td>Jacob</td>
            <td>หิว</td>
            <td>หัวหน้าฝ่าย</td>
            <td><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAArCAYAAADR0WDhAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAKqSURBVGhD7ZhLaBNBGMf/k80mJNLUVCvaFnoQIaKetYdiT3qpgqio0FMPCop4qEJ7ETxVUMEHCgriRVHxIIIXvagg4vOiFHJRKbTxlTa2aZvXZtf5dlfzMG7cZhcnuD+YzGNnv5n/zPd9IWEaB02Oz6ybGk+EKLgm4tWbj9i26xy6Y0Po33kWL19/MJ84jyuBPZvOYGDwCt6OJaCpCpjPj/VrV+LGtQNojYTNWc7hyk2k01kkPqW4gKLep/rzlxnMzeX0vtO4IkKW/ZCkStPUp3E3sHSn85ce4tmL97ylgWataI/g+PB2tPP6J6qq4fLVR3j8NA7G+4wx5HIK3o1NIJ9XjEmcQMCPDeu6EAz6uS3DXl9vDPsH+yoEJ5NpnBi9h6/fZrktGmHo2bgaRw5u0Z/XwlJEd+woN2QsQPXyZSHcvXUYXZ1t+hiR+j6PzVtP8jgokN+Yo7ypGa5UDmOS2eJwe5EWGU8ejCC6tBQnE5PT2LH3ApJTGW7DsEf1ePy03q5FHXeiEyv+KrIs6SddjqKokP1SxTwqtaieQ+8ViyXhBNmndcrn0T6saDgm6CKz2YKegewWes/CEf6aOu40ZLYMd+pY1Yo71w+hsyNqjgILmTxu3n6O+UyOe2/lLVnB7xhLQkHs27MJ4VDAHAUmEynsHrjIs9sMF1i6pfH4GbP1Ow2LcJrFiGjYnUTAlggKOkqVbkL2q5NHPWy5U1s0jJFj/TzVtjgSkNXQ5pNTaYyeuo/p1ILzMUHQIpLE4PP5XBOhqipPu5TaK+07FhNkWFE0/k1cRKGgOl7ILtm3e0CLCGxawO1ij/8vO4mKJ0IUPBGi4IkQBU+EKHgiRMETIQqeCFGwFmHzB7tr1NmHpYjenjX8818LYeY+/ozlHwXNghfYouCJEAPgB9pYhLxNTBH7AAAAAElFTkSuQmCC" alt="Logo"width="30px"/></td>
          </tr>
          <tr>
            <th scope="row">Q001</th>
            <td>Jacob</td>
            <td>หิว</td>
            <td>หัวหน้าฝ่าย</td>
            <td><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAArCAYAAADR0WDhAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAKqSURBVGhD7ZhLaBNBGMf/k80mJNLUVCvaFnoQIaKetYdiT3qpgqio0FMPCop4qEJ7ETxVUMEHCgriRVHxIIIXvagg4vOiFHJRKbTxlTa2aZvXZtf5dlfzMG7cZhcnuD+YzGNnv5n/zPd9IWEaB02Oz6ybGk+EKLgm4tWbj9i26xy6Y0Po33kWL19/MJ84jyuBPZvOYGDwCt6OJaCpCpjPj/VrV+LGtQNojYTNWc7hyk2k01kkPqW4gKLep/rzlxnMzeX0vtO4IkKW/ZCkStPUp3E3sHSn85ce4tmL97ylgWataI/g+PB2tPP6J6qq4fLVR3j8NA7G+4wx5HIK3o1NIJ9XjEmcQMCPDeu6EAz6uS3DXl9vDPsH+yoEJ5NpnBi9h6/fZrktGmHo2bgaRw5u0Z/XwlJEd+woN2QsQPXyZSHcvXUYXZ1t+hiR+j6PzVtP8jgokN+Yo7ypGa5UDmOS2eJwe5EWGU8ejCC6tBQnE5PT2LH3ApJTGW7DsEf1ePy03q5FHXeiEyv+KrIs6SddjqKokP1SxTwqtaieQ+8ViyXhBNmndcrn0T6saDgm6CKz2YKegewWes/CEf6aOu40ZLYMd+pY1Yo71w+hsyNqjgILmTxu3n6O+UyOe2/lLVnB7xhLQkHs27MJ4VDAHAUmEynsHrjIs9sMF1i6pfH4GbP1Ow2LcJrFiGjYnUTAlggKOkqVbkL2q5NHPWy5U1s0jJFj/TzVtjgSkNXQ5pNTaYyeuo/p1ILzMUHQIpLE4PP5XBOhqipPu5TaK+07FhNkWFE0/k1cRKGgOl7ILtm3e0CLCGxawO1ij/8vO4mKJ0IUPBGi4IkQBU+EKHgiRMETIQqeCFGwFmHzB7tr1NmHpYjenjX8818LYeY+/ozlHwXNghfYouCJEAPgB9pYhLxNTBH7AAAAAElFTkSuQmCC" alt="Logo"width="30px"/></td>
          </tr>
          <tr>
            <th scope="row">Q001</th>
            <td>Jacob</td>
            <td>หิว</td>
            <td>หัวหน้าฝ่าย</td>
            <td><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAArCAYAAADR0WDhAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAKqSURBVGhD7ZhLaBNBGMf/k80mJNLUVCvaFnoQIaKetYdiT3qpgqio0FMPCop4qEJ7ETxVUMEHCgriRVHxIIIXvagg4vOiFHJRKbTxlTa2aZvXZtf5dlfzMG7cZhcnuD+YzGNnv5n/zPd9IWEaB02Oz6ybGk+EKLgm4tWbj9i26xy6Y0Po33kWL19/MJ84jyuBPZvOYGDwCt6OJaCpCpjPj/VrV+LGtQNojYTNWc7hyk2k01kkPqW4gKLep/rzlxnMzeX0vtO4IkKW/ZCkStPUp3E3sHSn85ce4tmL97ylgWataI/g+PB2tPP6J6qq4fLVR3j8NA7G+4wx5HIK3o1NIJ9XjEmcQMCPDeu6EAz6uS3DXl9vDPsH+yoEJ5NpnBi9h6/fZrktGmHo2bgaRw5u0Z/XwlJEd+woN2QsQPXyZSHcvXUYXZ1t+hiR+j6PzVtP8jgokN+Yo7ypGa5UDmOS2eJwe5EWGU8ejCC6tBQnE5PT2LH3ApJTGW7DsEf1ePy03q5FHXeiEyv+KrIs6SddjqKokP1SxTwqtaieQ+8ViyXhBNmndcrn0T6saDgm6CKz2YKegewWes/CEf6aOu40ZLYMd+pY1Yo71w+hsyNqjgILmTxu3n6O+UyOe2/lLVnB7xhLQkHs27MJ4VDAHAUmEynsHrjIs9sMF1i6pfH4GbP1Ow2LcJrFiGjYnUTAlggKOkqVbkL2q5NHPWy5U1s0jJFj/TzVtjgSkNXQ5pNTaYyeuo/p1ILzMUHQIpLE4PP5XBOhqipPu5TaK+07FhNkWFE0/k1cRKGgOl7ILtm3e0CLCGxawO1ij/8vO4mKJ0IUPBGi4IkQBU+EKHgiRMETIQqeCFGwFmHzB7tr1NmHpYjenjX8818LYeY+/ozlHwXNghfYouCJEAPgB9pYhLxNTBH7AAAAAElFTkSuQmCC" alt="Logo"width="30px"/></td>
          </tr>

        </tbody>
</table>
@endsection 
