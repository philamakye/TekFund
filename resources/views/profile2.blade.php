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
@include('layouts.camplay')
<form action="{{route('store Basic info')}}" method="POST">
    @csrf
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
@include('layouts.success')
  <div class="card-body">

    <div class="mb-3" style="width:50%;">
    <label for="exampleFormControlInput1" class="form-label">First Name</label>
    <input type="text" placeholder="Ex: Manasseh" class="form-control" name="first_name" value ="{{old('first_name')}}"id="first_name">
    </div>
    <div class="mb-3" style="width:50%;">
    <label for="exampleFormControlInput1" class="form-label">Last Name</label>
    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Ex: West">
    </div>
    <div class="mb-3" style="width:50%;">
    <label for="exampleFormControlInput1" class="form-label">Country</label>
    <input type="text" class="form-control" name="country" id="country" placeholder="Ex: Ghana">
    </div>
    <!--<div class="container">-->
        <div class="row">
    <div class="mb-3" style="width: 25%; margin-left:5px;">
    <label for="exampleFormControlInput1" class="form-label">City</label>
    <input type="text" class="form-control" name="city" id="city" placeholder="Ex: Takoradi">
    </div>
    <div class="mb-3" style="width: 25%; margin-left:5px;">
    <label for="exampleFormControlInput1" class="form-label">School ID</label>
    <input type="text" class="form-control" name="school_id" id="school_id" placeholder="Ex: 2057763">
    </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <button type="submit" class="btn btn-primary mb-2" style="background-color:rgb(44, 20, 124); margin-top: 10px; float: right; margin-right: 80px;">  SAVE  </button>
</form>
<br>
<br>
<br>
<br>
<div class="tab-pane fade show active" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">

    <div class="card" style="margin-left:70px; width: 90%;    background-color: rgb(175, 250, 242);">
<form action="{{route('Your Story')}}" method="POST">
    @csrf
    <h3 style="margin-top: 20px; margin-left: 20px;">Your Story</h3>
    <hr style="margin: 10px;">
    @include('layouts.error')
    <div class="card-body">
        <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Short Description</label>
    <input type="text" name = "shrt_desc" class="form-control" id="exampleFormControlInput1" placeholder="">
    <br>
    <label for="exampleFormControlInput1" class="form-label">About Me</label>
    <div class="form-floating">
    <textarea class="form-control" name="about_me" maxlength = "1000" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 250px"></textarea>
    </div>
    </div>
    </div>
    <h3 style="margin-left: 20px;">500/500</h3>
    </div>
    </div>
    <button type="submit" class="btn btn-primary mb-2" style="background-color:rgb(44, 20, 124); margin-top: 10px; float: right; margin-right: 80px;">  SAVE  </button>
</form>
<br>
<br>
<br>
<br>
<div class="tab-pane fade show active" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">

  <div class="card" style="margin-left:70px; width: 90%;    background-color: rgb(175, 250, 242);">

   <h3 style="margin-top: 20px; margin-left: 20px;">Your Photos</h3>
<hr style="margin: 10px;">
  <div class="card-body">
      @include('layouts.flash')
      <h4>Profile Image<i class="fa fa-question-circle" aria-hidden="true"style="margin-left:30px;"></i></h4>
      <center>
        @if(Auth::user()->pro_image)
                <img src="{{asset('storage/images/'. Auth::user()->pro_image)}}" alt="avatar" style="border-radius:250px; height: 250px; width: 250px;"/>
        @else
        <img src="https://i.pinimg.com/474x/65/25/a0/6525a08f1df98a2e3a545fe2ace4be47.jpg" alt="avatar" style=" border-radius:250px; height: 230px; width: 230px;"/></center>
        @endif
         <form action="{{route('Upload-profile image')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <center><input type="file" name="image" accept= "image/*" style="background-color:rgb(246, 246, 248); margin-top: 10px;"/></center>
            <br>
            <center><button type="submit" class="btn btn-primary mb-2" style="background-color:rgb(44, 20, 124); margin-top: 10px; ">ADD IMAGE</button></center>
         </form>
<br>
    <h4 style="float: left;">Avatar<i class="fa fa-question-circle" aria-hidden="true"style="margin-left:30px;"></i></h4>
<br>
    <center>
        @if(Auth::user()->avatar)
            <img src="{{asset('storage/images/'. Auth::user()->avatar)}}" alt="avatar" style="border-radius:200px; height: 70px; width: 70px; margin-right: 120px;"/>
        @endif
        @if (empty(Auth::user()->avatar))
        <img src="https://i.pinimg.com/474x/65/25/a0/6525a08f1df98a2e3a545fe2ace4be47.jpg" alt="avatar" style=" border-radius:150px; height: 70px; margin-right: 120px; "/></center>
        @endif

            <form action="{{route('Upload-avatar')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <center><input type="file" name="image" accept= "image/*" style="background-color:rgb(246, 246, 248); margin-top: 10px;"/></center>
            <br>
            <center><button type="submit" class="btn btn-primary mb-2" style="background-color:rgb(44, 20, 124); margin-top: 10px;">ADD IMAGE</button></center>
            </form>
</div>
  </div>
</div>
<br>
<br>
<form action="{{route('other links')}}" method="POST" >
        @csrf
<div class="tab-pane fade show active" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
<form action="" method="POST" id="">
  <div class="card" style="margin-left:70px; width: 90%;    background-color: rgb(175, 250, 242);">

   <h3 style="margin-top: 20px; margin-left: 20px;">Outside Links</h3>
   <hr style="margin: 10px;">
   @include('layouts.linkflash')
   <div class="card-body">
      <div class="mb-3">

  <label for="exampleFormControlInput1" class="form-label">Facebook Links</label>
  <input type="url" class="form-control" name="user_facebooklink" id="user_facebooklink" placeholder="">
<br>
  <label for="exampleFormControlInput1" class="form-label">Twitter Links</label>
  <input type="url" class="form-control" name="user_twitterlink" id="user_facebooklink" placeholder="">
<br>
  <label for="exampleFormControlInput1" class="form-label">YouTube Links</label>
  <input type="url" class="form-control" name="user_youtubelink" id="exampleFormControlInput1" placeholder="">
<br>
  <label for="exampleFormControlInput1" class="form-label">IMDb Links</label>
  <input type="url" class="form-control" name="user_imdb" id="user_imdb" placeholder="">
<br>
  <label for="exampleFormControlInput1" class="form-label">Your Website</label>
  <input type="url" class="form-control" name="user_websitelink" id="user_websitelink" placeholder="">
  </div>
</div>
  </div>
</div>
<button type="submit" class="btn btn-primary mb-2" style="background-color:rgb(44, 20, 124); margin-top: 10px; float: right; margin-right: 80px;">  SAVE  </button>
</form>
<br>
<br>
<!--</div>-->
</div>

@endsection
