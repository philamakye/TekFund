<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap">
<style>
  .carousel img{
height: 35em;
  }

.nopadding{
  padding: 0 !important;

}

.nomargin{
  margin: 0 !important;
}

.index-card:hover {
  /* margin-bottom: 2px; */
  box-shadow: 5px 5px 5px 5px grey;
  transition: .3s;

}
/* body{
    background: #fbf8f6 !important;
  } */
</style>
@extends('layouts.app')


@section('content')
<div id="carouselExampleControls"  class="carousel slide " data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active px-5">
        <img src="images/land.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item px-5">
        <img src="images/land1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item px-5">
        <img src="images/north_shore_sunset_beach6869.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class=" my-4 mx-3">
    <h2>
      Recently Viewed
      <hr>
    </h2>

    <div class="row text trio">
     @foreach ( $showcards as $show )
      <div class="col-lg-3 col-md-6 mb-4">
          <div class="card index-card" style="height: 80vh">
              <img class="card-img-top" src="{{asset('storage/covers/'. $show->cover_img)}}" alt="Img" style="height:40%">
              <div class="card-body nopadding mt-2" style="margin-left:0px;">
                <div class="container nopadding">
                  <div class="row ">
                    <div class="col ">
                      <p class="lead pl-2 nomargin " style="color: green" >
                        Funding
                      </p>
                    </div>
                    <div class="col nopadding">
                      <p class="lead nomargin pr-4" style="float: right">
                        <i class="far fa-heart "></i>
                      </p>
                    </div>
                  </div>
                  <hr>
                </div>

                  <h4 class="card-title px-2 d-inline-block text-truncate" style = "max-width:300px; text-transform:capitalize;">{{$show->title}}</h4>
                  <p class="card-text px-2">
                    <small class = "d-inline-block text-truncate"style="font-size:1em; max-width:330px;">{{ $show->story }}</small>
                  </p>
                  <p class="card-text px-2 nomargin">

                      @if ($show->business_cate)
                    <small class="text-muted d-inline-block text-truncate" style="font-size: 1.1em;text-transform:uppercase; max-width:600px;">{{ $show->business_cate }}</small>
                    @elseif ($show->project_field)
                    <small class="text-muted" style="font-size: 1.1em;text-transform:uppercase;max-width:300px;">{{ $show->project_field }}</small>
                    @elseif ($show->cause)
                    <small class="text-muted d-inline-block text-truncate" style="font-size: 1.1em;text-transform:uppercase;max-width:250px;">{{ $show->cause }}</small>
                    @else
                   <small class="text-muted" style="font-size: 1.1em;text-transform:uppercase;max-width:300px;">HEALTH AND WELLBEING</small>
                    @endif
                  </p>

                  <div class="container nopadding">
                    <div class="row ">
                      <div class="col ">
                          @if (!empty($show->total_amount))
                           <p class="lead pl-2 nomargin " style="font-size: 1em " >
                         {{ $show->total_amount }} GHS raised
                        </p>
                          @else
                         <p class="lead pl-2 nomargin " style="font-size: 1em " >
                         0 GHS raised
                        </p>
                          @endif

                      </div>
                      <div class="col nopadding">
                          @if (empty($show->percent))
                        <p class="lead nomargin pr-4" style="float: right; font-size:1em">
                          0%
                        </p>
                          @else
                        <p class="lead nomargin pr-4" style="float: right; font-size:1em">
                          {{ $show->percent }}%
                        </p>
                          @endif
                      </div>
                    </div>
                    <div class="row mx-2" >
                      <div class="progress nopadding" style="height: 10px;">
                        @if (!empty($show->percent))
                         <div class="progress-bar bg-success" role="progressbar" style="width: {{ $show->percent }}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        @else
                        <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        @endif
                      </div>
                    </div>
                    <div class="row px-3 pt-2 pb-0">

                      <p>

                        <i class="far fa-clock"></i><small class="text-muted pl-2" >{{ \Carbon\Carbon::parse($show->updated_at)->addDays($show->duration)->diffInDays() }} days left</small>
                      </p>

                    </div>

                  </div>

              </div>
              <div class="card-footer">
                  <a href="{{ route('home.show', $show->id) }}" class="btn btn" style="background-color: rgb(50, 18, 156); color: white">Find Out More!</a>
              </div>
          </div>
      </div>
      @endforeach

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card index-card" style="height: 90vh">
            <img class="card-img-top" src="images/cards/card2.jpg" alt="Img" style="height:40%">
            <div class="card-body nopadding mt-2" style="margin-left:0px;">
              <div class="container nopadding">
                <div class="row ">
                  <div class="col ">
                    <p class="lead pl-2 nomargin " style="color: green" >
                      Funding
                    </p>
                  </div>
                  <div class="col nopadding">
                    <p class="lead nomargin pr-4" style="float: right">
                      <i class="far fa-heart "></i>
                    </p>
                  </div>
                </div>
                <hr>
              </div>

                <h4 class="card-title px-2">Dwarf Telescope - A portable digital telescope</h4>
                <p class="card-text px-2">
                  <small style="font-size:1em">See your friends clearly from 2000 meters away</small>
                </p>
                <p class="card-text px-2 nomargin">
                  <small class="text-muted" style="font-size: 1.1em">TECH AND INNOVATION</small>
                </p>

                <div class="container nopadding">
                  <div class="row ">
                    <div class="col ">
                      <p class="lead pl-2 nomargin " style="font-size: 1em " >
                        24,546 GHS raised
                      </p>
                    </div>
                    <div class="col nopadding">
                      <p class="lead nomargin pr-4" style="float: right; font-size:1em">
                        76%
                      </p>
                    </div>
                  </div>
                  <div class="row mx-2" >
                    <div class="progress nopadding" style="height: 10px;">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 76%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="row px-3 pt-2 pb-0">

                    <p>
                      <i class="far fa-clock"></i><small class="text-muted pl-2" >33 days left</small>
                    </p>


                  </div>

                </div>

            </div>
            <div class="card-footer">
                <a href="#" class="btn btn" style="background-color: rgb(50, 18, 156); color: white">Find Out More!</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card index-card" style="height: 90vh">
          <img class="card-img-top" src="images/cards/card3.jpg" alt="Img" style="height:40%">
          <div class="card-body nopadding mt-2" style="margin-left:0px;">
            <div class="container nopadding">
              <div class="row ">
                <div class="col ">
                  <p class="lead pl-2 nomargin " style="color: green" >
                    Funding
                  </p>
                </div>
                <div class="col nopadding">
                  <p class="lead nomargin pr-4" style="float: right">
                    <i class="far fa-heart "></i>
                  </p>
                </div>
              </div>
              <hr>
            </div>

              <h4 class="card-title px-2">Dwarf Telescope - A portable digital telescope</h4>
              <p class="card-text px-2">
                <small style="font-size:1em">See your friends clearly from 2000 meters away</small>
              </p>
              <p class="card-text px-2 nomargin">
                <small class="text-muted" style="font-size: 1.1em">TECH AND INNOVATION</small>
              </p>

              <div class="container nopadding">
                <div class="row ">
                  <div class="col ">
                    <p class="lead pl-2 nomargin " style="font-size: 1em " >
                      24,546 GHS raised
                    </p>
                  </div>
                  <div class="col nopadding">
                    <p class="lead nomargin pr-4" style="float: right; font-size:1em">
                      76%
                    </p>
                  </div>
                </div>
                <div class="row mx-2" >
                  <div class="progress nopadding" style="height: 10px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 76%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="row px-3 pt-2 pb-0">

                  <p>
                    <i class="far fa-clock"></i><small class="text-muted pl-2" >33 days left</small>
                  </p>


                </div>

              </div>

          </div>
          <div class="card-footer">
              <a href="#" class="btn btn" style="background-color: rgb(50, 18, 156); color: white">Find Out More!</a>
          </div>
      </div>
  </div>


  <div class="col-lg-3 col-md-6 mb-4">
    <div class="card index-card" style="height: 90vh">
        <img class="card-img-top" src="images/cards/card4.jpeg" alt="Img" style="height:40%">
        <div class="card-body nopadding mt-2" style="margin-left:0px;">
          <div class="container nopadding">
            <div class="row ">
              <div class="col ">
                <p class="lead pl-2 nomargin " style="color: green" >
                  Funding
                </p>
              </div>
              <div class="col nopadding">
                <p class="lead nomargin pr-4" style="float: right">
                  <i class="far fa-heart "></i>
                </p>
              </div>
            </div>
            <hr>
          </div>

            <h4 class="card-title px-2">Dwarf Telescope - A portable digital telescope</h4>
            <p class="card-text px-2">
              <small style="font-size:1em">See your friends clearly from 2000 meters away</small>
            </p>
            <p class="card-text px-2 nomargin">
              <small class="text-muted" style="font-size: 1.1em">TECH AND INNOVATION</small>
            </p>

            <div class="container nopadding">
              <div class="row ">
                <div class="col ">
                  <p class="lead pl-2 nomargin " style="font-size: 1em " >
                    24,546 GHS raised
                  </p>
                </div>
                <div class="col nopadding">
                  <p class="lead nomargin pr-4" style="float: right; font-size:1em">
                    76%
                  </p>
                </div>
              </div>
              <div class="row mx-2" >
                <div class="progress nopadding" style="height: 10px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 76%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="row px-3 pt-2 pb-0">

                <p>
                  <i class="far fa-clock"></i><small class="text-muted pl-2" >33 days left</small>
                </p>


              </div>

            </div>

        </div>
        <div class="card-footer">
            <a href="#" class="btn btn" style="background-color: rgb(50, 18, 156); color: white">Find Out More!</a>
        </div>
    </div>
