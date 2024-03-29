@extends('layouts.app')

<style>
    main{
        padding-top: 0 !important;
        margin-bottom: 0px !important;
        color: white !important;

    }
     body{
        background-color: #03989E !important;
    }
    /* Mark input boxes that gets an error on validation: */
    input.invalid {
    background-color: #f89797;
    }

    /* Hide all steps by default: #ffdddd*/
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
<div class="container-fluid">
<div class="row ">
    <div class="col-1" style="background-color:#03989E;">

    </div>
    <div class="col" style="background-color: #03989E;">
<br>
        <div class="text-center">
            <h2 style = "font-family:Candara; font-size:40px; color:rgb(52, 2, 145)">START UP</h2>
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
            <div class="col-1"></div>
            <div class=col>

            <form action="{{route('store-campaign')}}" method="POST" id="regForm" enctype="multipart/form-data">
                @csrf
                <div class="tab" id="step-1">
                    <h3 class="offset-2 mb-5" style="font-family: Snell Roundhand, cursive; margin-inline-start: 5px;font-weight:bold">
                Let's start with the basics
            </h3>
                    <label for="Default select example" style="font-size: large">I am a ... ?</label>
                        <select class="form-select mb-5" name="starter" aria-label="Default select example">
                            <option selected disabled value="" hidden>--please select--</option>
                            <option value="student">Student</option>
                            <option value="staff">Staff</option>
                            <option value="lecturer">Lecturer</option>
                        </select>

                        <label for="Default select example2" style="font-size: large">Category of Business</label>
                        <select class="form-select mb-5" name="business_cate" aria-label="Default select example2">
                            <option selected disabled value="" hidden>--please select--</option>
                            <option value="Retailing">Retailing</option>
                            <option value="Distribution">Distribution</option>
                            <option value="Food Service">Food Service</option>
                            <option value="Manufacturing">Manufacturing</option>
                            <option value="Investment">Investment</option>
                            <option value="Others">Others</option>

                        </select>

                        <label for="title" style="font-size: large">What is your fundraiser title?</label>
                        <input oninput="this.className = 'form-control'" maxlength="70" name="title" type="text" id="inputdetail1" placeholder="Ex: Help Stevenson get a new brain" class="form-control" aria-describedby="passwordHelpBlock">
                        <div id="passwordHelpBlock" class="form-text mb-4">
                            <i class="fas fa-exclamation-circle"></i> <span style="color:red; font-weight:100;">Try to include a person's name and the purpose.</span>
                        </div>
                        <p><small> <span style="font-weight:200;">By continuing, you agree to Tekfund's</span>  <a href="#" style="color:white">Conditions of Use</a> and <a href="#" style="color:white">Privacy Notice</a></small></p>
                </div>

                <div class="tab" id="step-2">
                    <h3 class="offset-2 mb-5" style="font-family: Snell Roundhand, cursive; margin-inline-start: 5px;font-weight:bold">
                Set your fundraising goal
            </h3>
                    <label for="title" style="font-size: large">How much would you like to raise?</label>
                    <input type="text" min="200" name="target" oninput="validity.valid||(value='');" id="inputdetail2" placeholder="Enter Target Amount in GHC" class="form-control" aria-describedby="passwordHelpBlock">
                    <div id="passwordHelpBlock" class="form-text mb-4">
                            <i class="fas fa-exclamation-circle"></i> <span style="color:red; font-weight:100;">Minimum target amount that can be set is GHC 200.</span>
                        </div>

                      <h4 class="mb-5">
                        <small class="text-muted" style="color: rgb(241, 237, 237) !important;">Keep in mind that transaction fees including credit and debit charges, are deducted from each donation
                        <br><br>
                        To receive money raised, please make sure the person withdrawing has:  <br><br>
                        <i class="fas fa-arrow-circle-right"></i> Valid National ID <br><br>
                        <i class="fas fa-arrow-circle-right"></i> Valid School ID <br><br>
                        <i class="fas fa-arrow-circle-right"></i> An active email address
                        </small>
                      </h4>
                      <label for="title" style="font-size: large">Campaign Duration</label>
                      <input type="text" name="duration" min="10" oninput="validity.valid||(value='');" id="inputdetail3" placeholder="Set Campaign duration in Days" class="form-control" aria-describedby="passwordHelpBlock">
                      <div id="passwordHelpBlock" class="form-text mb-4">
                            <i class="fas fa-exclamation-circle"></i> <span style="color:red; font-weight:100;">Minimum campaign duration that can be set is 10 days.</span>
                        </div>                      <h4 class="mb-5">
                          <small class="text-muted" style="color:white !important">
                            Please note that the campaign officially begins immediately after it has been verified.
                          </small>
                      </h4>
                </div>

                <div class="tab" id="step-3">
                    <h3 class="offset-2 mb-5" style="font-family: Snell Roundhand, cursive; margin-inline-start: 5px;font-weight:bold">
                Add a Cover Photo Or Video
            </h3>
                    <h5 class="text-muted mb-5" style="color:white !important">A high-quality photo or video will help tell your story and build trust with donors</h5>

                    <div class="mb-5" style="border-style: dashed">
                        <div class="my-3 px-3 text-center">
                            <label for="formFile" class="form-label">Select a photo that best describes your campiagn</label>
                            <input class="form-control" name="cover_img" type="file" id="formFile">
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
                     <input type="url" id="tubeUrl" name="camp_youtubelink" class="form-control" aria-label="Sizing example input" placeholder="Add a youtube link" aria-describedby="inputGroup-sizing-default">
                     </div>
