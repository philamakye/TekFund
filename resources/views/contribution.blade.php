<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<style>
  body{
    background: #fbf8f6 !important;
  }
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #301783;
  color: white;
}
</style>

@extends('layouts.app')


@section('content')
<div class="container-fluid" style="padding-left: 20px; padding-right:20px">
<form action="profile" method="GET" style="display: inline" >
<button class="btn btn-primary" style="margin-left: 15px; color: white;" type="submit">
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
  <div class="col-4 text-center">
  <li class="nav-item" role="presentation">
    <a
      class="nav-link px-1"
      style="background-color: whitesmoke;"
      id="ex1-tab-1"
      data-mdb-toggle="tab"
      href="{{route('Profile')}}"
      role="tab"
      aria-controls="ex1-tabs-1"
      aria-selected="true"
      ><b>Profile</b></a>
  </li>
  </div>
  <div class="col-4 text-center">
  <li class="nav-item" role="presentation">
    <a
      class="nav-link px-1"
      style="background-color: whitesmoke;"
      id="ex1-tab-2"
      data-mdb-toggle="tab"
      href="{{route('campaigns.index')}}"
      role="tab"
      aria-controls="ex1-tabs-2"
      aria-selected="false"
      ><b>Campaigns</b></a>

  </li>
  </div>
  <div class="col-4 text-center">
  <li class="nav-item" role="presentation">
    <a
      class="nav-link px-1 active"
      id="ex1-tab-3"
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
<br>
<br>
<h3 style="margin-left: 15px; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">My Contributions<i aria-hidden="true"></i></h3>


<hr style="margin: 10px;">
{{-- <h5 style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; padding: 20px; margin-left: 50px; display: inline;">Date</h5>
<h5 style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; padding: 20px; margin-left: 270px;display: inline;">Campaign</h5>
<h5 style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; padding: 350px; margin-right: 50px; display: inline;">Amount</h5>
<h5 style ="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; float: right;margin-right: 100px; display: inline;">Visibility</h5> --}}
{{-- <hr style="margin: 10px;"> --}}
<br>
<table id="customers">
  <tr>
    <th>Date</th>
    <th>Campaign</th>
    <th>Amount</th>
  </tr>
  @foreach ( $us_cont as $u )
   <tr>
    <td>{{ \Carbon\Carbon::parse($u->created_at)->format('d M Y') }}</td>
    <td style="text-transform:capitalize;">{{ $u->title }}</td>
    <td>GHS {{ $u->contributed_amount }}</td>
  </tr>

  @endforeach
</table>
<br>
<br>
<br>
<br>
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
