 <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/css/jQuery-plugin-progressbar.css">
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="/js/jQuery-plugin-progressbar.js"></script>
<script>
const numb = document.querySelector(".numb");
            let counter = 0;
            setInterval(()=>{
              if(counter == 100){
                clearInterval();
              }else{
                counter+=1;
                numb.textContent = counter + "%";
              }
            }, 80);
</script>

<style>
    main{
        padding: 0 !important;
        margin: 0 !important;
    }

    .navbar input{
        display: none !important;
    }

    .navbar-toggler{
        display: none !important;
    }
    .sideColor {
        background-color:rgb(8,4,32) !important;
    }

    /* progress bar*/
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');




    </style>



@extends('layouts.adminlay')
@section('content')

<div class="d-flex" id="wrapper" >
            <!-- Sidebar-->
            <div class="border-end bg-blue sideColor" id="sidebar-wrapper" >
                <div class="list-group list-group-flush" style="width: 210px; font-size: 15px; background-color:rgb(8,4,32);">
                    <a class="list-group-item list-group-item-action sideColor  p-3 text-center" href="#!" style="color: rgb(56,216,208);">Campaigns</a>
                    <a class="list-group-item list-group-item-action sideColor p-3" href="{{ route('live.index')}}" style="color: white;">Live</a>
                    <a class="list-group-item list-group-item-action sideColor p-3" href="{{route('pendcamp.index')}}" style="color: white;">Pending</a>
                    <a class="list-group-item list-group-item-action sideColor  p-3" href="#!"style="color: white;">Suspended</a>
                    <a class="list-group-item list-group-item-action sideColor p-3 text-center" href="#!" style="color: rgb(56,216,208);">Users</a>
                    <a class="list-group-item list-group-item-action sideColor p-3" href="{{route('admin') }}" style="color: white;">Signed up</a>
                    <a class="list-group-item list-group-item-action sideColor p-3" href="#!" style="color: white;">Anonymous Contributors</a>
                    <a class="list-group-item list-group-item-action sideColor p-3 text-center" href="#!" style="color: rgb(56,216,208);">Actions</a>
                    <a class="list-group-item list-group-item-action sideColor p-3 text-center" href="#!" style="color: rgb(56,216,208);">Logout</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <select class="custom-select custom-select-sm" style="width:auto;">
                            <option selected>Sort</option>
                            <option value="1">Healthcare</option>
                            <option value="2">Start up</option>
                            <option value="3">Project</option>
                            <option value="4">Others</option>
                        </select>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid bg-light">
                    <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
                     <main style="padding-top: 1.5rem; margin-bottom: 5rem;">
                   @yield('trial')
                   </main>
                      </div>
            </div>
        </div>
@endsection
