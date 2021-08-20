<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<style>
  body{
    background: #fbf8f6 !important;
  }
  .basic-model{
  background: #fff !important;
}
.search-bar, .about-css {
    display: none !important;
}
</style>

@extends('layouts.app')

@section('content')
<form action="profile" method="GET" style="display: inline" >
<button class="btn btn-primary" style="margin-left: 15px; background-color: white; color: black;" type="submit"><i class="fa fa-eye" aria-hidden="false"></i>
VIEW PROFILE <span class="badge bg-secondary"></span>
</button>
</form>
<form action="editprofile" method="GET" style="display: inline">
<button type="submit" class="btn btn-primary" style="background-color: rgb(44, 20, 124); color: white;" ><i class="fa fa-pencil" aria-hidden="true"></i>
EDIT PROFILE & SETTINGS<span class="badge bg-secondary"></span>
</button>
</form>

<h2 style="margin-left:30px; font-family: cooper; margin-top:10px; font-size: 25px; text-transform: uppercase;">{{ Auth::user()->name}}</h2>
@if (Auth::user()->city)
    <h6 style="margin-left: 40px; color: grey; text-transform:capitalize"><i class="fa fa-map-marker" aria-hidden="true"></i>  {{Auth::user()->city}}, {{Auth::user()->country}}</h6>
    @elseif (Auth::user()->country)
<h6 style="margin-left: 40px; color: grey;"><i class="fa fa-map-marker" aria-hidden="true"></i>{{Auth::user()->city}}, {{Auth::user()->country}}</h6>
@endif
<!-- Tabs navs -->
<ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex1-tab-1"
      data-mdb-toggle="tab"
      href="{{route('profile-2')}}"
      role="tab"
      aria-controls="ex1-tabs-1"
      aria-selected="true"
      >Profile</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link active"
      id="ex1-tab-2"
      data-mdb-toggle="tab"
      href="{{route('settings')}}"
      role="tab"
      aria-controls="ex1-tabs-2"
      aria-selected="false"
      >Settings</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex1-tab-3"
      data-mdb-toggle="tab"
      href="{{route('Email') }}"
      role="tab"
      aria-controls="ex1-tabs-3"
      aria-selected="false"
      >Emails</a
    >
  </li>
</ul>
<!-- Tabs navs -->

<!-- Tabs content -->

  <div
    class="tab-pane fade show active"
    id="ex1-tabs-1"
    role="tabpanel"
    aria-labelledby="ex1-tab-1"
  >
  </div>

  <div class="tab-pane fade show active" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">

  <div class="card basic-model" style="margin-left:70px; width: 90%;    background-color: rgb(175, 250, 242);">

   <h3 style="margin-top: 20px; margin-left: 20px;"> Update Your Email Address</h3>
<hr style="margin: 10px;">
  <div class="card-body">

    <h5 class="card-title">{{Auth::user()->email  }}      <a href="{{route('Email')}}" style="margin-left: 100px; color: red;"></a>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Edit
</button><div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Email Address</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email Address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ex: tekfund@gmail.com">
</div>
      </div>
      <div class="mb-3" style="padding: 15px;">
    <label for="exampleInputPassword1">Current Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Current Password">
    <br>
    <a href="{{ route('password.request') }}"><small> Forgot Your  Password?</small></a>

  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> </h5>
    <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->

  </div>
  </div>

</div>
<br>
<br>

  <div class="tab-pane fade show active" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">

  <div class="card basic-model" style="margin-left:70px; width: 90%;    background-color: rgb(175, 250, 242);">

   <h3 style="margin-top: 20px; margin-left: 20px;"> Update Your Password</h3>
<hr style="margin: 10px;">
  <div class="card-body">
<div class="form-group">
    <label for="">Current Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter current Password">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter New password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password Confirmation</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm New Password">
<br>
    <button type="submit" class="btn btn-primary mb-2" style="background-color:rgb(44, 20, 124)">SAVE</button>
  </div>
  </div>
  </div>
<br>
<br>

  <div class="tab-pane fade show active" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">

  <div class="card basic-model" style="margin-left:70px; width: 90%;    background-color: rgb(175, 250, 242);">

   <h3 style="margin-top: 20px; margin-left: 20px;"> Deactivate Your Account</h3>
<hr style="margin: 10px;">
  <div class="card-body">

    <h7 class="card-title" style="color: rgb(71, 69, 69);">By deactivating your account, you will no longer be able to log in, manage any contributions, and will lose
any draft campaigns. Please review our <a href="#" style="color: red;">Privacy Policy</a> for how we store data.</h7>

<h7 class="card-title" style="color: rgb(71, 69, 69);"> If you need to change your subscription settings, visit your email preferences. If you would like changes
made to your account because of privacy laws enacted in your country or region, please submit a request.</h7>
    <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
<br>
<br>
<button type="submit" class="btn btn-primary mb-2" style="background-color:rgb(44, 20, 124)">DEACTIVATE YOUR ACCOUNT</button>
  </div>
  </div>

</div>

</div>
  <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
    Tab 3 content
  </div>
</div>
<!-- Tabs content -->
<br>
<br>
<br>
<br>

@endsection
