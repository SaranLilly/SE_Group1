{{-- อันเก่า --}}
@extends('layout')
@section('title', 'ข้อมูลพนักงาน')
@section('content')
    <h2 class="text pb-4">ข้อมูลพนักงาน</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">รหัสพนักงาน</th>
                <th scope="col">ชื่อ</th>
                <th scope="col">นามสกุล</th>
                <th scope="col">เบอร์โทร</th>
                <th scope="col">ตำแหน่ง</th>
                <th scope="col">ข้อมูลพื้นฐาน</th>
                <th scope="col">ผลการทำงาน</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Q001</td>
                <td>ปวัญญา</td>
                <td>สุวรรณวงศ์</td>
                <td>0898616547</td>
                <td>พนักงานฝ่ายขาย</td>
                <td><a href="#">click</a></td>
                <td><a href="#">click</a></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Q002</td>
                <td>กิตติพงษ์</td>
                <td>พุกเฮง</td>
                <td>0987654321</td>
                <td>พนักงานฝ่ายขาย</td>
                <td><a href="#">click</a></td>
                <td><a href="#">click</a></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Q003</td>
                <td>ธยานี</td>
                <td>เจริญวัฒนา</td>
                <td>0981256792</td>
                <td>พนักงานฝ่ายขาย</td>
                <td><a href="#">click</a></td>
                <td><a href="#">click</a></td>
            </tr>
        </tbody>
    </table>
@endsection
