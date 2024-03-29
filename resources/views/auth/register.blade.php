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
.reg-ft{
    display: none !important;
}
.main-footer {
    display: none;
}

</style>
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
      <div class="col-sm-3">

      </div>
      <div class="col-sm icon" style="border: 0.2px solid white; background:white; border-radius: 5px; box-shadow: 0 0.5rem 1.5rem 0 rgb(0 0 0 / 10%)">
      <div>
      <center><h3 style="text-decoration-style: solid; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Sign Up</h3></center>
    </div>
     <div class=" sign-box" style="border: none;">

       <form method="POST" action="{{ route('register') }}">
                          @csrf
                          <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('name') is-invalid @enderror" name="username"  required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                  @error('name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"  required autocomplete="name" autofocus>

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                              <div class="col-md-6">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                              </div>
                          </div>

                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn" style="background-color: rgb(44, 20, 124); color:white">
                                      {{ __('Register') }}
                                  </button>
                              </div>
                          </div>
                      </form>
      <center>
     <p><small> By continuing, you agree to TekFund's  <a href="" style="text-decoration: none;">Conditions of Use</a> and <a href="" style="text-decoration: none;">Privacy Notice</a>.</small></p>
      <p><small><i class="fas fa-caret-right"></i> <a href="#" style="text-decoration: none;">Need help?</a></small></p>
      </center>
    </div>



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
