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


</style>


@extends('layouts.app')
@section('content')

<div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-blue sideColor" id="sidebar-wrapper">
                <div class="list-group list-group-flush" style="width: 210px; font-size: 15px; background-color:rgb(8,4,32);">
                    <a class="list-group-item list-group-item-action sideColor  p-3 text-center" href="#!" style="color: rgb(56,216,208);">Campaigns</a>
                    <a class="list-group-item list-group-item-action sideColor p-3" href="#!" style="color: white;">Live</a>
                    <a class="list-group-item list-group-item-action sideColor p-3" href="#!" style="color: white;">Pending</a>
                    <a class="list-group-item list-group-item-action sideColor  p-3" href="#!"style="color: white;">Suspended</a>
                    <a class="list-group-item list-group-item-action sideColor p-3 text-center" href="#!" style="color: rgb(56,216,208);">Users</a>
                    <a class="list-group-item list-group-item-action sideColor p-3" href="#!" style="color: white;">Signed up</a>
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
                                <h3>Smart Crops</h3>
                                </div>
                                <div class="col">
                                <p>Campaign Starter</p>
                                <p>Starting date</p>
                                <p>Ending Date</p>
                                <p>Target Amount</p>
                                </div>
                                <div class="col">
                                <p>Jehu Stevenson</p>
                                <p>21 May 2021</p>
                                <p>21 May 2021</p>
                                <p>GHC 25,000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card my-4 mx-3">
                        <div class="card-body">
                        <div class="row align-items-start">
                                <div class="col">
                                <h3>Smart Crops</h3>
                                </div>
                                <div class="col">
                                <p>Campaign Starter</p>
                                <p>Starting date</p>
                                <p>Ending Date</p>
                                <p>Target Amount</p>
                                </div>
                                <div class="col">
                                <p>Jehu Stevenson</p>
                                <p>21 May 2021</p>
                                <p>21 May 2021</p>
                                <p>GHC 25,000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card my-4 mx-3">
                        <div class="card-body">
                        <div class="row align-items-start">
                                <div class="col">
                                <h3>Smart Crops</h3>
                                </div>
                                <div class="col">
                                <p>Campaign Starter</p>
                                <p>Starting date</p>
                                <p>Ending Date</p>
                                <p>Target Amount</p>
                                </div>
                                <div class="col">
                                <p>Jehu Stevenson</p>
                                <p>21 May 2021</p>
                                <p>21 May 2021</p>
                                <p>GHC 25,000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>





@endsection