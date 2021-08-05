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


<h2 style="margin-left:30px; font-family: cooper; margin-top:10px; font-size: 25px;text-transform: uppercase;">{{ Auth::user()->name}}</h2>
@if (Auth::user()->city)
    <h6 style="margin-left: 40px; color: grey; text-transform:capitalize"><i class="fa fa-map-marker" aria-hidden="true"></i>  {{Auth::user()->city}}, Ghana</h6>
    @elseif (empty(Auth::user()->city))
<h6 style="margin-left: 40px; color: grey;"><i class="fa fa-map-marker" aria-hidden="true"></i>  Ghana</h6>
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
      class="nav-link"
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
      class="nav-link active"
      id="ex1-tab-3"
      data-mdb-toggle="tab"
      href="{{route('Email')}}"
      role="tab"
      aria-controls="ex1-tabs-3"
      aria-selected="false"
      >Emails</a
    >
  </li>
</ul>
<!-- Tabs navs -->
  <div class="tab-pane fade show active" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">

  <div class="card basic-model" style="margin-left:70px; width: 90%;    background-color: rgb(175, 250, 242);">

   <h3 style="margin-top: 20px; margin-left: 20px;">Stay In The Loop</h3>
<hr style="margin: 10px;">
  <div class="card-body">

<div class="row">
<div class="mb-3" style="width: 25%; margin-left:5px;">
  <h4>Campaigns for you</h4>
</div>
<div class="mb-3" style="width: 70%; margin-left:5px;">
  <h4 style="color: grey; ">Recommended Campaigns, exclusive discounts and eciting announcements</h4>
  <h4><div class="form-check" style="color: grey; margin-left: 10px;">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1" style="margin-top: 5px;">
    A few times per week
  </label>
</div></h4>
<h4 style="color: grey; margin-left: 10px;"><div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault1" style="margin-top: 5px;">
    Once a week or so
  </label>
</div></h4>
<h4 style="color: grey; margin-left: 10px;"><div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2" style="margin-top: 5px;">
    Never
  </label>
</div></h4>
</div></div>

<hr style="margin: 10px;">

    <br>
    <div class="row">
<div class="mb-3" style="width: 25%; margin-left:5px;">
  <h4>Campaigns you support</h4>
</div>
<div class="mb-3" style="width: 70%; margin-left:5px; color:grey;">
  <h4><div class="form-check" style="margin-left: 7px;">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault" style="margin-top: 5px;">
    Updates from campaigns you have supported
  </label></div></h4>
</div>
    </div>


<hr style="margin: 10px;">

<br>
<div class="row">
<div class="mb-3" style="width: 25%; margin-left:5px;">
  <h4>Occasional Emails</h4>
</div>
<div class="mb-3" style="width: 70%; margin-left:5px; color:grey;">
  <h4><div class="form-check"style="margin-left:7px;">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault" style="margin-top: 5px">
    Surveys to help us improve
  </label></div></h4>
</div>
  </div>
  </div>
  </div>
  </div>

</div>
<h4><div class="form-check"style="margin-left:80px;">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault" style="margin-top: 5px">
    <b>Stop receiving all marketing communications</b>
  </label></div></h4>
  <h4 style="margin-left: 97px; font-style:italic;">You will still receive criitical updates about your account, your campaign or any contributions</h4>
  <button type="submit" class="btn btn-primary mb-2" style="background-color:rgb(44, 20, 124); margin-top: 10px; margin-left: 97px;">SAVE SUBSCRIPTION SETTINGS</button>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

@endsection
