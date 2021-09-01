<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/css/jQuery-plugin-progressbar.css">
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="/js/jQuery-plugin-progressbar.js"></script>
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
    .avatars {
  vertical-align: middle;
  width: 150px;
  height: 150px;
  border-radius: 50%;
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #301783;
  color: white;
}
    </style>
@extends('layouts.app')

@section('content')

                <div class="card my-4 mx-3">
                    <div class="card-header" style="text-transform: uppercase; font-weight:bolder;">{{ $mydetails->title }}</div>
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col">
                                <h3 style="text-transform: capitalize;">{{ $mydetails->title }}</h3>
                                  @if(isset($contris))
                                  <div class="progress-bar position"  data-percent="{{ $contris->percent }}" data-color="#aadcf5,#12b321"></div>
                                 @else
                                <div class="progress-bar position"  data-percent="00" data-color="#aadcf5,#12b321"></div>
                                @endif
                             </div>
                                <div class="col mt-2 pt-5">
                                <p>Campaign Starter</p>
                                <p>Target Amount</p>
                                 <p>Duration of Campaign</p>
                                 <p>Amount raised</p>
                                 <p>Days Remaining</p>

                                 @if (!empty($mydetails->hospital_name))
                                <p>Name of Hospital</p>
                                 @endif

                                </div>
                                <div class="col mt-2 pt-5">
                                <p> {{ $mydetails->full_name }}</p>
                                <p>GHC {{ $mydetails->target }}</p>
                                <p>{{ $mydetails->duration }} days</p>
                                 @if (isset($contris))
                                  <p>GHC {{ $contris->total_amount}}</p>
                                @else
                                <p>GHC 0</p>
                                @endif
                               <p>{{ \Carbon\Carbon::parse($mydetails->updated_at)->addDays($mydetails->duration)->diffInDays() }} days</p>

                                <p>{{$mydetails->hospital_name}}</p>

                                </div>
                            </div>

                                <br>
                                <br>

                              <div class="container">
                                <div class="row">
                                 <div class="col-1"></div>
                                 <div class="col"><hr></div>
                                 <div class="col-1"></div>
                                </div>
                                </div>
                            <br>
                            <br>
                            <br>
                         <div class="row align-items-start">
                                <center> <h3> Account Details</h3></center>
                          <h3 style="margin-left:3%; text-transform:lowercase;">{{ $sch_id->username }} </h3>
                          <div class="col-sm-2 py-1">
                              @if (!empty($sch_id->pro_image))
                            <img src="{{asset('storage/images/'.$sch_id->pro_image)}}" class="avatars" alt="avt">
                               @else
                           <img src="{{asset('storage/avatar.png' )}}" class="avatars" alt="avt">
                           @endif
                              </div>
                                 <br>
                                 <br>
                                <div class="col"style="text-align:left; margin-left:20%">
                                    <p>School ID Number</p>
                                    <p>City</p>
                                    <p>Country:</p>
                                    <p>Phone Number</p>

                                </div>
                                <div class="col" style="text-align: left;">

                                    <p>{{$sch_id->school_id}}</p>
                                    <p>{{$sch_id->city}}</p>
                                    <p>{{ $sch_id->country }}</p>
                                    <p>{{ $sch_id->phone_number}}
                                </div>
                            </div>
    <br>
                <br>
                  <div class="container">
                                <div class="row">
                                 <div class="col-1"></div>
                                 <div class="col"><hr></div>
                                 <div class="col-1"></div>
                                </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <div class="row align-items-start">
                                <center><h3>Campaign Details</h3></center>
                                <br>
                                <br>
                                @include('layouts.flash')
                                <h4 style="margin-left: 5%"><b>Campaign Story</b></h4>
                                <form method="post" action="{{ route('campaigns.update',$mydetails->id) }}">
                                    @csrf
                                    @method('put')
                               <center> <textarea class="form-control" name="update_story" id="floatingTextarea2" style="height:350px; width:90%">{{ $mydetails->story }}</textarea></center>
                               <button type ="submit"style="margin-left:5%; width:100px;margin-top:1%;"id ="btn" class = "btn btn-outline-secondary" > Update</button>
                                </form>

                                <br>
                                <br>
                                <div class="col-md-5" style="margin-left:5%; margin-top:3%">
                                <div class="row align-items-start">
                                <div class="col mt-2 pt-5" style="text-align:left;">
                                 <p>Campaign Type</p>
                                 <p>Number of Contributors</p>
                                 @if (!empty($mydetails->hospital_name))
                                <p>Name of Hospital</p>
                                 @endif
                                 @if (!empty($mydetails->business_cate))
                                     <p>Category of Business</p>
                                     <p>Name of Business</p>
                                 @endif
                                 @if (!empty($mydetails->project_field))
                                        <p>Field of Project</p>
                                 @endif
                                 @if (!empty($mydetails->cause))
                                 <p>Cause for Fundraising</p>
                                 <p>First Reference School ID</p>
                                 <p>Second Reference School ID</p>
                                 @endif
                                </div>
                                <div class="col mt-2 pt-5">
                                <p style="text-transform: capitalize;">{{ $mydetails->campaign_type}}</p>
                                @if(isset($contris))
                                <p>{{ $contris->num_contributors }}</p>
                                @else
                                <p>0</p>
                                @endif
                                <p>{{$mydetails->hospital_name}}</p>
                                 <p>{{ $mydetails->business_cate }}</p>
                                 <p>{{ $mydetails->business_name }}</p>
                                 <p>{{ $mydetails->project_field }}</p>
                                 <p>{{ $mydetails->cause }}</p>
                                 <p>{{ $mydetails->reference_1 }}</p>
                                 <p>{{ $mydetails->reference_2 }}</p>
                                </div>
                                </div>
                            </div>
                            @if (empty($details->cause))
                             <div class="col-md-3" style="margin-left:12%">

