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


</style>


@extends('layouts.app')
@section('content')

<div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light"></div>
                <div class="list-group list-group-flush" style="width: 200px;">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 text-center" href="#!">Campaigns</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Live</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Pending</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Suspended</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 text-center" href="#!">Users</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Signed up</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Anonymous Contributors</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 text-center" href="#!">Actions</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 text-center" href="#!">Logout</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 class="mt-4">Simple Sidebar</h1>
                    <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>


                    <div class="card my-3">
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
                    <div class="card my-3">
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
                    <div class="card my-3">
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