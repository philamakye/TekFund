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
.sideColor:active{
  background-color: yellow !important;
}

/* progress bar*/
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
.circular{
  height: 100px;
  width: 100px;
  position: relative;
}
.circular .inner, .circular .outer, .circular .circle{
  position: absolute;
  z-index: 6;
  height: 100%;
  width: 100%;
  border-radius: 100%;
  box-shadow: inset 0 1px 0 rgba(0,0,0,0.2);
}
.circular .inner{
  top: 50%;
  left: 50%;
  height: 80px;
  width: 80px;
  margin: -40px 0 0 -40px;
  /*background-color: #dde6f0; */
  background-color: #fff;
  border-radius: 100%;
  box-shadow: 0 1px 0 rgba(0,0,0,0.2);
}
.circular .circle{
  z-index: 1;
  box-shadow: none;
}
.circular .numb{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 10;
  font-size: 18px;
  font-weight: 500;
  color: #4158d0;
}
.circular .bar{
  position: absolute;
  height: 100%;
  width: 100%;
  background:rgb(8,4,100);
  -webkit-border-radius: 100%;
  border-radius: 100%;
  clip: rect(0px, 100px, 100px, 50px);
}
.circle .bar .progress{
  position: absolute;
  height: 100%;
  width: 100%;
  -webkit-border-radius: 100%;
        border-radius: 100%;
  clip: rect(0px, 50px, 100px, 0px);
}
.circle .bar .progress, .dot span{
  background: rgb(56,216,208);
}
.circle .left .progress{
  z-index: 1;
  animation: left 4s linear both;
}
@keyframes left {
  100%{
    transform: rotate(180deg);
  }
}
.circle .right{
  z-index: 3;
  transform: rotate(180deg);
}
.circle .right .progress{
  animation: right 4s linear both;
  animation-delay: 4s;
}
@keyframes right {
  100%{
    transform: rotate(180deg);
  }
}
.circle .dot{
  z-index: 2;
  position: absolute;
  left: 50%;
  top: 50%;
  width: 50%;
  height: 10px;
  margin-top: -5px;
  animation: dot 8s linear both;
  transform-origin: 0% 50%;
}
.circle .dot span {
  position: absolute;
  right: 0;
  width: 10px;
  height: 10px;
  border-radius: 100%;
}
@keyframes dot{
  0% {
    transform: rotate(-90deg);
  }
  50% {
    transform: rotate(90deg);
    z-index: 4;
  }
  100% {
    transform: rotate(270deg);
    z-index: 4;
  }
}


</style>


@extends('layouts.adminlay')
@section('content')

<div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-blue sideColor" id="sidebar-wrapper">
                <div class="list-group list-group-flush" style="width: 210px; font-size: 15px; background-color:rgb(8,4,32);">
                    <a class="list-group-item list-group-item-action sideColor  p-3 text-center" href="#!" style="color: rgb(56,216,208);">Campaigns</a>
                    <a class="list-group-item list-group-item-action sideColor p-3" href="#!" style="color: white;">Live</a>
                    <a class="list-group-item list-group-item-action sideColor p-3" href="{{route('pendcamp.index')}}" style="color: white;">Pending</a>
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

                 @foreach ($campaigns as $liv)
                    <div class="card my-4 mx-3">
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col">
                                <h3 style="text-transform: capitalize;">{{ $liv->title }}</h3>
                                <div class="circular">
                                    <div class="inner"></div>
                                    <div class="outer"></div>
                                    <div class="numb">
                                    75%
                                    </div>
                                    <div class="circle">
                                    <div class="dot">
                                        <span></span>
                                    </div>
                                    <div class="bar left">
                                        <div class="progress"></div>
                                    </div>
                                    <div class="bar right">
                                        <div class="progress"></div>
                                    </div>
                                    </div>
                                </div>


                                </div>
                                <div class="col">
                                <p>Campaign Starter</p>
                                <p>Starting date</p>
                                <p>Ending Date</p>
                                <p>Target Amount</p>
                                </div>
                                <div class="col">
                                <p style="text-transform:capitalize;">{{ $liv->full_name }}</p>
                                <p>21 May 2021</p>
                                <p>21 May 2021</p>
                                <p>GHC {{ $liv->target }}</p>
                                </div>

                                <div class="col">
                                <form action="" href= "{{route('live.show, $liv->campaign_id')}}" method="get" style="display: inline;">
                                  <button type="submit"  class="btn btn-outline-primary">DETAILS</button>
                                  </form>
                                </div>




                            </div>
                        </div>
                    </div>

                 @endforeach
                    <div class="card my-4 mx-3">
                        <div class="card-body">
                        <div class="row align-items-start">
                                <div class="col">
                                <h3>Smart Crops</h3>
                                <div class="circular">
                                    <div class="inner"></div>
                                    <div class="outer"></div>
                                    <div class="numb">
                                    75%
                                    </div>
                                    <div class="circle">
                                    <div class="dot">
                                        <span></span>
                                    </div>
                                    <div class="bar left">
                                        <div class="progress"></div>
                                    </div>
                                    <div class="bar right">
                                        <div class="progress"></div>
                                    </div>
                                    </div>
                                </div>

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
                                <div class="col">
                                  <button type="button" class="btn btn-outline-primary">DETAILS</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card my-4 mx-3">
                        <div class="card-body">
                        <div class="row align-items-start">
                                <div class="col">
                                <h3>Smart Crops</h3>
                                <div class="circular">
                                    <div class="inner"></div>
                                    <div class="outer"></div>
                                    <div class="numb">
                                    75%
                                    </div>
                                    <div class="circle">
                                    <div class="dot">
                                        <span></span>
                                    </div>
                                    <div class="bar left">
                                        <div class="progress"></div>
                                    </div>
                                    <div class="bar right">
                                        <div class="progress"></div>
                                    </div>
                                    </div>
                                </div>

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
                                <div class="col">
                                  <button type="button" class="btn btn-outline-primary">DETAILS</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>





@endsection
