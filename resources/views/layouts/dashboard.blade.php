<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
</head>
<body dir="rtl">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-dark  shadow-sm " >
            <div class="container">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    <span style="font-family:Cairo;"> لوحة التحكم </span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                 
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                   
                    

                    </ul>
                    
                    @if(Auth::guest())
                    <ul class="navbar-nav ms-auto p-2 ">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item text-white p-2">
                            <a class="nav-link text-white" href="{{ route('welcome') }}">الرئيسية</a>
                        </li>
                      
                             <li class="nav-item">
                                
                                    <i class="bi bi-cart"></i>
                                
                             </li>
                            @if (Route::has('login'))
                                <li class="nav-item text-white p-2">
                                    <a class="nav-link text-white" href="{{ route('login') }}">تسجيل الدخول</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item p-2">
                                    <a class="nav-link text-white" href="{{ route('register') }}">التسجيل</a>
                                </li>
                            @endif
                        
                        @endguest
                    </ul>
                    @else
                    <ul class="navbar-nav">
                        <li class="nav-item">
                         <a class="nav-link active text-white" aria-current="page" href="{{route('logout')}}">تسجيل خروج</a>
                        </li>
                        </ul>
                    @endif
                </div>
                
            </div>
        </nav>

        <main >
            <div class="row">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item text-white">
                                <a href="{{route('controlpanel')}}" class="nav-link align-middle px-0">
                                    <i class="bi bi-copy text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">المنتجات</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('itemgroup')}}" class="nav-link px-0 align-middle">
                                    <i class="bi bi-grid-fill text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">اضافة مجموعة</span> </a>
                               
                            </li>
                            <li>
                                <a href="{{route('pageadditem')}}" class="nav-link px-0 align-middle">
                                    <i class="bi bi-file-fill text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">اضافة عنصر</span></a>
                            </li>
                            
                        </ul>
                        <hr>
                        <div class="dropdown pb-4">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                <span class="d-none d-sm-inline mx-1">loser</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
               <div class="col-sm-10">
                @yield('content')

               </div>
            </div>
        </main>
    </div>
</body>
</html>
