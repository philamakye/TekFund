<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/images/icon.gif"  type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d78432a841.js" crossorigin="anonymous"></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <style>
       .nopadding{
           padding: 0;
       }
       .nomargin{
           margin: 0;
       }


.avatar {
  vertical-align: middle;
  width: 30px;
  height: 30px;
  border-radius: 50%;
}
.please:hover {
color: red;
}
main{
    overflow:hidden;
    margin-top:1%;
}
   </style>

</head>

<body style="background-color:white; ">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg shadow-sm" style="background-color: white;position:fixed;z-index:99; width:100%;">
            <div class="container-fluid">
              {{-- <img src="/images/icon.gif" class="img-fluid mr-2" style="height: 2.1em; border-radius:20px" alt="..."> --}}
                <a class="navbar-brand" style="color: rgb(8, 4,32);font-family: cursive,sans-serif;font-weight:bold;color:rgb(153, 0, 255); font-size:25px;" href="{{url('/') }}">
                 <img src="/storage/final_logo.png" class="logo" style="height:2.1em; width:100%" alt="...">
                    {{-- Tek<span style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; color:rgb(73, 217, 243)">FUND</span> --}}
                </a>

                {{-- <a href="" class="navbar-brand pl-2 about-css" style="color: rgb(8, 4,32) !important; font-size:1em">
                  About Us
                </a> --}}
                {{-- <a href="#" class="navbar-brand pl-2" style="color: rgb(8, 4,32) !important; font-size:1em">
                  <div class="input-group input-group-sm search-bar">
                <input type="text" class="form-control " placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                <span class="input-group-text "><i class="fas fa-search" style = "color:rgb(8, 4,32)"></i></span>
                </div>
                </a> --}}

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
                        <li class="nav-item dropdown">
                           <a id="navbarDropdown" style="color: rgb(8, 4,32); margin-top:1.9px; margin-right:7px" class="nav-link please" href="{{ route('start campaign') }}" role="button"  aria-haspopup="true" aria-expanded="false" >{{ __('Start Campaign') }}</a>
                           </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item login-ft">
                                    <a class="nav-link" style="color: rgb(8, 4,32)hite" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item reg-ft">
                                    <a class="nav-link" style="color: rgb(8, 4,32)" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif

                        @else

                           <li class="nav-item dropdown">

                                <a id="navbarDropdown" style="color: rgb(8, 4,32); font-size:16px" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   {{ Auth::user()->username }}
                                     @if(Auth::user()->avatar)
                                    <img src="{{asset('storage/images/'. Auth::user()->avatar)}}" alt="avatar" class="avatar"/>
                                    @else
                                    <img src="{{asset('storage/avatar.png')}}" alt="avatar"class="avatar" />

                                    @endif
                                    <span class="caret" </span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('campaigns.index')}}">My Campaigns</a>
                                    <a class="dropdown-item" href="{{route('Contributions')}}">My Contributions</a>
                                    <a class="dropdown-item" href="{{route('Profile')}}">Profile</a>
                                    <a class="dropdown-item" href="{{route('settings')}}">Settings</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
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
 <br><br>

        <main style="padding-top: 2rem; margin-bottom: 5rem;">
            @yield('content')
        </main>


    </div>



<!-- Footer -->
<footer class="page-footer font-small " style="background-color: rgb(44, 20, 124); " position: absolute;>

  <!-- Footer Links -->
  <div class="container text-center text-md-left main-footer" >

    <!-- Grid row -->
    <div class="row ">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color: turquoise"><i class="far fa-compass"></i> Address</h5>

        <ul class="list-unstyled" >
          <li class="pb-4">
          <div class="container">
  <div class="row">
    <div class="col-1">
      <a href="#!" style="color: white"><i class="fas fa-map-marker-alt "></i></a>
    </div>
    <div class="col">
      <a href="#!" style="color: white">KNUST Mango St 203, Ayeduase Kumasi, Ghana</a>
    </div>

  </div>
</div>
        </li>
          <li class="pb-4">

            <div class="container">
  <div class="row">
    <div class="col-1">
      <a href="#!" style="color: white"><i class="fas fa-phone"></i></a>
    </div>
    <div class="col">
      <a href="#!" style="color: white"> +233 542845512 / +233 246783345</a>
    </div>

  </div>
</div>
        </li>

          <li class="pb-4">
<div class="container">
  <div class="row">
    <div class="col-1">
      <a href="#!" style="color: white"><i class="fas fa-envelope-open-text"></i></a>
    </div>
    <div class="col">
      <a href="#!" style="color: white"> tekfund@gmail.com</a>
    </div>

  </div>
</div>
        </li>
          <li>
            <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Enter your email address" aria-label="Recipient's username" aria-describedby="button-addon2">
  <button class="btn btn-outline-info" type="button" id="button-addon2"><i class="fas fa-paper-plane"></i></button>