<br>
                </div>

                <div class="tab" id="step-4">
                    <h3 class="offset-2 mb-5" style="font-family: Snell Roundhand, cursive; margin-inline-start: 5px;font-weight:bold">
                Tell Your Story
            </h3>
                  <div class="mb-3">
             <textarea name="story" id="story" style ="border-radius: 5px; box-shadow:1px 1px 1px; line-height:1.5;border-color:rgb(80, 77, 77)" cols="75" rows="15" required>

             </textarea>

            </div>
                </div>
                <div class="tab" id="step-5">
                    <h3 class="offset-2 mb-5" style="font-family: Snell Roundhand, cursive; margin-inline-start: 5px;font-weight:bold">
                You're Almost There!
            </h3>
                    <h5 class="text-muted" style="color: rgb(241, 237, 237) !important"> <i class="fas fa-lock"></i> We just need a little more information before you can accept donations</h5>

           <label for="title" style="font-size: large; margin:13px">Full Name</label>
           <input oninput="this.className = 'form-control'" name="full_name" type="text" id="inputdetail4" placeholder="Enter your name"  class="form-control mb-5" aria-describedby="passwordHelpBlock">
<br>
           <label for="title" style="font-size: large; margin:13px">Name of Startup Business</label>
           <input oninput="this.className = 'form-control'" name="business_name" type="text" id="inputdetail5" placeholder="Enter the name of your start up"  class="form-control mb-5" aria-describedby="passwordHelpBlock">

<br>
           <label for="Default select example" style="font-size: large; margin:13px">Business Plan</label>
           <div class="mb-5" style="border-style: dashed">
            <div class="my-3 px-3 text-center">
                <label for="formFile" class="form-label">Upload a PDF file of business plan. Must include budget</label>
                <input class="form-control" type="file" id="formFile" name="business_plan">
              </div>
        </div>
                </div>

                <div style="overflow:auto;">
                    <div style="float:right;">
                        <a id="nextBtn" type="button" role="button" onclick="nextPrev(1)" style="font-size:xx-large; color:rgb(18,214,27);" ><i class="fas fa-arrow-circle-right"></i></a>
                        <button type="submit" style=" background-color:rgb(18, 214, 27); margin:15px; color:white; border:none;float:right; padding:5px;margin-bottom:20px; text-decoration:none; border-radius:7px" id="submitBtn">Submit Application</button>
                    </div>
                    <div style="float:left;">
                        <a type="button" role="button" id="prevBtn" onclick="nextPrev(-1)" style="font-size:xx-large; color:rgb(44, 20, 124); margin:15px " ><i class="fas fa-arrow-circle-left"></i></a>
                    </div>
                </div>
            </form>
            </div>



    </div>
</div>
<div class="col-4" style="background-color: #03989E;">
    <div class="card" style="width: 18rem; float:right;margin-top:20%">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <div class="container">
                <div class="row">
                  <div class="col nomargin nopadding">
                    Tekfund Startup campaign policy
                  </div>
                  <div class="col-2 nomargin nopadding">
                    <img src="/images/profile.jpg" style="height: 2.5em; border-radius: 30px;" class="img-fluid" alt="...">
                  </div>
                </div>
              </div>
          </li>
          <li class="list-group-item">You will only be able to withdraw if campaign reaches or exceeds 70% completion and after campaign period is reached  </li>
        </ul>
      </div>


      <div class="card" style="width: 18rem; float:right;margin-top:15%">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <div class="container">
                <div class="row">
                  <div class="col nomargin nopadding">
                    To raise the most money for a startup campaign, make sure you:
                  </div>
                </div>
              </div>
          </li>
          <li class="list-group-item">
               <a><i class="far fa-check-circle" style="color: #03989E"></i> Describe your business idea</a><br>
               <a><i class="far fa-check-circle" style="color: #03989E"></i> Explain how the fundswould be used in pursuance of your idea</a><br>
               <a><i class="far fa-check-circle" style="color: #03989E"></i> Explain how soon need the funds</a><br>
               <a><i class="far fa-check-circle" style="color: #03989E"></i> Explain if there are other ways you need help</a>


        </li>

        </ul>
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
    var x, y, i, z,a, valid = true, youtube_link;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    z = x[currentTab].getElementsByTagName("select");
    a = $('#tubeUrl');
    b = $('#story');
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

    //validating youtube_link
    if (x[currentTab].id == "step-3"){
        youtube_link = validateYouTubeUrl();
        if (youtube_link){
            valid = true;
        } else{
            valid = false;
            a.classname += " invalid";
        }
    }

    //validating the textarea
    if (b.value === ""){
        b.classname += " invalid";
        valid = false;
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
    function validateYouTubeUrl()
{
    var url = $('#tubeUrl').val();
        if (url != undefined || url != '') {
            var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=|\?v=)([^#\&\?]*).*/;
            var match = url.match(regExp);
            if (match && match[2].length == 11) {
                // Do anything for being valid
                // if need to change the url to embed url then use below line
                $('#ytplayerSide').attr('src', 'https://www.youtube.com/embed/' + match[2] + '?autoplay=0');
                return true;
            }
            else {
                // Do anything for not being valid
                return false;
            }
        }
}

</script>

<script>
    document.querySelector('#inputdetail1').addEventListener('keypress',preventEnterSubmit);
    document.querySelector('#inputdetail2').addEventListener('keypress',preventEnterSubmit);
    document.querySelector('#inputdetail3').addEventListener('keypress',preventEnterSubmit);
    document.querySelector('#tubeUrl').addEventListener('keypress',preventEnterSubmit);
    document.querySelector('#inputdetail4').addEventListener('keypress',preventEnterSubmit);
    document.querySelector('#inputdetail5').addEventListener('keypress',function(e){
        e.preventDefault();
    });

    function preventEnterSubmit(e){
        if(e.key === 'Enter'){
          e.preventDefault();
          document.getElementById('nextBtn').click();
    }


}

</script>


@endsection
