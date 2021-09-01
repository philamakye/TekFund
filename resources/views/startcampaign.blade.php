
<style>
.search-bar, .about-css {
    display: none !important;
}

.camp-card:hover{
  box-shadow: 3px 3px 0 #e0e0e0;
  background-color: white !important;
  color: #fff !important;
  margin-left: 20px;
  transition: 1s;
}
 .camp-card:hover text{
  color: turquoise !important;
  text-decoration: none;
}
/* .container{
background-color: #e3e0cd;
} */
/* .main */
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
      @include('layouts.flash')
      <div class="row text-center my-3 pt-4">
      <div class="col">
          <center>
        <a href = "{{route('healthcare')}}" style="text-decoration: none; color:black">
            <div class="card camp-card" style="width: 20rem; height:16rem; background-color:white; border:none;box-shadow: 0 0.5rem 1.5rem 0 rgb(0 0 0 / 10%)" >
            <div class="card-body" >
              <h5 class="card-title"><b>Health Care</b></h5>
              <img src="https://img.icons8.com/emoji/48/000000/hospital-emoji.png"/>
              <p class="card-text">Begin a campaign to raise funds to address health concerns.</p>
              <h6 class="card-subtitle mb-2 text-muted">0% Platform fee</h6>
              <a class="TekFund" style="font-size: 2em; text-decoration:none;">
                <text class="tekfund" id="TekFund" style=" color:#707070; text-decoration:none;  font-family:CooperBlack, Cooper "><tspan x="-161.875" y="0">TekFund</tspan></text>
              </a>

            </div>
          </div>
        </a>
          </center>
      </div>
      <div class="col">
          <center>
           <a href = "{{route('Start Up')}}"style="text-decoration: none; color:black"> <div class="card camp-card" style="width: 20rem; height:16rem; background-color:white; border:none;box-shadow: 0 0.5rem 1.5rem 0 rgb(0 0 0 / 10%)" >
                <div class="card-body">
                  <h5 class="card-title"><b>Start Up</b></h5>
                  <img src="https://img.icons8.com/bubbles/50/000000/growing-money.png"/>
                  <p class="card-text">Start a campaign to fund a business or a research project you are passionate about.</p>
                  <h6 class="card-subtitle mb-2 text-muted">5% Platform fee</h6>
                  <a class="TekFund" style="font-size: 2em; text-decoration:none;">
                    <text id="TekFund" style=" color:#707070; text-decoration:none;  font-family:CooperBlack, Cooper "><tspan x="-161.875" y="0">TekFund</tspan></text>
                  </a>

                </div>
              </div>
           </a>
          </center>
      </div>

      </div>

      <div class="row text-center mt-5">
        <div class="col">
            <center>
              <a href = "{{route('project')}}" style="text-decoration: none; color:black">  <div class="card camp-card" style="width: 20rem; height:17rem; background-color:white; border:none;box-shadow: 0 0.5rem 1.5rem 0 rgb(0 0 0 / 10%)" >
                    <div class="card-body">
                      <h5 class="card-title"><b>Project</b></h5>
                      <img src="https://img.icons8.com/dusk/64/000000/microsoft-project.png"/>
                      <p class="card-text">We can assist you to raise funds for projects and innovative ideas.</p>
                      <h6 class="card-subtitle mb-2 text-muted">5% Platform fee</h6>
                      <a class="TekFund" style="font-size: 2em; text-decoration:none;">
                        <text id="TekFund" style=" color:#707070; text-decoration:none;  font-family:CooperBlack, Cooper "><tspan x="-161.875" y="0">TekFund</tspan></text>
                      </a>

                    </div>
                  </div>
                </a>
            </center>
        </div>
        <div class="col">
            <center>
               <a href = "{{route('Others')}}" style="text-decoration: none; color:black"> <div class="card camp-card" style="width: 20rem; height:17rem; background-color:white; border:none;box-shadow: 0 0.5rem 1.5rem 0 rgb(0 0 0 / 10%)" >
                    <div class="card-body">
                      <h5 class="card-title"><b>Social</b></h5>
                      <img src="https://img.icons8.com/dusk/64/000000/money.png"/>
                      <p class="card-text">Create campaigns for social events such as funerals and weddings and other purposes.</p>
                      <h6 class="card-subtitle mb-2 text-muted">8% Platform fee</h6>
                      <a class="TekFund" style="font-size: 2em; text-decoration:none;">
                        <text class="camp-card" id="tek" style=" color:#707070; text-decoration:none;  font-family:CooperBlack, Cooper "><tspan x="-161.875" y="0">TekFund</tspan></text>
                      </a>

                    </div>
                  </div>
                </a>
            </center>
        </div>

        </div>


</div>



@endsection
