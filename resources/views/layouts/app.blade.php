<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>UPCAC</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md  shadow-sm" style="height:55px; background-color: #15A2EA;">
            <div class="container">
                <div>    
                    <img src="1150.png" height="45px" width="55px">
                    <a class="navbar-brand" style="color:whitesmoke">
                        UPCAC
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" style="color:whitesmoke">{{ __('เข้าสู่ระบบ') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"style="color:whitesmoke">{{ __('สมัครสมาชิก') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:whitesmoke">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    @if(Auth::user()->type == 'Driver')
                                    <a class="dropdown-item" href="{{ url("/driver/date") }}">ข้อมูลการเดินทาง</a>
                                    <a class="dropdown-item" href="{{ url("/driver/travel") }}">สร้างฟอร์ม</a>
                                    <a class="dropdown-item" href="{{ url("/driver/licensecar/create") }}">ลงทะเบียนรถ</a>
                                    <a class="dropdown-item" href='{{ url('/inform') }}'>แก้ไขข้อมูลส่วนตัว</a>

                                    @else
                                    <a class="dropdown-item" href="{{ url("/event-up") }}">การเดินทาง</a>
                                    <a class="dropdown-item" href='{{ url('/inform') }}'>แก้ไขข้อมูลส่วนตัว</a>
                                    <a class="dropdown-item" href="{{ url("/inform/travel") }}">ข้อมูลการเดินทาง</a>
                                    @endif

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ออกจากระบบ') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
</body>
<script>
    var side = false;
        function w3_open() {
            side = !side;
            if(side == true){
                document.getElementById("mySidebar").style.display = "block";
            }else{
                w3_close()
            }

        }
        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }
        </script>
</html>