<br>
<br>
                                 <div class="card-header">Download File->{{ $mydetails->business_plan}}{{$mydetails->doctors_report }}{{ $mydetails->project_plan}}</div>
                                 <div class="card-body">
                                        @if (!empty($mydetails->doctors_report))
                               <center> <a href="{{asset('storage/docReports/'. $mydetails->doctors_report)}}" download="{{ $mydetails->doctors_report }}">
                                <img src="{{asset('storage/docReports/'. $mydetails->doctors_report)}}" alt="Tekfund" width="90" height="100">
                                </a></center>
                                @elseif (!empty($mydetails->business_plan))
                               <center>  <a href="{{asset('storage/business-plans/'. $mydetails->business_plan)}}" download="{{ $mydetails->business_plan }}">
                                <img src="{{asset('storage/1200px-PDF_file_icon.svg.png' )}}" alt="Tekfund" width="90" height="100">
                                </a></center>
                                @elseif (!empty($mydetails->project_plan))
                                <center>  <a href="{{asset('storage/project-files/'. $mydetails->project_plan)}}" download="{{ $mydetails->project_plan }}">
                                <img src="{{asset('storage/1200px-PDF_file_icon.svg.png' )}}" alt="Tekfund" width="90" height="100">
                                </a></center>
                                 @endif
                                 <center><h7 style="margin: auto;">Click to download file </h7></center>
                                 </div>

                             </div>
                             @endif
                                </div>

                                 <br>
                            </div>
                            <br>
<br>
                         <h4 style="margin-left: 5%"><b>Campgaign Contributors' Details</b></h4>
                         @if(count($cont_details) > 0)
                        <table class="responsive-table" id="customers">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Amount (GHC)</th>
                            <th>Contribution Date</th>
                        </tr>
                        @foreach ($cont_details as $d )
                        <tr>
                            @if (!empty($d->contributor_name))
                                 <td>{{ $d->contributor_name }}</td>
                            @else
                             <td>Guest</td>
                            @endif
                            <td>{{ $d->cont_email }}</td>
                            <td>{{ $d->contributed_amount }}</td>
                            <td>{{ \Carbon\Carbon::parse($d->created_at)->format('d M Y') }}</td>
                        </tr>
                        @endforeach
                        </table>
                        @else
                        <h4 style="margin-left:5%">There are no contributions made to this campaign.</h4>
                        @endif
                           <center> <div class="row align-items-start" style="padding-top: 50px;margin-top:10px;">
                                <div class="col">
                                    <button type="button" class="btn btn-danger"data-bs-toggle="modal" data-bs-target="#exampleModal2" id="dbtn">End</button>
                                </div>
                                <div class="col">
                                 @if(isset($contris->percent))
                                 {{-- && \Carbon\Carbon::parse($mydetails->updated_at)->addDays($mydetails->duration)->diffInDays() == 0 --}}
                                     @if($contris->percent >=70)
                                     <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" id="dbtn-c">Complete</button>
                                     @elseif ($mydetails->status== 'health' && \Carbon\Carbon::parse($mydetails->updated_at)->addDays($mydetails->duration)->diffInDays()==0)
                                     <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" id="dbtn-c">Complete</button>
                                     @else
                                     <button type="button" class="btn btn-secondary" onclick="alert_func()" id="dbtn">Complete</button>
                                     @endif
                                  @else
                                    <button type="button" class="btn btn-secondary" onclick="alert_func()" id="dbtn">Complete</button>
                                  @endif
                                </div>
                                <script>
                                    function alert_func(){
                                        alert('Campaign will be eligible for completion only after the duration has expired.');
                                    }
                                </script>
                            </div>
                          </center>

                             {{-- modals section --}}

             <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    {{-- <div class="modal-header"><h4><b>Complete this campaign?</b></h4></div> --}}
                    <center> <h3 style="margin-top:10%"><b>Complete this campaign?</b></h3></center>
                    <div class="modal-footer" style="margin-top: 20%">
                        <form action="{{ route('campaigns.show', $mydetails->id) }}" method="get">
                      <button type="submit" style="margin-right:10%" class="btn btn-success">Continue</button>
                        </form>
                      <button type="button" class="btn btn-secondary"data-bs-dismiss="modal">Cancel</button>
                    </div>
                    </div>
                 </div>
                </div>

               <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header"><h4><b>Do you want to end this Campaign?</b></h4> </div>
                    <div class="mb-3" style="padding: 15px;">
                        <label for="em1" style="color: black">Please kindly state your reason(s) for this action.</label>
                        <textarea name="endit" maxlength = "2000" placeholder="Send us an email" id="em1" style="height: 100px; width:100%"></textarea>
                    <br>
                      <div id="passwordHelpBlock" style="margin-top: 5%;">
                            <i class="fas fa-exclamation-circle"style="padding:1%"></i><span style="font-size: 12px; color:red; text-align:justify;">Please note that if contributions are not up to 70% of the target amount, the various contributions made, would be refunded to the backers.</span>

                        </div>
                  </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-success" style="margin-right:10%">Send</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                    </div>
                 </div>
                </div>

                      {{-- end of modals section --}}

                            </div>
                        </div>


                  <script>
            $(".progress-bar").loading();
            $('input').on('click', function () {
                 $(".progress-bar").loading();
            });
        </script>
@endsection
