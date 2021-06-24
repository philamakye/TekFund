@extends('layouts.app')

@section('content')

<div class="container">
<div class="row ">
    <div class="col-1">

    </div>
    <div class="col" style="background-color: rgb(250, 244, 233)">

        <div class="text-center">
            <h2 style = "font-family:Comic Sans MS, cursive, sans-serif; font-size:40px; color:rgb(52, 2, 145)">OTHERS</h2>
            <!--<img src="images/healthcare.svg" class="img-fluid" alt="..." "> -->
        </div>
       <div class="row text-center">
           <center>
           <img src="images/filled.svg"  style="width: 8em" class="img-fluid" alt="...">
           <img src="images/unfilled.svg" style="width: 8em" class="img-fluid" alt="...">
           <img src="images/unfilled.svg" style="width: 8em" class="img-fluid" alt="...">
           <img src="images/unfilled.svg" style="width: 8em" class="img-fluid" alt="...">
           <img src="images/unfilled.svg" style="width: 8em" class="img-fluid" alt="...">
           </center>
        </div>
        <div class="row mt-5 pt-2">
            <div class="col-3"></div>
            <div class=col>
            <h3 class="offset-2 mb-5">
                Let's start with the basics
            </h3>
            <form action="" method="post">
            <label for="Default select example" style="font-size: large"><b>I am a ... ?</b></label>
                <select class="form-select mb-5" aria-label="Default select example">
                    <option selected hidden>User type</option>
                    <option value="student">Student</option>
                    <option value="staff">Staff</option>
                    <option value="lecturer">Lecturer</option>
                  </select>

                  <label for="Default select example2" style="font-size: large"><b>Who are you crowdfunding for? </b></label>
                  <select class="form-select mb-5" aria-label="Default select example2">
                      <option selected hidden>Benefactor</option>
                      <option value="self">Self</option>
                      <option value="others">Others</option>
                  </select>

                  <label for="title" style="font-size: large"><b>What is your fundraiser title?</b></label>
                  <input type="text" id="inputPassword5" placeholder="Ex: Help Stevenson get new testicles" class="form-control" aria-describedby="passwordHelpBlock">
                  <div id="passwordHelpBlock" class="form-text mb-4">
                    <i class="fas fa-exclamation-circle"></i> Try to include a person's name and the purpose.
                  </div>
                  <p><small> By continuing, you agree to Tekfund's  <a href="#" style="text-decoration: none;">Conditions of Use</a> and <a href="#" style="text-decoration: none;">Privacy Notice</a>.</small></p>

                  <div>
                      <a type="submit" href = "{{route('healthcare-step 2')}}" style="font-size:xx-large; color:turquoise; float:right" ><i class="fas fa-arrow-circle-right"></i></a>
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