</div>

  </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <img src="images/img-cards/camping.jpg" style="height:30em" class="img-fluid" alt="...">
      </div>
      <div class="col">
        <img src="images/img-cards/whitehouse.jpg" style="height: 30em" class="img-fluid" alt="...">
      </div>
    </div>

    <div class="row pt-4">
      <img src="images/Screenshot (208).png"  class="img-fluid" alt="...">
    </div>

  </div>
  <div class=" my-5 mx-3">
    <h2>
      Trending Campaigns
      <hr>
    </h2>

    <div class="row text trio">

      <div class="col-lg-3 col-md-6 mb-4">
          <div class="card index-card" style="height: 90vh">
              <img class="card-img-top" src="images/cards/card1.jpg" alt="Img" style="height:40%">
              <div class="card-body nopadding mt-2" style="margin-left:0px;">
                <div class="container nopadding">
                  <div class="row ">
                    <div class="col ">
                      <p class="lead pl-2 nomargin " style="color: green" >
                        Funding
                      </p>
                    </div>
                    <div class="col nopadding">
                      <p class="lead nomargin pr-4" style="float: right">
                        <i class="far fa-heart "></i>
                      </p>
                    </div>
                  </div>
                  <hr>
                </div>

                  <h4 class="card-title px-2"style ="text-transform:capitalize;">Dwarf Telescope - A portable digital telescope</h4>
                  <p class="card-text px-2">
                    <small style="font-size:1em">See your friends clearly from 2000 meters away</small>
                  </p>
                  <p class="card-text px-2 nomargin">
                    <small class="text-muted" style="font-size: 1.1em; text-transform:uppercase;">TECH AND INNOVATION</small>
                  </p>

                  <div class="container nopadding">
                    <div class="row ">
                      <div class="col ">
                        <p class="lead pl-2 nomargin " style="font-size: 1em " >
                          24,546 GHS raised
                        </p>
                      </div>
                      <div class="col nopadding">
                        <p class="lead nomargin pr-4" style="float: right; font-size:1em">
                          76%
                        </p>
                      </div>
                    </div>
                    <div class="row mx-2" >
                      <div class="progress nopadding" style="height: 10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 76%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <div class="row px-3 pt-2 pb-0">

                      <p>
                        <i class="far fa-clock"></i><small class="text-muted pl-2" >33 days left</small>
                      </p>


                    </div>

                  </div>

              </div>
              <div class="card-footer">
                  <a href="#" class="btn btn" style="background-color: rgb(50, 18, 156); color: white">Find Out More!</a>
              </div>
          </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card index-card" style="height: 90vh">
            <img class="card-img-top" src="images/cards/card2.jpg" alt="Img" style="height:40%">
            <div class="card-body nopadding mt-2" style="margin-left:0px;">
              <div class="container nopadding">
                <div class="row ">
                  <div class="col ">
                    <p class="lead pl-2 nomargin " style="color: green" >
                      Funding
                    </p>
                  </div>
                  <div class="col nopadding">
                    <p class="lead nomargin pr-4" style="float: right">
                      <i class="far fa-heart "></i>
                    </p>
                  </div>
                </div>
                <hr>
              </div>

                <h4 class="card-title px-2">Dwarf Telescope - A portable digital telescope</h4>
                <p class="card-text px-2">
                  <small style="font-size:1em">See your friends clearly from 2000 meters away</small>
                </p>
                <p class="card-text px-2 nomargin">
                  <small class="text-muted" style="font-size: 1.1em">TECH AND INNOVATION</small>
                </p>

                <div class="container nopadding">
                  <div class="row ">
                    <div class="col ">
                      <p class="lead pl-2 nomargin " style="font-size: 1em " >
                        24,546 GHS raised
                      </p>
                    </div>
                    <div class="col nopadding">
                      <p class="lead nomargin pr-4" style="float: right; font-size:1em">
                        76%
                      </p>
                    </div>
                  </div>
                  <div class="row mx-2" >
                    <div class="progress nopadding" style="height: 10px;">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 76%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="row px-3 pt-2 pb-0">

                    <p>
                      <i class="far fa-clock"></i><small class="text-muted pl-2" >33 days left</small>
                    </p>


                  </div>

                </div>

            </div>
            <div class="card-footer">
                <a href="#" class="btn btn" style="background-color: rgb(50, 18, 156); color: white">Find Out More!</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card index-card" style="height: 90vh">
          <img class="card-img-top" src="images/cards/card3.jpg" alt="Img" style="height:40%">
          <div class="card-body nopadding mt-2" style="margin-left:0px;">
            <div class="container nopadding">
              <div class="row ">
                <div class="col ">
                  <p class="lead pl-2 nomargin " style="color: green" >
                    Funding
                  </p>
                </div>
                <div class="col nopadding">
                  <p class="lead nomargin pr-4" style="float: right">
                    <i class="far fa-heart "></i>
                  </p>
                </div>
              </div>
              <hr>
            </div>

              <h4 class="card-title px-2">Dwarf Telescope - A portable digital telescope</h4>
              <p class="card-text px-2">
                <small style="font-size:1em">See your friends clearly from 2000 meters away</small>
              </p>
              <p class="card-text px-2 nomargin">
                <small class="text-muted" style="font-size: 1.1em">TECH AND INNOVATION</small>
              </p>

              <div class="container nopadding">
                <div class="row ">
                  <div class="col ">
                    <p class="lead pl-2 nomargin " style="font-size: 1em " >
                      24,546 GHS raised
                    </p>
                  </div>
                  <div class="col nopadding">
                    <p class="lead nomargin pr-4" style="float: right; font-size:1em">
                      76%
                    </p>
                  </div>
                </div>
                <div class="row mx-2" >
                  <div class="progress nopadding" style="height: 10px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 76%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="row px-3 pt-2 pb-0">

                  <p>
                    <i class="far fa-clock"></i><small class="text-muted pl-2" >33 days left</small>
                  </p>


                </div>

              </div>

          </div>
          <div class="card-footer">
              <a href="#" class="btn btn" style="background-color: rgb(50, 18, 156); color: white">Find Out More!</a>
          </div>
      </div>
  </div>

  <div class="col-lg-3 col-md-6 mb-4">
    <div class="card index-card" style="height: 90vh">
        <img class="card-img-top" src="images/cards/card4.jpeg" alt="Img" style="height:40%">
        <div class="card-body nopadding mt-2" style="margin-left:0px;">
          <div class="container nopadding">
            <div class="row ">
              <div class="col ">
                <p class="lead pl-2 nomargin " style="color: green" >
                  Funding
                </p>
              </div>
              <div class="col nopadding">
                <p class="lead nomargin pr-4" style="float: right">
                  <i class="far fa-heart "></i>
                </p>
              </div>
            </div>
            <hr>
          </div>

            <h4 class="card-title px-2">Dwarf Telescope - A portable digital telescope</h4>
            <p class="card-text px-2">
              <small style="font-size:1em">See your friends clearly from 2000 meters away</small>
            </p>
            <p class="card-text px-2 nomargin">
              <small class="text-muted" style="font-size: 1.1em">TECH AND INNOVATION</small>
            </p>

            <div class="container nopadding">
              <div class="row ">
                <div class="col ">
                  <p class="lead pl-2 nomargin " style="font-size: 1em " >
                    24,546 GHS raised
                  </p>
                </div>
                <div class="col nopadding">
                  <p class="lead nomargin pr-4" style="float: right; font-size:1em">
                    76%
                  </p>
                </div>
              </div>
              <div class="row mx-2" >
                <div class="progress nopadding" style="height: 10px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 76%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="row px-3 pt-2 pb-0">

                <p>
                  <i class="far fa-clock"></i><small class="text-muted pl-2" >33 days left</small>
                </p>


              </div>

            </div>

        </div>
        <div class="card-footer">
            <a href="#" class="btn btn" style="background-color: rgb(50, 18, 156); color: white">Find Out More!</a>
        </div>
    </div>
