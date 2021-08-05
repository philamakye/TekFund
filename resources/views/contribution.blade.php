<style>
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
</style>

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
      class="nav-link"
      id="ex1-tab-2"
      data-mdb-toggle="tab"
      href="{{route('My Campaigns')}}"
      role="tab"
      aria-controls="ex1-tabs-2"
      aria-selected="false"
      >Campaigns</a>

  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link active"
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
<table>
  <tr>
    <th>Date</th>
    <th>Campaign</th>
    <th>Amount</th>
    <th>Visibility</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
    <td>True</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
    <td>Ghana</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
    <td>Ghana</td>
  </tr>
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
<br>
<br>
<br>
<br>
@endsection
