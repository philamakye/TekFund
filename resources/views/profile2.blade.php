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
      href="{{route('Email')}}"
      role="tab"
      aria-controls="ex1-tabs-3"
      aria-selected="false"
      >Emails</a
    >
  </li>
</ul>
<!-- Tabs navs -->

<!--Tabs contenmt-->
<div
    class="tab-pane fade show active"
    id="ex1-tabs-1"
    role="tabpanel"
    aria-labelledby="ex1-tab-1"
  >
<div class="tab-pane fade show active" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">

  <div class="card" style="margin-left:70px; width: 90%;    background-color: rgb(175, 250, 242);">

   <h3 style="margin-top: 20px; margin-left: 20px;">Basic Info</h3>
<hr style="margin: 10px;">
  <div class="card-body">


<div class="mb-3" style="width:50%;">
  <label for="exampleFormControlInput1" class="form-label">First Name</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Bitch">
</div>
<div class="mb-3" style="width:50%;">
  <label for="exampleFormControlInput1" class="form-label">Last Name</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ass">
</div>
<div class="mb-3" style="width:50%;">
  <label for="exampleFormControlInput1" class="form-label">Country</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Cameroon">
</div>
<!--<div class="container">-->
    <div class="row">
<div class="mb-3" style="width: 25%; margin-left:5px;">
  <label for="exampleFormControlInput1" class="form-label">City</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Korle-Bu">
</div>
<div class="mb-3" style="width: 25%; margin-left:5px;">
  <label for="exampleFormControlInput1" class="form-label">School ID</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="2057763">
</div>
    </div>
  </div>
  </div>
</div>
</div>
<br>
<br>
<div class="tab-pane fade show active" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">

  <div class="card" style="margin-left:70px; width: 90%;    background-color: rgb(175, 250, 242);">

   <h3 style="margin-top: 20px; margin-left: 20px;">Your Story</h3>
<hr style="margin: 10px;">
  <div class="card-body">
      <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Short Description</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Bitch">
<br>
   <label for="exampleFormControlInput1" class="form-label">About Me</label>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 250px"></textarea>
</div>
</div>
  </div>
  <h3 style="margin-left: 20px;">500/500</h3>
  </div>
</div>
<br>
<br>
<div class="tab-pane fade show active" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">

  <div class="card" style="margin-left:70px; width: 90%;    background-color: rgb(175, 250, 242);">

   <h3 style="margin-top: 20px; margin-left: 20px;">Your Photos</h3>
<hr style="margin: 10px;">
  <div class="card-body">
      <h4>Profile Image<i class="fa fa-question-circle" aria-hidden="true"style="margin-left:30px;"></i></h4>
      <center>
         <img src="https://i.pinimg.com/474x/65/25/a0/6525a08f1df98a2e3a545fe2ace4be47.jpg" alt="avatar" style=" border-radius:250px; height: 230px;"/></center>
         <center><button type="submit" class="btn btn-primary mb-2" style="background-color:rgb(44, 20, 124); margin-top: 10px;">ADD IMAGE</button></center>
         <br>
<h4>Avatar<i class="fa fa-question-circle" aria-hidden="true"style="margin-left:30px;"></i></h4>
<center>
         <img src="https://i.pinimg.com/474x/65/25/a0/6525a08f1df98a2e3a545fe2ace4be47.jpg" alt="avatar" style=" border-radius:150px; height: 70px;"/></center>
         <center><button type="submit" class="btn btn-primary mb-2" style="background-color:rgb(44, 20, 124); margin-top: 10px;">ADD IMAGE</button></center>
  </div>
  </div>
</div>
<br>
<br>
<div class="tab-pane fade show active" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">

  <div class="card" style="margin-left:70px; width: 90%;    background-color: rgb(175, 250, 242);">

   <h3 style="margin-top: 20px; margin-left: 20px;">Outside Links</h3>
   <hr style="margin: 10px;">
   <div class="card-body">
      <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Facebook Links</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
<br>
  <label for="exampleFormControlInput1" class="form-label">Twitter Links</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
<br>
  <label for="exampleFormControlInput1" class="form-label">YouTube Links</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
<br>
  <label for="exampleFormControlInput1" class="form-label">IMDb Links</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
<br>
  <label for="exampleFormControlInput1" class="form-label">Your Website</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
</div>
  </div>
</div>
<button type="submit" class="btn btn-primary mb-2" style="background-color:rgb(44, 20, 124); margin-top: 10px; float: right; margin-right: 80px;">  SAVE  </button>
<br>
<br>
<!--</div>-->



















</div>

@endsection
