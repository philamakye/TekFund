@extends('layouts.app')

@section('content')
<div class="container">
<div class="row ">
    <div class="col-1">

    </div>
    <div class="col">
            <option value=""></option>
        <div class="text-center">
            <img src="images/healthcare.svg" class="img-fluid" alt="..." ">
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
            <div class="col-1"></div>
            <div class=col>
            <h3 class="offset-2 mb-5">
                Let's start with the basics
            </h3>
            <form action="" method="post">
            <label for="Default select example" style="font-size: large"><b>I am a ... ?</b></label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>User type</option>
                    <option value="student">Student</option>
                    <option value="staff">Staff</option>
                    <option value="lecturer">Lecturer</option>
                  </select>



            </form>
            </div>
            <div class="col"></div>
        </div>

    </div>
    <div class="col-1">

    </div>
</div>

</div>


@endsection