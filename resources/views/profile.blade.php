@extends('layouts.app')
@section('content')
<form action="editprofile" method="GET" style="display: inline" >
<button class="btn btn-primary" style="margin-left: 15px;background-color: rgb(44, 20, 124); color: white;" type="submit"><i class="fa fa-eye" aria-hidden="false"></i>
View Profile <span class="badge bg-secondary"></span>
</button>
</form>
<form action="profile" method="GET" style="display: inline" >
<button class="btn btn-primary" style="background-color: white; color: black;" type="submit"><i class="fa fa-pencil" aria-hidden="true"></i>
Edit Profile & Settings<span class="badge bg-secondary"></span>
</button>
</form>


<h2 style="margin-left:30px; font-family: cooper; margin-top:10px; font-size: 25px;">MANASSEH WEST</h2>
<h6 style="margin-left: 40px; color: grey;"><i class="fa fa-map-marker" aria-hidden="true"></i>  Kumasi, Ghana</h6>

<!-- Tabs navs -->
<ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a
      class="nav-link active"
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
      href=""
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
      href=""
      role="tab"
      aria-controls="ex1-tabs-3"
      aria-selected="false"
      >Contributions</a
    >
  </li>
</ul>
<!-- Tabs navs -->
<center>
         <img src="https://i.pinimg.com/474x/65/25/a0/6525a08f1df98a2e3a545fe2ace4be47.jpg" alt="avatar" style=" border-radius:250px; height: 230px;"/></center>
         <center><h3 style="margin-top: 10px;font-family: cooper; margin-top:50px;color:rgb(90, 86, 86); font-size: 25px;">About Me</h3></center>
         <br>
</center>
    <hr style="margin:15px;">
    <br>
    <br>
    <img src="https://i.pinimg.com/474x/65/25/a0/6525a08f1df98a2e3a545fe2ace4be47.jpg" alt="avatar" style="margin-left: 120px; border-radius:60px; height: 60px; display: inline;"/>
    <h2 style="margin-left:10px; font-family: cooper; font-size: 25px; display: inline;">MANASSEH WEST</h2>
    <br>
    <br>
    <hr style="margin-right: 1070px; margin-left: 100px;">
    <br>
    <br>
    <h3>32 Cmpaigns</h3>
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
