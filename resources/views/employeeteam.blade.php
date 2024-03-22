@extends('layout')
@section('title', 'ข้อมูลพนักงานในทีม')
@section('content')
    <h2 class="text pb-4">ข้อมูลพนักงานในทีม</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ชื่อทีม</th>
                <th scope="col">รหัสพนักงาน</th>
                <th scope="col">ชื่อ</th>
                <th scope="col">นามสกุล</th>
                <th scope="col">ตำแหน่ง</th>
                <th scope="col">เบอร์โทร</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">ทีม 1</th>
                <td>Q001</td>
                <td>พัฒนพงษ์ </td>
                <td>รักษาทรัพย์</td>
                <td>หัวหน้าฝ่ายขาย</td>
                <td>082-6218596</td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>Q002</td>
                <td>ณัฐวรา</td>
                <td>มั่นคง</td>
                <td>พนักงานฝ่ายขาย</td>
                <td>081-2546398</td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>Q003</td>
                <td>ปิติภัทร</td>
                <td>ธาดาวรวงศ์ </td>
                <td>หนักงานฝ่ายขาย </td>
                <td>086-4589632</td>
            </tr>
            <tr>
                <th scope="row">ทีม 2</th>
                <td>Q004</td>
                <td>นีรา</td>
                <td>นิธิวรสกุล</td>
                <td>หัวหน้าฝ่ายขาย</td>
                <td>086-5974521</td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>Q005</td>
                <td>ลักษ์วิสา</td>
                <td>อุดมภักดิ์</td>
                <td>พนักงานฝ่ายขาย</td>
                <td>089-6523148</td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>Q006</td>
                <td>ชานนท์</td>
                <td>ศิริไล</td>
                <td>พนักงานฝ่ายขาย</td>
                <td>081-52369874</td>
            </tr>
            <tr>
                <th scope="row">ทีม 3</th>
                <td>Q007</td>
                <td>เพชรชรัชต์</td>
                <td>พงศ์พัฒนา</td>
                <td>หัวหน้าฝ่ายขาย</td>
                <td>083-62154789</td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>Q008</td>
                <td>ปัถย์</td>
                <td>สุวรรณวงศ์</td>
                <td>พนักงานฝ่ายขาย</td>
                <td>083-62154789</td>
            </tr>
             


        </tbody>
    </table>
@endsection
