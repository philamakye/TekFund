

@extends('layouts.app')

@section('content')
<form action="profile" method="GET" style="display: inline" >
<button class="btn btn-primary" style="margin-left: 15px; background-color: white; color: black;" type="submit"><i class="fa fa-eye" aria-hidden="false"></i>
View Profile <span class="badge bg-secondary"></span>
</button>
</form>
<form action="editprofile" method="GET" style="display: inline">
<button type="submit" class="btn btn-primary" style="background-color: rgb(44, 20, 124); color: white;" ><i class="fa fa-pencil" aria-hidden="true"></i>
Edit profile & Settings<span class="badge bg-secondary"></span>
</button>
</form>

<h2 style="margin-left:30px; font-family: cooper; margin-top:10px; font-size: 25px;">MANASSEH WEST</h2>
<h6 style="margin-left: 40px; color: grey;"><i class="fa fa-map-marker" aria-hidden="true"></i>  Kumasi, Ghana</h6>

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

  <div class="card" style="margin-left:70px; width: 90%;    background-color: rgb(175, 250, 242);">

   <h3 style="margin-top: 20px; margin-left: 20px;"> Update Your Email Address</h3>
<hr style="margin: 10px;">
  <div class="card-body">

    <h5 class="card-title">heyitzwest@gmal.com         <a href="#" style="margin-left: 100px; color: red;">Edit</a> </h5>
    <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->

  </div>
  </div>

</div>
<br>
<br>

  <div class="tab-pane fade show active" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">

  <div class="card" style="margin-left:70px; width: 90%;    background-color: rgb(175, 250, 242);">

   <h3 style="margin-top: 20px; margin-left: 20px;"> Update Your Password</h3>
<hr style="margin: 10px;">
  <div class="card-body">

   <div class="form-group">
    <label for="exampleInputPassword1">Current Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password Confirmation</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
<br>
    <button type="submit" class="btn btn-primary mb-2" style="background-color:rgb(44, 20, 124)">SAVE</button>
  </div>
  </div>
  </div>
<br>
<br>

  <div class="tab-pane fade show active" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">

  <div class="card" style="margin-left:70px; width: 90%;    background-color: rgb(175, 250, 242);">

   <h3 style="margin-top: 20px; margin-left: 20px;"> Deactivate Your Account</h3>
<hr style="margin: 10px;">
  <div class="card-body">

    <h5 class="card-title" style="color: rgb(71, 69, 69);">By deactivating your account, you will no longer be able to log in, manage any contributions, and will lose
any draft campaigns. Please review our <a href="#" style="color: red;">Privacy Policy</a> for how we store data.</h5>

<h5 class="card-title" style="color: rgb(71, 69, 69);"> If you need to change your subscription settings, visit your email preferences. If you would like changes
made to your account because of privacy laws enacted in your country or region, please submit a request.</h5>
    <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
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
