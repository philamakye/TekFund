<style>


</style>

@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row text-center">
        <div class="col-1">
         
        </div>

        <div class="col">
            <div>
                <img src="images/startcampaign.svg" class="img-fluid" alt="..." style="height: 15em">
            </div>
            <div>
                <img src="images/welcome.svg" class="img-fluid" alt="..." style="height: 5em">
            </div>
            <div>
                <img src="images/purpose.svg" class="img-fluid" alt="..." style="height: 3em">
            </div>
        </div>
        <div class="col-1">
          
        </div>
      </div>
      
      <div class="row text-center my-3 pt-4">
      <div class="col"> 
          <center>
        <div class="card " style="width: 20rem; height:16rem; background-color:rgb(245, 241, 241)" >
            <div class="card-body">
              <h5 class="card-title"><b>Health Care</b></h5>
              <img src="https://img.icons8.com/emoji/48/000000/hospital-emoji.png"/>
              <p class="card-text">Tekfund is a crowdfunding platform which helps individuals with health related issues to begin fund raising campaigns</p>
              <h6 class="card-subtitle mb-2 text-muted">0% Platform fee</h6>
              <a class="TekFund" style="font-size: 2em">
                <text id="TekFund" style=" color:#707070; text-decoration:none;  font-family:CooperBlack, Cooper "><tspan x="-161.875" y="0">TekFund</tspan></text>
              </a>
              
            </div>
          </div>
          </center>
      </div>
      <div class="col">
          <center>
            <div class="card " style="width: 20rem; height:16rem; background-color:rgb(245, 241, 241)" >
                <div class="card-body">
                  <h5 class="card-title"><b>Start Up</b></h5>
                  <img src="https://img.icons8.com/bubbles/50/000000/growing-money.png"/>
                  <p class="card-text">Tekfund is a trusted social platform where users can start croudfouding campaigns to support a startup</p>
                  <h6 class="card-subtitle mb-2 text-muted">5% Platform fee</h6>
                  <a class="TekFund" style="font-size: 2em">
                    <text id="TekFund" style=" color:#707070; text-decoration:none;  font-family:CooperBlack, Cooper "><tspan x="-161.875" y="0">TekFund</tspan></text>
                  </a>
                  
                </div>
              </div>
          </center>
      </div>

      </div>

      <div class="row text-center mt-5">
        <div class="col"> 
            <center>
                <div class="card " style="width: 20rem; height:17rem; background-color:rgb(245, 241, 241)" >
                    <div class="card-body">
                      <h5 class="card-title"><b>Project</b></h5>
                      <img src="https://img.icons8.com/dusk/64/000000/microsoft-project.png"/>
                      <p class="card-text">Tekfund is a crowdfunding platform which helps individuals with bright project ideas to bring their ideas into being</p>
                      <h6 class="card-subtitle mb-2 text-muted">5% Platform fee</h6>
                      <a class="TekFund" style="font-size: 2em">
                        <text id="TekFund" style=" color:#707070; text-decoration:none;  font-family:CooperBlack, Cooper "><tspan x="-161.875" y="0">TekFund</tspan></text>
                      </a>
                      
                    </div>
                  </div>
            </center>
        </div>
        <div class="col">
            <center>
                <div class="card " style="width: 20rem; height:17rem; background-color:rgb(245, 241, 241)" >
                    <div class="card-body">
                      <h5 class="card-title"><b>Others</b></h5>
                      <img src="https://img.icons8.com/dusk/64/000000/money.png"/>
                      <p class="card-text">Tekfund is a trusted social platform where users can start croudfouding campaigns to support various other causes</p>
                      <h6 class="card-subtitle mb-2 text-muted">8% Platform fee</h6>
                      <a class="TekFund" style="font-size: 2em">
                        <text id="TekFund" style=" color:#707070; text-decoration:none;  font-family:CooperBlack, Cooper "><tspan x="-161.875" y="0">TekFund</tspan></text>
                      </a>
                      
                    </div>
                  </div>
            </center>
        </div>
  
        </div>


</div>



@endsection