</div>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color: turquoise"><i class="fas fa-newspaper"></i>  Latest News</h5>

        <ul class="list-unstyled">
          <li class="pb-4">
            <a style="color: white; font-size:smaller" >Do you wanna know what's happening on TekFund??
                 Well look sharp and find out yourself</a>
          </li>
           <li class="pb-4">
            <a style="color: white; font-size:smaller" >Do you wanna know what's happening on TekFund??
                 Well look sharp and find out yourself</a>
          </li>
            <li class="pb-4">
            <a style="color: white; font-size:smaller" >Do you wanna know what's happening on TekFund??
                 Well look sharp and find out yourself</a>
          </li>

        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color: turquoise"><i class="fas fa-info-circle"></i>  Information</h5>

        <ul class="list-unstyled">
          <li class="pb-4">
          <div class="container">
  <div class="row">
    <div class="col-1">
      <a href="#!" style="color: white"><i class="fas fa-info"></i></a>
    </div>
    <div class="col">
      <a href="#!" style="color: white">About Us</a>
    </div>

  </div>
</div>
        </li>
          <li class="pb-4">

            <div class="container">
  <div class="row">
    <div class="col-1">
      <a href="#!" style="color: white"><i class="fas fa-blog"></i></a>
    </div>
    <div class="col">
      <a href="#!" style="color: white"> Blog</a>
    </div>

  </div>
</div>
        </li>

          <li class="pb-4">
<div class="container">
  <div class="row">
    <div class="col-1">
      <a href="#!" style="color: white"><i class="fas fa-key"></i></a>
    </div>
    <div class="col">
      <a href="#!" style="color: white"> Trust and Safety</a>
    </div>

  </div>
</div>
        </li>
        <li class="pb-4">
<div class="container">
  <div class="row">
    <div class="col-1">
      <a href="#!" style="color: white"><i class="fas fa-hands-helping"></i></a>
    </div>
    <div class="col">
      <a href="#!" style="color: white"> Help and Support</a>
    </div>

  </div>
</div>
        </li>


        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color: turquoise"><i class="fab fa-instagram-square"></i>  Social Media</h5>

        <ul class="list-unstyled" >
          <li class="pb-4">
          <div class="container">
  <div class="row">
    <div class="col-1">
      <a href="#!" style="color: white"><i class="fab fa-twitter"></i></a>
    </div>
    <div class="col">
      <a href="#!" style="color: white">Twitter</a>
    </div>

  </div>
</div>
        </li>
          <li class="pb-4">

            <div class="container">
  <div class="row">
    <div class="col-1">
      <a href="#!" style="color: white"><i class="fab fa-facebook-f"></i></a>
    </div>
    <div class="col">
      <a href="#!" style="color: white"> Facebook</a>
    </div>

  </div>
</div>
        </li>

          <li class="pb-4">
<div class="container">
  <div class="row">
    <div class="col-1">
      <a href="#!" style="color: white"><i class="fab fa-linkedin-in"></i></a>
    </div>
    <div class="col">
      <a href="#!" style="color: white"> LinkedIn
    </div>

  </div>
</div>
        </li>
        <li class="pb-4">
<div class="container">
  <div class="row">
    <div class="col-1">
      <a href="#!" style="color: white"><i class="fab fa-instagram"></i></a>
    </div>
    <div class="col">
      <a href="#!" style="color: white"> Instagram</a>
    </div>

  </div>
</div>
        </li>
        <li class="pb-4">
<div class="container">
  <div class="row">
    <div class="col-1">
      <a href="#!" style="color: white"><i class="fab fa-whatsapp"></i></a>
    </div>
    <div class="col">
      <a href="#!" style="color: white"> Whatsapp</a>
    </div>

  </div>
</div>
        </li>


        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="container">
  <div class="row">
    <div class="col-1">

    </div>
    <div class="col">
      <hr style="background-color: turquoise">
    </div>
    <div class="col-1">

    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-1">

    </div>
    <div class="col">
      <div class="row">
      <center>
        <a href="#" class="px-4">Terms of Use</a>
        <a href="#" class="px-4">Privacy Policy</a>
        <a href="#" class="px-4">Cookie Policy</a>
        <a href="#" class="px-4">Do not sell my personal information</a>
        <a href="#" class="px-4">Accessibility</a>
      </center>
      </div>
    </div>
    <div class="col-1">

    </div>
  </div>
</div>

  <div class="footer-copyright text-center py-3" style="color: white">© 2020 TekFund:
    <a href="https://mdbootstrap.com/" style="color: white"> All Rights Reserved</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
<script>
    import * as mdb from 'mdb-ui-kit'; // lib
import { Input } from 'mdb-ui-kit'; // module
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
