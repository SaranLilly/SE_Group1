@extends('layout')
@section('title', 'แก้ไขหัวข้อการประเมิน')
@section('content')


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

    /* เพิ่มข้อมูล CSS สำหรับ input */
    input {
        padding: 8px;
        border-radius: 10px;
        border: 1px solid #ccc;
        outline: none;
    }
</style>

<div class="edit">


    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif



    <h1 style="font-weight: 800">แก้ไขหัวข้อการประเมิน</h1>
    <form method="POST" action="{{ route('updatecriteriakpiHR', ['criteriakpi' => $criteriakpi->crID]) }}">

        @csrf
        @method('put')
        <div class="form-label">

            <label>ชื่อหัวข้อการประเมิน</label>
            <input type="text" name="title" placeholder="title"value="{{ $criteriakpi->title }}">

        </div>
        <div>
            <input type="submit" value="บันทึก">
        </div>
    </form>
</div>
@endsection
