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
    /* .sideColor {
        background-color:rgb(8,4,32) !important;
    } */
    #sidebar-wrapper{
        position: absolute;
        background-color:rgb(8,4,32) !important;
    }
</style>
@extends('layouts.adminlay')

@section('content')
<div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div id="sidebar-wrapper">
                <ul class="list-group list-group-flush" style="width: 210px; font-size: 15px; background-color:rgb(8,4,32);">
                    <li><a class="list-group-item list-group-item-action p-3 text-center" href="#!" style="color: rgb(56,216,208);">Campaigns</a></li>
                    <li><a class="list-group-item list-group-item-action p-3" href="#!" style="color: white;">Live</a></li>
                    <li><a class="list-group-item list-group-item-action p-3" href="{{route('pendcamp.index')}}" style="color: white;">Pending</a></li>
                    <li><a class="list-group-item list-group-item-action p-3" href="#!"style="color: white;">Suspended</a></li>
                    <li><a class="list-group-item list-group-item-action p-3 text-center" href="#!" style="color: rgb(56,216,208);">Users</a></li>
                    <li><a class="list-group-item list-group-item-action p-3" href="#!" style="color: white;">Signed up</a></li>
                    <li><a class="list-group-item list-group-item-action p-3" href="#!" style="color: white;">Anonymous Contributors</a></li>
                    <li><a class="list-group-item list-group-item-action p-3 text-center" href="#!" style="color: rgb(56,216,208);">Actions</a></li>
                    <li><a class="list-group-item list-group-item-action p-3 text-center" href="#!" style="color: rgb(56,216,208);">Logout</a></li>
                </ul>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            
                        </div>
                    </div>
                </div>
            </div> 


@endsection