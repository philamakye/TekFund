

@extends('layouts.app')
@section('content')
<form action="profile" method="GET" style="display: inline" >
<button class="btn btn-primary" style="margin-left: 15px;background-color: rgb(44, 20, 124); color: white;" type="submit"><i class="fa fa-eye" aria-hidden="false"></i>
VIEW PROFILE <span class="badge bg-secondary"></span>
</button>
</form>
<form action="editprofile" method="GET" style="display: inline" >
<button class="btn btn-primary" style="background-color: white; color: black;" type="submit"><i class="fa fa-pencil" aria-hidden="true"></i>
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
      class="nav-link active"
      id="ex1-tab-1"
      data-mdb-toggle="tab"
      href="{{route('Profile')}}"
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
      href="{{route('My Campaigns')}}"
      role="tab"
      aria-controls="ex1-tabs-2"
      aria-selected="false"
      >Campaigns</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex1-tab-3"
      data-mdb-toggle="tab"
      href="{{route('Contributions')}}"
      role="tab"
      aria-controls="ex1-tabs-3"
      aria-selected="false"
      >Contributions</a
    >
  </li>
</ul>
<!-- Tabs navs -->
<center>
        @if(Auth::user()->pro_image)
                <img src="{{asset('storage/images/'. Auth::user()->pro_image)}}" alt="avatar" style="border-radius:250px; height: 250px; width: 250px;"/>
        @else
        <img src="https://i.pinimg.com/474x/65/25/a0/6525a08f1df98a2e3a545fe2ace4be47.jpg" alt="avatar" style=" border-radius:250px; height: 230px; width: 230px;"/></center>
        @endif</center>
         <center><h3 style="margin-top: 10px;font-family: cooper; margin-top:50px;color:rgb(90, 86, 86); font-size: 25px;">About Me</h3></center>
                  <br>

        <center><h5>This is the part I want to show all the cool things the user is going to write about himself. You feel me???? </h5></center>
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
@endsection
