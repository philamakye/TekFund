<style>
    .avatars {
  vertical-align: middle;
  width: 150px;
  height: 150px;
  border-radius: 50%;
}
    </style>

@extends('layouts.triallay')

@section('trial')

                <div class="card my-4 mx-3">
                    <div class="card-header">Dashboard</div>
                        <div class="card-body">
                            <div class="row align-items-start">
                                <center><h3>Campaign Details</h3></center>
                                <div class="col">
                                <h3 style="text-transform: capitalize;">{{ $details->title }}</h3>
                                @if (!empty($contris->percent))
                                <div class="progress-bar position"  data-percent="{{ $contris->percent }}" data-color="#aadcf5,#12b321"></div>
                                @else
                               <div class="progress-bar position"  data-percent="00" data-color="#aadcf5,#12b321"></div>
                                @endif
                                </div>
                                <div class="col mt-2 pt-5">
                                <p>Number of Contributors</p>
                                <p>Target Amount</p>
                                <p>Amount raised</p>
                                 <p>Days Remaining</p>
                                 @if (!empty($details->hospital_name))
                                <p>Name of Hospital</p>
                                 @endif

                                </div>
                                <div class="col mt-2 pt-5">
                                    @if (!empty($contris->num_contributors))
                                    <p> {{ $contris->num_contributors }}</p>
                                    @else
                                 <p>0</p>
                                @endif
                                <p>GHC {{ $details->target }}</p>
                                @if (!empty($contris->total_amount))
                                  <p>GHC {{ $contris->total_amount}}</p>
                                @else
                                <p>GHC 0</p>
                                @endif
                                <p>{{ \Carbon\Carbon::parse($details->updated_at)->addDays($details->duration)->diffInDays() }} days</p>
                                <p>{{$details->hospital_name}}</p>

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
                          <h3 style="margin-left:3%">{{ $sch_id->username }} </h3>
                          <div class="col-sm-2 py-1">
                              @if (!empty($sch_id->pro_image))
                            <img src="{{asset('storage/images/'.$sch_id->pro_image)}}" class="avatars" alt="avt">
                              @else
                           <img src="{{asset('storage/avatardefault_92824.png' )}}" class="avatars" alt="avt">
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

                             @if (empty($details->cause))
                             <div class="col-md-5" style="margin-left:20%">

                                 <div class="card-header">Download File->{{ $details->business_plan}}{{$details->doctors_report }}{{ $details->project_plan}}</div>
                                 <div class="card-body">
                                        @if (!empty($details->doctors_report))
                               <center> <a href="{{asset('storage/docReports/'. $details->doctors_report)}}" download="{{ $details->doctors_report }}">
                                <img src="{{asset('storage/docReports/'. $details->doctors_report)}}" alt="Tekfund" width="104" height="142">
                                </a></center>
                                @elseif (!empty($details->business_plan))
                               <center>  <a href="{{asset('storage/business-plans/'. $details->business_plan)}}" download="{{ $details->business_plan }}">
                                <img src="{{asset('storage/1200px-PDF_file_icon.svg.png' )}}" alt="Tekfund" width="104" height="142">
                                </a></center>
                                @elseif (!empty($details->project_plan))
                                <center>  <a href="{{asset('storage/project-files/'. $details->project_plan)}}" download="{{ $details->project_plan }}">
                                <img src="{{asset('storage/1200px-PDF_file_icon.svg.png' )}}" alt="Tekfund" width="104" height="142">
                                </a></center>
                                 @endif
                                 <center><h7 style="margin: auto;">Click to download file </h7></center>
                                 </div>
                             </div>
                              @endif
                                 <br>
                            </div>
<br>
                           <center> <div class="row align-items-start" style="padding-top: 50px;">

                                <div class="col">
                                    <button type="button" class="btn btn-danger" id="dbtn">End</button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-warning" id="dbtn">Suspend</button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-secondary" id="dbtn">Payback</button>
                                </div>

                            </div></center>


                            </div>
                        </div>


                  <script>
            $(".progress-bar").loading();
            $('input').on('click', function () {
                 $(".progress-bar").loading();
            });
        </script>
@endsection
