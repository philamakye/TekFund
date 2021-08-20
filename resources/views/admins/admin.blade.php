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
                @if (!empty($campaigns))
                 @foreach ($campaigns as $liv)
                    <div class="card my-4 mx-3">
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col">
                                <h3 style="text-transform: capitalize;">{{ $liv->title }}</h3>
                                @if (!empty($liv->percent))
                                <div class="progress-bar position"  data-percent="{{ $liv->percent }}" data-color="#aadcf5,#12b321"></div>
                                @elseif(empty($liv->percent))
                                <div class="progress-bar position"  data-percent="00" data-color="#aadcf5,#12b321"></div>
                                @endif
                                </div>
                                <div class="col mt-2 pt-5">
                                <p>Campaign Starter</p>
                                <p>Starting date</p>
                                <p>Ending Date</p>
                                <p>Target Amount</p>
                                </div>
                                <div class="col mt-2 pt-5">
                                <p style="text-transform:capitalize;">{{ $liv->full_name }}</p>
                                <p>{{ \Carbon\Carbon::parse($liv->updated_at)->format('d M Y')}}</p>
                                <p>{{ \Carbon\Carbon::parse($liv->updated_at)->addDays($liv->duration)->format('d M Y')}}</p>
                                <p>GHC {{ $liv->target }}</p>
                                </div>

                                <div class="col mt-5 pt-5">
                                <form action="{{ route('live.edit', $liv->id) }}" method="get" style="display: inline;">
                                  <button type="submit"  class="btn btn-outline-primary">DETAILS</button>
                                  </form>
                                </div>

                            </div>
                        </div>
                    </div>
                 @endforeach
                 @else
                <h3 style="margin-left:300px">There are no on-going campaigns!</h3>
                 @endif
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
