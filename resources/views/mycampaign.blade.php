<style>
body {font-family: Arial, Helvetica, sans-serif;}
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
    <h6 style="margin-left: 40px; color: grey; text-transform:capitalize"><i class="fa fa-map-marker" aria-hidden="true"></i>  {{Auth::user()->city}}, {{Auth::user()->country}}</h6>
    @elseif (Auth::user()->country)
<h6 style="margin-left: 40px; color: grey;"><i class="fa fa-map-marker" aria-hidden="true"></i>{{Auth::user()->city}}, {{Auth::user()->country}}</h6>
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
      href="{{route('campaigns.index')}}"
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
@foreach ($us_camp as $c )
<div class="mx-3 px-2 py-2" style="border: 1px dashed rgb(88, 86, 86)">

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
                  {{-- <li><a class="dropdown-item" href="#">Drop</a></li> --}}
                 <li><button id="id02" onclick="document.getElementById('id01').style.display='block'">Drop</button></li>
                <li><a class="dropdown-item" href="#">Generate Link</a></li>

                </ul>

              </div>


            <script>
                    // Get the modal
                    var modal = document.getElementById('id01');

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                    }
            </script>
        </div>

        </div>
    </div>
     @endforeach
     <div id="id01" class="modal">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                    <form class="modal-content" action="{{ route('campaigns.destroy',$c->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <div class="container">
                        <h1>Drop Campaign</h1>
                        <p>Are you sure you want to delete this campaign?</p>
                        <div class="clearfix">
                            <button type="button" id="cancelbtn" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                            <button type="submit" id="deletebtn" onclick="document.getElementById('id01').style.display='none'" class="deletebtn">Delete</button>
                        </div>
                        </div>
                    </form>
            </div>


@endsection
