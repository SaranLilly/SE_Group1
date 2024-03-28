
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-dark fixed-top">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-start text-bg-light" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <!-- <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">team leader Team A</h5> -->

                    <a class="navbar-brand text-dark" href="#">
                        <img src="https://i.pinimg.com/564x/8b/16/7a/8b167af653c2399dd93b952a48740620.jpg"
                            alt="Logo" width="30px" height="30px" class="d-inline-block align-text-top">
                        {{$employee_log1}}
                       {{--  @foreach ($employee_log1 as $item)
                            <h4>{{$item->firstName }} {{$item->lastName}}</h4>
                            @if ($item->positionID == 1)
                                <h5>ผู้จัดการ</h5>
                            @elseif($item->positionID == 2)
                                <h5>หัวหน้าทีม</h5>
                            @elseif($item->positionID == 3)
                                <h5>พนักงาน</h5>
                            @elseif($item->positionID == 4)
                                <h5>พนักงานฝ่ายบุคคล</h5> 
                            @endif
                        @endforeach --}}
                    </a>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>

                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                ข้อมูลองค์กร
                            </a>
                            <ul class="dropdown-menu dropdown-menu-light border-0">
                                <li><a class="dropdown-item text-dark"
                                        href="{{ route('empteamhead.index') }}">ข้อมูลพนักงาน</a></li>
                                <li><a class="dropdown-item text-dark" href="#">ข้อมูลพนักงานในทีม</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                การประเมินพนักงาน
                            </a>
                            <ul class="dropdown-menu dropdown-menu-light border-0">
                                <li><a class="dropdown-item text-dark"
                                        href="{{ route('criterion.index') }}">เกณฑ์การประเมิน</a></li>
                                <li><a class="dropdown-item text-dark"
                                        href="{{ route('evaluation.create') }}">แบบประเมิน</a></li>

                                <li><a class="dropdown-item text-dark" href="{{ route('result.index') }}">ผลการประเมิน</a>
                                </li>
                            </ul>

                        </li>
                    </ul>
                </div>
            </div>
            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                       ออกจากระบบ
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>


        </div>
    </nav>
    <div class="container py-5 my-5">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
