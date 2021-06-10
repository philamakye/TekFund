<style>
  .carousel img{
height: 35em;

  }
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
    
    <div class="row text-center trio">

      <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-100">
              <img class="card-img-top" src="images/cards/card1.jpg" alt="Img" style="height:40%">
              <div class="card-body">
                <div class="container mt-0">
                  <div class="row my-0">
                    <div class="col mt-0">
                      <p class="lead ml-0">
                        Funding
                      </p>
                    </div>
                    <div class="col">
                      <p class="lead mr-0">
                        <i class="far fa-heart"></i>
                      </p>
                    </div>
                  
                  </div>  
                   <hr>
                </div>
             
                  <h4 class="card-title">Dwarf Telescope - A portable digital telescope</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
              </div>
              <div class="card-footer">
                  <a href="#" class="btn btn-primary">Find Out More!</a>
              </div>
          </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-100" ">
              <img class="card-img-top" src="images/cards/card2.jpg" alt="Img" style="height:40%">
              <div class="card-body">

                <div class="container mt-0">
                  <div class="row my-0">
                    <div class="col mt-0">
                      <p class="lead ml-0">
                        Funding
                      </p>
                    </div>
                    <div class="col">
                      <p class="lead mr-0">
                        <i class="far fa-heart"></i>
                      </p>
                    </div>
                  
                  </div>  
                   <hr>
                </div>

                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
              </div>
              <div class="card-footer">
                  <a href="#" class="btn btn-primary">Find Out More!</a>
              </div>
          </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-100">
              <img class="card-img-top" src="images/cards/card3.jpg" alt="Img" style="height: 40%">
              <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
              </div>
              <div class="card-footer">
                  <a href="#" class="btn btn-primary">Find Out More!</a>
              </div>
          </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-100">
              <img class="card-img-top" src="images/cards/card4.jpeg" alt="Img" style="height:40%">
              <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
              </div>
              <div class="card-footer">
                  <a href="#" class="btn btn-primary">Find Out More!</a>
              </div>
          </div>
      </div>

  </div>
 
  



  </div>
  


@endsection