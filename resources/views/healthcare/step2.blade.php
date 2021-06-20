@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row ">
        <div class="col-1">

        </div>
        <div class="col" style="background-color: rgb(250, 244, 233)">

            <div class="text-center">
                <img src="images/healthcare.svg" class="img-fluid" alt="..." ">
            </div>
           <div class="row text-center">
               <center>
                <img src="images/filled.svg"  style="width: 8em" class="img-fluid" alt="...">
               <img src="images/filled.svg"  style="width: 8em" class="img-fluid" alt="...">
               <img src="images/unfilled.svg" style="width: 8em" class="img-fluid" alt="...">
               <img src="images/unfilled.svg" style="width: 8em" class="img-fluid" alt="...">
               <img src="images/unfilled.svg" style="width: 8em" class="img-fluid" alt="...">
               </center>
            </div>
            <div class="row mt-5 pt-2">
                <div class="col-3"></div>
                <div class=col>
                <h3 class="offset-2 mb-5">
                   Set your fundraising goal
                </h3>
                <form action="" method="post">
                    <label for="title" style="font-size: large"><b>How much would you like to raise?</b></label>
                    <input type="text" id="inputPassword5" placeholder="Enter goal amount in GHS" class="form-control mb-4" aria-describedby="passwordHelpBlock">


                      {{-- <label for="Default select example2" style="font-size: large"><b>Who are you crowdfunding for? </b></label>
                      <select class="form-select mb-5" aria-label="Default select example2">
                          <option selected hidden>Benefactor</option>
                          <option value="self">Self</option>
                          <option value="others">Others</option>
                      </select> --}}

                      <h4 class="mb-5">
                        <small class="text-muted">Keep in mind that transaction fees including credit and debit charges, are deducted from each donation
                        <br><br>
                        To receive money raised, please make sure the person withdrawing has:  <br><br>
                        <i class="fas fa-arrow-circle-right"></i> Valid National ID <br><br>
                        <i class="fas fa-arrow-circle-right"></i> Valid School ID <br><br>
                        <i class="fas fa-arrow-circle-right"></i> An active email address
                        </small>
                      </h4>
                      <label for="title" style="font-size: large"><b>Campaign Duration</b></label>
                      <input type="text" id="inputPassword5" placeholder="Days" class="form-control" aria-describedby="passwordHelpBlock">
                      <h4 class="mb-5">
                          <small class="text-muted">
                            Duration begins after campaign goes online
                          </small>
                      </h4>






                      <div>
                        <a type="button" href = "{{route('healthcare')}}" style="font-size:xx-large; color:rgb(44, 20, 124); " ><i class="fas fa-arrow-circle-left"></i></a>
                          <a type="submit" style="font-size:xx-large; color:turquoise; float:right" ><i class="fas fa-arrow-circle-right"></i></a>
                      </div>

                    </form>
                </div>
                <div class="col-3"></div>
            </div>

        </div>
        <div class="col-1">

        </div>
    </div>

    </div>



@endsection
