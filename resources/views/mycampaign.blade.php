<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->

<style>
body {font-family: Arial, Helvetica, sans-serif;
    background: #fbf8f6 !important;

}
* {box-sizing: border-box;}

/* Set a style for all buttons */
 #id02 {
  /* background-color: #04AA6D; */
  color: rgb(3, 3, 3);
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

#id02:hover {
  opacity:1;
}

/* Float cancel and delete buttons and add an equal width */
#cancelbtn, #deletebtn {
  float: left;
  width: 50%;
  padding: 14px 20px;
  margin: 8px 0;
}

/* Add a color to the cancel button */
#cancelbtn {
  background-color: #ccc;
  color: black;
  border: none;
}

/* Add a color to the delete button */
#deletebtn {
  background-color: #f44336;
  border:none;
}

/* Add padding and center-align text to the container */
.container {
  padding: 16px;
  text-align: center;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* The Modal Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
     width: 100%;
  }
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
<button class="btn btn-primary" style="background:white; color: black;" type="submit">
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
  </li></div>
  <div class="col-4 text-center">
  <li class="nav-item" role="presentation"><li>
    <a
      class="nav-link px-1 active"
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
      class="nav-link px-1"
      style="background-color: whitesmoke;"
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
<br>
<br>
<h3 style="margin-left: 15px; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Campaigns I'm On<i aria-hidden="true"></i></h3>
<hr style="margin:15px;">
<br>
@foreach ($us_camp as $c )
<div class="container-fluid mx-3 px-2 py-2" style="border: 1px solid silver; margin-top:20px;">

        <div class="row">
          <div class="col-3">
            <img src="{{asset('storage/covers/'. $c->cover_img)}}" class="img-fluid" style="height:15em; width:20em" alt="...">
          </div>
          <div class="col">
            <h4 style="text-transform:capitalize;"><b>{{ $c->title }}</b></h4>
            <p style="font-weight: bold; font-size:large">By: <a style="color: rgb(40, 245, 211)">{{ Auth::user()->name}}</a></p>
            <p class="d-inline-block text-truncate" style="max-width:350px;">{{ $c->story }}</p>
          </div>
          <div class="col-2">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  Actions
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                 <li><a type="button" href="{{ route('campaigns.edit',$c->id) }}" id="id02" class="dropdown-item">View Details</a></li>
                 {{-- <li><button id="id02" onclick="document.getElementById('id01').style.display='block'">Drop</button></li> --}}
                <li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Generate Link</button></li>

                </ul>

              </div>


                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                    </div>
                    <div class="mb-3" style="padding: 15px;">
                    <label for="exampleInputPassword1">Campaign Link</label>
                    <input type="text" class="form-control" id="exinput" value ="http://127.0.0.1:8000/home/{{$c->id}}">
                    <br>

                  </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" style="margin-left:20%" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="myFunction()">Copy</button>
                    </div>
                    </div>
                 </div>
                </div>

        </div>

        </div>
    </div>
    @endforeach

    </div>

@endsection
