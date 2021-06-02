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
    <script src="https://kit.fontawesome.com/d78432a841.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg shadow-sm" style="background-color: rgb(20, 7, 63)">
            <div class="container">
                <a class="navbar-brand" style="color: white" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
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
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                           <li class="nav-item dropdown">
                           <a id="navbarDropdown" style="color: white;" class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >{{ __('Start Campaign') }}</a>
                           </li>
                           <li class="nav-item dropdown">

                                <a id="navbarDropdown" style="color: white" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   {{ Auth::user()->name }}
                                    <!-- if(Auth::user()->avatar)-->
                                    <img src="{{asset('storage/images/'. Auth::user()->avatar)}}" alt="avatar" style="height: 1.5em;width:1.5em; border-radius:40px;"/>
                                   <!-- endif-->
                                    <span class="caret" </span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">My Campaigns</a>
                                    <a class="dropdown-item" href="#">My Contributions</a>
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="#">Settings</a>
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

        <main style="padding-top: 1.5rem; margin-bottom: 20rem;">
            @yield('content')
        </main>


    </div>



<!-- Footer -->
<footer class=" page-footer font-small " style="background-color: rgb(44, 20, 124); " position: absolute;>

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

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
      <a href="#!" style="color: white"> fucktekfund@gmail.com</a>
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


</body>
</html>
