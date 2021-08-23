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
   </style>

</head>

<body style="background-color:white; ">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg shadow-sm" style="background-color:white;">
            <div class="container-fluid" >
              <img src="/images/icon.gif" class="img-fluid mr-2" style="height: 2.1em; border-radius:20px" alt="...">
                <a class="navbar-brand" style="color: rgb(8,4,32)" href="#">
                    {{ config('app.name', 'TekFund') }}
                </a>
                <a href="#" class="navbar-brand pl-2" style="color: rgb(8,4,32); font-size:1em">
                  About Us
                </a>
                <a href="#" class="navbar-brand pl-2" style="color: rgb(8,4,32); font-size:1em">
                  <div class="input-group input-group-sm ">
                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                <span class="input-group-text "><i class="fas fa-search"></i></span>
                </div>
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
                                    <a class="nav-link" style="color: rgb(8,4,32)" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: rgb(8,4,32)" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                           <li class="nav-item dropdown">

                                <a id="navbarDropdown" style="color: rgb(8,4,32)" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   {{ Auth::user()->username }}
                                     @if(Auth::user()->avatar)
                                    <img src="{{asset('storage/images/'. Auth::user()->avatar)}}" alt="avatar" style="height: 1.5em;width:1.5em; border-radius:40px;"/>
                                    @endif
                                    <span class="caret" </span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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


        <main style="padding-top: 1.5rem; margin-bottom: 5rem;">
            @yield('content')
        </main>


    </div>
</body>
</html>
