<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<style>

 body{
     background: #fbf8f6 !important;
 }
 
 
 .container .icon {
    margin-top: 0px;
    padding-top: 10px;
}

.container .icon img {
    height: 90px;
}

.sign button:hover{
    background-color: rgb(50, 18, 156);
    color: white;
}
.sign-box {
    margin-top: 10px;
    padding: 30px;
    border-style: solid;
    border-width: 1.9px;
    border-radius: 2%;
    border-color: rgb(212, 216, 221);
}

.container .show-button:hover {
    cursor: pointer;
    background-color: rgb(50, 18, 156);
}

.search-bar, .about-css {
    display: none !important;
}
.login-ft{
    display: none !important;
}
.main-footer {
    display: none;
}
</style>

@extends('layouts.app')

@section('content')


        <div class="container mt-2" >
            
            <div class="row">
              <div class="col-sm-3">

              </div>
              <div class="col-sm icon" style="border: 0.2px solid white; background:white; border-radius: 5px; box-shadow: 0 0.5rem 1.5rem 0 rgb(0 0 0 / 10%)">
              <div>
              <center><h3 style="text-decoration-style: solid; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Sign-In</h3></center>
            </div>
             <div class=" sign-box" style="border: none;">



               <form method="POST" action="{{ route('login') }}">
                                  @csrf

                                  <div class="form-group row">
                                      <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                      <div class="col-md-6">
                                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                          @error('email')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>



                                  <div class="form-group row">
                                      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                      <div class="col-md-6">
                                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                          @error('password')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>



                                  <div class="form-group row">
                                      <div class="col-md-6 offset-md-4">
                                          <div class="form-check">
                                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                              <label class="form-check-label" for="remember">
                                                  {{ __('Remember Me') }}
                                              </label>
                                          </div>
                                      </div>
                                  </div>



                                  <div class="form-group row mb-0">
                                      <div class="col-md-8 offset-md-4">
                                          <button type="submit" class="btn btn" style="background-color: rgb(50, 18, 156); color:white">
                                              {{ __('Login') }}
                                          </button>

                                          @if (Route::has('password.request'))
                                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                                  {{ __('Forgot Your Password?') }}
                                              </a>
                                          @endif
                                      </div>
                                  </div>

                              </form>

             <center>
             <p><small> By continuing, you agree to Tekfund's  <a href="#" style="text-decoration: none;">Conditions of Use</a> and <a href="#" style="text-decoration: none;">Privacy Notice</a>.</small></p>
              <p><small><i class="fas fa-caret-right"></i> <a href="#" style="text-decoration: none;">Need help?</a></small></p>
             </center>
            </div>
            <div class="mt-3" style="width: 100%; height: 20px; border-bottom: 1px solid rgb(212, 216, 221); text-align: center">
            <span style="font-size:small; color:rgb(135, 136, 138); background-color: white; padding: 0 5px;">
              New to TekFund?
            </span>
          </div>
          <form action="{{ route('register') }}">
          <div class="d-grid gap-2 mt-3">
          <button class="waves-effect waves-light btn" type="submit" name="action"> Create your TekFund account</button>
        </div>
         </form>
          </div>
              <div class="col-sm-3">

              </div>
            </div>
          <div class="row mt-4" >
          <div class="col-sm"></div>
          <div class="col-sm">


          <div>
          </div>
          </div>
          <div class="col-sm"></div>
          <!-- <div>
          <hr>
          <center><p><small><a href="#" style="text-decoration: none; padding-right:5%; font: size 0.5em;">Condition of Use</a>  <a href="#" style="text-decoration: none; padding-right:5%; font: size 0.5em;">Privacy Notice</a>  <a href="#" style="text-decoration: none; font: size 0.5em;"> Help</a></small></p></center>
          <center><p><small>© 2021, TekFund.com, Inc. or its affiliates</small></p></center>
          </div> -->
          </div>

          </div>
@endsection
