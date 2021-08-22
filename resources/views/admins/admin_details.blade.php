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
    #dbtn{
        padding-left: 20px;
        padding-right: 20px;
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
                    <a class="list-group-item list-group-item-action sideColor p-3" href="#!" style="color: white;">Live</a>
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
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
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
                
                <div class="card my-4 mx-3">
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col">
                                    <h3>Smart Corps</h3>
                                </div>
                                <div class="col mt-2 pt-5">
                                <p>Campaign Starter</p>
                                <p>Starting date</p>
                                <p>Ending Date</p>
                                <p>Target Amount</p>
                                </div>
                                <div class="col mt-2 pt-5">
                                <p> Ofori Gerald Bosu</p>
                                <p> 20 August 2021</p>
                                <p> 5 September</p>
                                <p>GHC 50000</p>
                                </div>
                                <div class="container">
                                <div class="row">
                                 <div class="col-1"></div>
                                 <div class="col"><hr></div>
                                 <div class="col-1"></div>
                                </div>
                                </div>
                            <div class="row align-items-start">
                                <div class="col">
                                    <p>Number of backers:</p>
                                    <p>Number of followers:</p>
                                    <p>Number of Comments:</p>
                                    <p>Days Remaining:</p>
                                </div>
                                <div class="col">
                                    <p>34</p>
                                    <p>666</p>
                                    <p>57</p>
                                    <p>16</p>
                                </div>
                                <div class="col">

                                </div>
                            </div>
                            <div class="row align-items-start" style="padding-top: 50px;">
                                <div class="col">
                                    <button type="button" class="btn btn-success" id="dbtn">Verify</button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-danger" id="dbtn">End</button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-warning" id="dbtn">Suspend</button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-secondary" id="dbtn">Payback</button>
                                </div>

                            </div>
                                

                            </div>
                        </div>
                    
                </div>
            </div>
        </div>


        <script>
            $(".progress-bar").loading();
            $('input').on('click', function () {
                 $(".progress-bar").loading();
            });
        </script>


@endsection
