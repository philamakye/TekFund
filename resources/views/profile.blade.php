<style>
    body{
    background: #fbf8f6 !important;
  }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

@extends('layouts.app')
@section('content')
<div class="container-fluid" style="padding-left: 20px; padding-right:20px">
<form action="profile" method="GET" style="display: inline" >
<button class="btn btn-primary" style="margin-left: 15px;color: white;" type="submit">
VIEW PROFILE <span class="badge bg-secondary"></span>
</button>
</form>
<form action="editprofile" method="GET" style="display: inline" >
<button class="btn btn-primary" style="background-color: white; color: black;" type="submit">
EDIT PROFILE & SETTINGS<span class="badge bg-secondary"></span>
</button>
</form>

<h2 style="margin-left:30px; font-family: cooper; margin-top:10px; font-size: 25px;text-transform: uppercase;">{{ Auth::user()->name}}</h2>
@if (Auth::user()->city)
    <h6 style="margin-left: 40px; color: grey; text-transform:capitalize"><i class="fa fa-map-marker" aria-hidden="true"></i>  {{Auth::user()->city}}, {{Auth::user()->country}}</h6>
    @elseif (Auth::user()->country)
<h6 style="margin-left: 40px; color: grey;"><i class="fa fa-map-marker" aria-hidden="true"></i>{{Auth::user()->city}}, {{Auth::user()->country}}</h6>
@endif
<!-- Tabs navs -->
<div class="row">
<ul class="nav nav-pills mb-3" id="ex1" role="tablist">
  <div class="col-4  text-center" >
  <li class="nav-item" role="presentation">
    <a
      class="nav-link px-1 active"
      id="ex1-tab-1"

      data-mdb-toggle="tab"
      href="{{route('Profile')}}"
      role="tab"
      aria-controls="ex1-tabs-1"
      aria-selected="true"
      ><b>Profile</b></a>
  </li>
  </div>
  <div class="col-4  text-center" >
  <li class="nav-item" role="presentation">
    <a
      class="nav-link px-1"
      style="background-color: whitesmoke"
      id="ex1-tab-2"
      data-mdb-toggle="tab"
      href="{{route('campaigns.index')}}"
      role="tab"
      aria-controls="ex1-tabs-2"
      aria-selected="false"
      ><b>Campaigns</b></a>
  </li>
  </div>
  <div class="col-4  text-center" >
  <li class="nav-item" role="presentation">
    <a
      class="nav-link px-1"
      id="ex1-tab-3"
      style="background-color: whitesmoke"
      data-mdb-toggle="tab"
      href="{{route('Contributions')}}"
      role="tab"
      aria-controls="ex1-tabs-3"
      aria-selected="false"
      ><b>Contributions</b></a
    >
  </li>
  </div>
</ul>
</div>
<!-- Tabs navs -->
<center>
        @if(Auth::user()->pro_image)
                <img src="{{asset('storage/images/'. Auth::user()->pro_image)}}" alt="avatar" style="border-radius:250px; height: 250px; width: 250px;"/>
        @else
        <img src="https://i.pinimg.com/474x/65/25/a0/6525a08f1df98a2e3a545fe2ace4be47.jpg" alt="avatar" style=" border-radius:250px; height: 230px; width: 230px;"/></center>
        @endif</center>
         <center><h3 style="margin-top: 10px;font-family: cooper; margin-top:50px;color:rgb(90, 86, 86); font-size: 25px;">About Me</h3></center>
                  <br>

        <center><h5 style= "max-width: 1200px;">{{ Auth::user()->about_me }} </h5></center>
</center>
    <hr style="margin:15px;">
    <br>
    <br>
 @if(Auth::user()->avatar)
            <img src="{{asset('storage/images/'. Auth::user()->avatar)}}" alt="avatar" style="border-radius:200px; height: 70px; width: 70px; margin-left:100px;"/>
        @endif
        @if (empty(Auth::user()->avatar))
        <img src="https://i.pinimg.com/474x/65/25/a0/6525a08f1df98a2e3a545fe2ace4be47.jpg" alt="avatar" style=" border-radius:150px; height: 70px; margin-left:100px;"/></center>
        @endif
         <h2 style="margin-left:10px; font-family: cooper; font-size: 25px; display: inline;text-transform: uppercase;">{{ Auth::user()->name}}</h2>
    <br>
    <br>
    <hr style="margin-right: 1070px; margin-left: 100px;">
    <br>
    <br>
    <h3 style="margin-left: 150px; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">{{Auth::user()->campaign_num}} Campaigns<i class="fa fa-question-circle" aria-hidden="true"style="margin-left:65px;"></i></h3>
    <br>
    <h3 style="margin-left: 150px; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">{{Auth::user()->comments_num}} Comments<i class="fa fa-question-circle" aria-hidden="true"style="margin-left:70px;"></i></h3>
    <br>
    <h3 style="margin-left: 150px; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">{{Auth::user()->contribution_num}} Contributions<i class="fa fa-question-circle" aria-hidden="true"style="margin-left:35px;"></i></h3>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</div>
@endsection
