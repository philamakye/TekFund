@extends('layouts.app')

<style>
    /* Mark input boxes that gets an error on validation: */
    input.invalid {
    background-color: #f89797;
    }

    /* Hide all steps by default: */
    .tab {
    display: none;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
    }

    /* Mark the active step: */
    .step.active {
    opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
    background-color:rgb(18,214,27);
    }
</style>

@section('content')
<div class="container">
<div class="row ">
    <div class="col-1">

    </div>
    <div class="col" style="background-color: #b2e6f0; border-radius:5px">
<br>
        <div class="text-center">
            <h2 style = "font-family:Comic Sans MS, cursive, sans-serif; font-size:40px; color:rgb(52, 2, 145)">PROJECT</h2>
            <!--<img src="images/healthcare.svg" class="img-fluid" alt="..." "> -->
        </div>
       <div class="row text-center">
           <center>
               <!-- the step images -->
           <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
           </center>
        </div>
        <div class="row mt-5 pt-2">
            <div class="col-3"></div>
            <div class=col>

            <form action="{{route('store project')}}" method="post" id="regForm" enctype="multipart/form-data">
                <div class="tab" id="step-1">
                    <h3 class="offset-2 mb-5" style="font-family: Snell Roundhand, cursive; margin-inline-start: 5px;font-weight:bold">
                Let's start with the basics
            </h3>
                    <label for="Default select example" style="font-size: large"><b>I am a ... ?</b></label>
                        <select class="form-select mb-5" aria-label="Default select example">
                            <option selected disabled value="" hidden>--please select--</option>
                            <option value="student">Student</option>
                            <option value="staff">Staff</option>
                            <option value="lecturer">Lecturer</option>
                        </select>

                          <label for="title" style="font-size: large"><b>Field of Project</b></label>
                          <select class="form-select mb-5" aria-label="Default select example">
                            <option selected disabled value="" hidden>--please select--</option>
                            <option value="administer">Administrative</option>
                            <option value="const">Construction</option>
                            <option value="comp">Computer Software Development</option>
                            <option value="design">Design of Plans</option>
                            <option value="equip">Equipment or System Installation</option>
                            <option value="new">New Product Development</option>
                            <option value="main">Maintenance of Process Industries</option>
                            <option value="res">Research</option>
                            <option value="others">Others</option>
                        </select>

                        <label for="title" style="font-size: large"><b>What is your fundraiser title?</b></label>
                        <input oninput="this.className = 'form-control'" type="text" id="inputPassword5" placeholder="Ex: Help Stevenson get a new brain" class="form-control" aria-describedby="passwordHelpBlock">
                        <div id="passwordHelpBlock" class="form-text mb-4">
                            <i class="fas fa-exclamation-circle"></i> Try to include a person's name and the purpose.
                        </div>
                        <p><small> By continuing, you agree to Tekfund's  <a href="#" style="text-decoration: none;">Conditions of Use</a> and <a href="#" style="text-decoration: none;">Privacy Notice</a>.</small></p>
                </div>

                <div class="tab" id="step-2">
                    <h3 class="offset-2 mb-5" style="font-family: Snell Roundhand, cursive; margin-inline-start: 5px;font-weight:bold">
                Set your fundraising goal
            </h3>
                    <label for="title" style="font-size: large"><b>How much would you like to raise?</b></label>
                    <input type="number" min="200" oninput="validity.valid||(value='');" id="inputPassword5" placeholder="Enter Target Amount in GHC" class="form-control" aria-describedby="passwordHelpBlock">
                    <div id="passwordHelpBlock" class="form-text mb-4">
                            <i class="fas fa-exclamation-circle"></i> Minimum target amount that can be set is GHC 200.
                        </div>

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
                      <input type="number" min="10" oninput="validity.valid||(value='');" id="inputPassword5" placeholder="Set Campaign duration in Days" class="form-control" aria-describedby="passwordHelpBlock">
                      <div id="passwordHelpBlock" class="form-text mb-4">
                            <i class="fas fa-exclamation-circle"></i> Minimum campaign duration that can be set is 10 days.
                        </div>                      <h4 class="mb-5">
                          <small class="text-muted">
                            Duration begins after campaign goes online
                          </small>
                      </h4>
                </div>

                <div class="tab" id="step-3">
                    <h3 class="offset-2 mb-5" style="font-family: Snell Roundhand, cursive; margin-inline-start: 5px;font-weight:bold">
                Add a Cover Photo Or Video
            </h3>
                <h4 class="text-muted mb-5">A high-quality photo or video will help tell your story and build trust with donors</h4>

                    <div class="mb-5" style="border-style: dashed">
                        <div class="my-3 px-3 text-center">
                            <label for="formFile" class="form-label">Select a photo that best describes your campiagn</label>
                            <input class="form-control" type="file" id="formFile">
                          </div>
                    </div>
                    <div class="container">
                        <div class="row">
                          <div class="col">
                            <hr>
                          </div>
                          <div class="col-1 text-center">
                            OR
                          </div>
                          <div class="col">
                            <hr>
                          </div>
                        </div>
                      </div>

                     <div class="input-group input-group mt-1 mb-3">
                     <input type="url" class="form-control" aria-label="Sizing example input" placeholder="Add a youtube link" aria-describedby="inputGroup-sizing-default">
                     </div>
                </div>

                <div class="tab" id="step-4">
                    <h3 class="offset-2 mb-5" style="font-family: Snell Roundhand, cursive; margin-inline-start: 5px;font-weight:bold">
                Tell Your Story
            </h3>
                   <div class="mb-3">
             <textarea name="story" id="" cols="50" rows="10">

             </textarea>
            </div>
                </div>
                <div class="tab" id="step-5">
                    <h3 class="offset-2 mb-5" style="font-family: Snell Roundhand, cursive; margin-inline-start: 5px;font-weight:bold">
                You're Almost There!
            </h3>
                     <h5 class="text-muted"> <i class="fas fa-lock"></i> We just need a little more information before you can accept donations</h5>

           <label for="title" style="font-size: large"><b>Full Name</b></label>
           <input oninput="this.className = 'form-control'" type="text" id="inputPassword5"  class="form-control mb-5" aria-describedby="passwordHelpBlock">

           <label for="Default select example" style="font-size: large"><b>Project Prototype</b></label>
           <div class="mb-5" style="border-style: dashed">
            <div class="my-3 px-3 text-center">
                <label for="formFile" class="form-label">Add an image or video of project protoype</label>
                <input class="form-control" type="file" id="formFile">
              </div>
        </div>

           <label for="Default select example" style="font-size: large"><b>Project Plan</b></label>
           <div class="mb-5" style="border-style: dashed">
            <div class="my-3 px-3 text-center">
                <label for="formFile" class="form-label">Upload a PDF file of your project plan</label>
                <input class="form-control" type="file" id="formFile">
              </div>
        </div>
                </div>

                <div style="overflow:auto;">
                    <div style="float:right;">
                        <a id="nextBtn" type="button" role="button" onclick="nextPrev(1)" style="font-size:xx-large; color:rgb(18,214,27);" ><i class="fas fa-arrow-circle-right"></i></a>
                        <button type="submit" class="btn btn-primary mb-2" id="submitBtn" style="background-color:rgb(18, 214, 27); margin-top: 10px; margin-right: 20px;">Complete Fundraiser</button>
                    </div>
                    <div style="float:left;">
                        <a type="button" role="button" id="prevBtn" onclick="nextPrev(-1)" style="font-size:xx-large; color:rgb(44, 20, 124); " ><i class="fas fa-arrow-circle-left"></i></a>
                    </div>
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

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
    // This function will display the specified tab of the form ...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    // ... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").style.display = "none";
        document.getElementById("submitBtn").style.display = "inline";
        //add a property to submit the form to the desired link
    } else {
        // document.getElementById("nextBtn").innerHTML = "Next";
        document.getElementById("submitBtn").style.display = "none";
        document.getElementById("nextBtn").style.display = "inline";

    }
    // ... and run a function that displays the correct step indicator:
    fixStepIndicator(n)
    }

    function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form... :
    if (currentTab >= x.length) {
        //...the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
    }

    function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, z, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    z = x[currentTab].getElementsByTagName("select");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false:
        valid = false;
        }
    }

    // A loop that checks every select field in the current tab:
    for (i=0; i<z.length; i++){
        // if the select field has no value
        if(z[i].value == ""){
            //add an "invalid" class to the field:
            z[i].classname += " invalid";
            //set the current valid status to false
            valid = false;
        }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
    }

    function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class to the current step:
    x[n].className += " active";
    }

</script>
@endsection
