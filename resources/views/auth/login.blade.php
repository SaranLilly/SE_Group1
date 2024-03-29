@extends('layouts.app')

@section('content')
    <style>
        body {
            background-color: #f8f9fa;
            /* สีพื้นหลังของหน้าเว็บ */
        }

        .card {
            border: none;
            /* ลบเส้นขอบของการ์ด */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* เพิ่มเงาให้การ์ด */
        }

        .card-header {
            background-color: #007bff;
            /* สีพื้นหลังส่วนหัวของการ์ด */
            color: #fff;
            /* สีข้อความในส่วนหัวของการ์ด */
            border-bottom: none;
            /* ลบเส้นขอบด้านล่างของส่วนหัวของการ์ด */
        }

        .card-body {
            padding: 2rem;
            /* ระยะห่างภายในของการ์ด */
        }

        .form-label {
            font-weight: bold;
            /* ตัวหนาข้อความฟอร์ม */
        }

        .btn-primary {
            background-color: #007bff;
            /* สีปุ่ม Primary */
            border: none;
            /* ลบเส้นขอบของปุ่ม */
        }

        .btn-primary:hover {
            background-color: #0056b3;
            /* สีเมื่อโฮเวอร์ปุ่ม */
        }

        .image-container {
            text-align: center;
            /* จัดวางภาพกึ่งกลาง */
        }

        .image-container img {
            max-width: 100%;
            /* ป้องกันภาพเกินขอบเขตของคอลัมน์ */
            height: auto;
            /* ปรับขนาดภาพอัตโนมัติ */
            border-radius: 10px; /* เพิ่ม border radius */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* เพิ่มเงาให้รูป */
        }
    </style>

    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-6">
                <div class="card">
                    {{-- <div class="card-header text-center">{{ __('Login') }}</div> --}}

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            @if (Session::has('fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">
                            </div>
{{-- 
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                            </div> --}}

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-container">
                    <img src="{{ asset('images/toyota.png') }}" alt="Toyota Logo">
                </div>
            </div>
        </div>
    </div>
@endsection