</div>

  </div>
  </div>
  <div class=" mt-4 mx-3">
    <h2>
      Recently Lauched Campaigns
      <hr>
    </h2>

    <div class="row text trio">

      <div class="col-lg-3 col-md-6 mb-4">
          <div class="card index-card" style="height: 90vh">
              <img class="card-img-top" src="images/cards/card1.jpg" alt="Img" style="height:40%">
              <div class="card-body nopadding mt-2" style="margin-left:0px;">
                <div class="container nopadding">
                  <div class="row ">
                    <div class="col ">
                      <p class="lead pl-2 nomargin " style="color: green" >
                        Funding
                      </p>
                    </div>
                    <div class="col nopadding">
                      <p class="lead nomargin pr-4" style="float: right">
                        <i class="far fa-heart "></i>
                      </p>
                    </div>
                  </div>
                  <hr>
                </div>

                  <h4 class="card-title px-2">Dwarf Telescope - A portable digital telescope</h4>
                  <p class="card-text px-2">
                    <small style="font-size:1em">See your friends clearly from 2000 meters away</small>
                  </p>
                  <p class="card-text px-2 nomargin">
                    <small class="text-muted" style="font-size: 1.1em">TECH AND INNOVATION</small>
                  </p>

                  <div class="container nopadding">
                    <div class="row ">
                      <div class="col ">
                        <p class="lead pl-2 nomargin " style="font-size: 1em " >
                          24,546 GHS raised
                        </p>
                      </div>
                      <div class="col nopadding">
                        <p class="lead nomargin pr-4" style="float: right; font-size:1em">
                          76%
                        </p>
                      </div>
                    </div>
                    <div class="row mx-2" >
                      <div class="progress nopadding" style="height: 10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 76%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <div class="row px-3 pt-2 pb-0">

                      <p>
                        <i class="far fa-clock"></i><small class="text-muted pl-2" >33 days left</small>
                      </p>


                    </div>

                  </div>

              </div>
              <div class="card-footer">
                  <a href="#" class="btn btn" style="background-color: rgb(50, 18, 156); color: white">Find Out More!</a>
              </div>
          </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card index-card " style="height: 90vh">
            <img class="card-img-top" src="images/cards/card2.jpg" alt="Img" style="height:40%">
            <div class="card-body nopadding mt-2" style="margin-left:0px;">
              <div class="container nopadding">
                <div class="row ">
                  <div class="col ">
                    <p class="lead pl-2 nomargin " style="color: green" >
                      Funding
                    </p>
                  </div>
                  <div class="col nopadding">
                    <p class="lead nomargin pr-4" style="float: right">
                      <i class="far fa-heart "></i>
                    </p>
                  </div>
                </div>
                <hr>
              </div>

                <h4 class="card-title px-2">Dwarf Telescope - A portable digital telescope</h4>
                <p class="card-text px-2">
                  <small style="font-size:1em">See your friends clearly from 2000 meters away</small>
                </p>
                <p class="card-text px-2 nomargin">
                  <small class="text-muted" style="font-size: 1.1em">TECH AND INNOVATION</small>
                </p>

                <div class="container nopadding">
                  <div class="row ">
                    <div class="col ">
                      <p class="lead pl-2 nomargin " style="font-size: 1em " >
                        24,546 GHS raised
                      </p>
                    </div>
                    <div class="col nopadding">
                      <p class="lead nomargin pr-4" style="float: right; font-size:1em">
                        76%
                      </p>
                    </div>
                  </div>
                  <div class="row mx-2" >
                    <div class="progress nopadding" style="height: 10px;">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 76%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="row px-3 pt-2 pb-0">

                    <p>
                      <i class="far fa-clock"></i><small class="text-muted pl-2" >33 days left</small>
                    </p>


                  </div>

                </div>

            </div>
            <div class="card-footer">
                <a href="#" class="btn btn" style="background-color: rgb(50, 18, 156); color: white">Find Out More!</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card index-card" style="height: 90vh">
          <img class="card-img-top" src="images/cards/card3.jpg" alt="Img" style="height:40%">
          <div class="card-body nopadding mt-2" style="margin-left:0px;">
            <div class="container nopadding">
              <div class="row ">
                <div class="col ">
                  <p class="lead pl-2 nomargin " style="color: green" >
                    Funding
                  </p>
                </div>
                <div class="col nopadding">
                  <p class="lead nomargin pr-4" style="float: right">
                    <i class="far fa-heart "></i>
                  </p>
                </div>
              </div>
              <hr>
            </div>

              <h4 class="card-title px-2">Dwarf Telescope - A portable digital telescope</h4>
              <p class="card-text px-2">
                <small style="font-size:1em">See your friends clearly from 2000 meters away</small>
              </p>
              <p class="card-text px-2 nomargin">
                <small class="text-muted" style="font-size: 1.1em">TECH AND INNOVATION</small>
              </p>

              <div class="container nopadding">
                <div class="row ">
                  <div class="col ">
                    <p class="lead pl-2 nomargin " style="font-size: 1em " >
                      24,546 GHS raised
                    </p>
                  </div>
                  <div class="col nopadding">
                    <p class="lead nomargin pr-4" style="float: right; font-size:1em">
                      76%
                    </p>
                  </div>
                </div>
                <div class="row mx-2" >
                  <div class="progress nopadding" style="height: 10px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 76%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="row px-3 pt-2 pb-0">

                  <p>
                    <i class="far fa-clock"></i><small class="text-muted pl-2" >33 days left</small>
                  </p>


                </div>

              </div>

          </div>
          <div class="card-footer">
              <a href="#" class="btn btn" style="background-color: rgb(50, 18, 156); color: white">Find Out More!</a>
          </div>
      </div>
  </div>

  <div class="col-lg-3 col-md-6 mb-4">
    <div class="card index-card" style="height: 90vh">
        <img class="card-img-top" src="images/cards/card4.jpeg" alt="Img" style="height:40%">
        <div class="card-body nopadding mt-2" style="margin-left:0px;">
          <div class="container nopadding">
            <div class="row ">
              <div class="col ">
                <p class="lead pl-2 nomargin " style="color: green" >
                  Funding
                </p>
              </div>
              <div class="col nopadding">
                <p class="lead nomargin pr-4" style="float: right">
                  <i class="far fa-heart "></i>
                </p>
              </div>
            </div>
            <hr>
          </div>

            <h4 class="card-title px-2">Dwarf Telescope - A portable digital telescope</h4>
            <p class="card-text px-2">
              <small style="font-size:1em">See your friends clearly from 2000 meters away</small>
            </p>
            <p class="card-text px-2 nomargin">
              <small class="text-muted" style="font-size: 1.1em">TECH AND INNOVATION</small>
            </p>

            <div class="container nopadding">
              <div class="row ">
                <div class="col ">
                  <p class="lead pl-2 nomargin " style="font-size: 1em " >
                    24,546 GHS raised
                  </p>
                </div>
                <div class="col nopadding">
                  <p class="lead nomargin pr-4" style="float: right; font-size:1em">
                    76%
                  </p>
                </div>
              </div>
              <div class="row mx-2" >
                <div class="progress nopadding" style="height: 10px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 76%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="row px-3 pt-2 pb-0">

                <p>
                  <i class="far fa-clock"></i><small class="text-muted pl-2" >33 days left</small>
                </p>


              </div>

            </div>

        </div>
        <div class="card-footer">
            <a href="#" class="btn btn" style="background-color: rgb(50, 18, 156); color: white">Find Out More!</a>
        </div>
    </div>
</div>

  </div>
  </div>

@endsection
