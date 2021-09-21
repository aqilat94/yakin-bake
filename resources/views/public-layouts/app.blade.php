<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Yakin Bakes</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700;800;900&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;0,800;0,900;1,900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<style>

    .rounded-card {
        border-radius: 15px;
    }

    .rounded-btn {
        border-radius: 10px;
    }

    .footer {
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: #AF275F;
        color: white;
        text-align: center;
    }

    .font {
        font-family: 'Poppins', sans-serif;
    }

</style>

<body class="bg-white">
    <div id="app" class="bg-white">
        <nav class="navbar navbar-expand-md navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color: #AF275F; font-family: poppins; font-weight: bold;">
                    Yakin Bakes
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="color: #414141; font-family: poppins;">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="">Survey</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Election Result</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">Candidates</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="">DUN</a>
                                <a class="dropdown-item" href="">Parliament</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">About Us</a>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: #DC8700; font-family: poppins; font-weight: bold;" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('home') }}" >
                                        {{ __('Dashboard') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content-public')
        </main>
    </div>

    <footer class="container-fluid footer text-center">
        <h5 class="m-0 p-5" style="color: white; font-family: poppins;">Yakin Bakes</h5>
        {{-- <div class="row m-0 font" style="color: white">
            <div class="col-md-6">
               <div class="row">
                  <div class="col-md-6 ">
                     <div class="logo-part">
                        <img src="https://i.ibb.co/sHZz13b/logo.png" class="w-50 logo-footer" >
                        <p>7637 Laurel Dr. King Of Prussia, PA 19406</p>
                        <p>Use this tool as test data for an automated system or find your next pen</p>
                     </div>
                  </div>
                  <div class="col-md-6 px-4">
                     <h6> About Company</h6>
                     <p>But horizontal lines can only be a full pixel high.</p>
                     <a href="#" class="btn-footer"> More Info </a><br>
                     <a href="#" class="btn-footer"> Contact Us</a>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="row">
                  <div class="col-md-6 px-4">
                     <h6> Help us</h6>
                     <div class="row ">
                        <div class="col-md-6">
                           <ul>
                              <li> <a href="#"> Home</a> </li>
                              <li> <a href="#"> About</a> </li>
                              <li> <a href="#"> Service</a> </li>
                              <li> <a href="#"> Team</a> </li>
                              <li> <a href="#"> Help</a> </li>
                              <li> <a href="#"> Contact</a> </li>
                           </ul>
                        </div>
                        <div class="col-md-6 px-4">
                           <ul>
                              <li> <a href="#"> Cab Faciliy</a> </li>
                              <li> <a href="#"> Fax</a> </li>
                              <li> <a href="#"> Terms</a> </li>
                              <li> <a href="#"> Policy</a> </li>
                              <li> <a href="#"> Refunds</a> </li>
                              <li> <a href="#"> Paypal</a> </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 ">
                     <h6> Newsletter</h6>
                     <div class="social">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                     </div>
                     <form class="form-footer my-3">
                        <input type="text"  placeholder="search here...." name="search">
                        <input type="button" value="Go" >
                     </form>
                     <p>That's technology limitation of LCD monitors</p>
                  </div>
               </div>
            </div>
         </div> --}}
    </footer>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>

</body>
</html>
