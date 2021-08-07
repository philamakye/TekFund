@extends('layouts.app')
@section('content')
<form action="profile" method="GET" style="display: inline" >
<button class="btn btn-primary" style="margin-left: 15px;background-color: rgb(44, 20, 124); color: white;" type="submit"><i class="fa fa-eye" aria-hidden="false"></i>
VIEW PROFILE <span class="badge bg-secondary"></span>
</button>
</form>
<form action="editprofile" method="GET" style="display: inline" >
<button class="btn btn-primary" style="background-color: rgb(255, 255, 255); color: black;" type="submit"><i class="fa fa-pencil" aria-hidden="true"></i>
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
      href="{{route('Profile')}}"
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
<br>
<br>
<h3 style="margin-left: 15px; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Campaigns I'm On<i aria-hidden="true"></i></h3>
<hr style="margin:15px;">
<br>

<div class="mx-3 px-2 py-2" style="border: 1px dashed rgb(88, 86, 86)">
        <div class="row">
          <div class="col-3">
            <img src="/images/test.svg" class="img-fluid" style="height:15em" alt="...">
          </div>
          <div class="col">
            <h4><b>KNUST Student innovation to end Ghana's waste management challenges</b></h4>
            <p style="font-weight: bold; font-size:large">By: <a style="color: rgb(40, 245, 211)">West</a></p>
            <p class="lead">Too much waste in this country. Time for a change</p>
          </div>
          <div class="col-2">
            <button onclick="document.getElementById('drop-btn-1').style.display='block'; document.getElementById('down-tog-1').style.display='none';document.getElementById('up-tog-1').style.display='inline'"> Actions    <i class="fas fa-chevron-down" id="down-tog-1"></i><i class="fab fa-artstation" style="display: none" id="up-tog-1"></i></button>
            <button style="display: none; padding-left:22px; padding-right:22px;" id="drop-btn-1"> Drop</button>
          </div>
        </div>
</div>

<div class="mx-3 px-2 py-2" style="border: 1px dashed rgb(88, 86, 86)">
    <div class="row">
      <div class="col-3">
        <img src="/images/test.svg" class="img-fluid" style="height:15em" alt="...">
      </div>
      <div class="col">
        <h4><b>KNUST Student innovation to end Ghana's waste management challenges</b></h4>
        <p style="font-weight: bold; font-size:large">By: <a style="color: rgb(40, 245, 211)">West</a></p>
        <p class="lead">Too much waste in this country. Time for a change</p>
      </div>
      <div class="col-2">
        <button onclick="document.getElementById('drop-btn-2').style.display='block'; document.getElementById('down-tog-2').style.display='none';document.getElementById('up-tog-2').style.display='inline'"> Actions    <i class="fas fa-chevron-down" id="down-tog-2"></i><i class="fab fa-artstation" style="display: none" id="up-tog-2"></i></button>
        <button style="display: none; padding-left:22px; padding-right:22px;" id="drop-btn-2"> Drop</button>
      </div>
    </div>
</div>

<div class="mx-3 px-2 py-2" style="border: 1px dashed rgb(88, 86, 86)">
    <div class="row">
      <div class="col-3">
        <img src="/images/test.svg" class="img-fluid" style="height:15em" alt="...">
      </div>
      <div class="col">
        <h4><b>KNUST Student innovation to end Ghana's waste management challenges</b></h4>
        <p style="font-weight: bold; font-size:large">By: <a style="color: rgb(40, 245, 211)">West</a></p>
        <p class="lead">Too much waste in this country. Time for a change</p>
      </div>
      <div class="col-2">
        <button onclick="document.getElementById('drop-btn-3').style.display='block'; document.getElementById('down-tog-3').style.display='none';document.getElementById('up-tog-3').style.display='inline'"> Actions    <i class="fas fa-chevron-down" id="down-tog-3"></i><i class="fab fa-artstation" style="display: none" id="up-tog-3"></i></button>
        <button style="display: none; padding-left:22px; padding-right:22px;" id="drop-btn-3"> Drop</button>
      </div>
    </div>
</div>

@endsection
