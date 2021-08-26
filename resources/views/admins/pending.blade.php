@extends('layouts.triallay')

@section('trial')
@include('layouts.flash')
@if($pend->count()<1)
   <h3 style="margin-left:300px">There are no pending campaigns!</h3>
@else
  @foreach ($pend as $p)
                    <div class="card my-4 mx-3">
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col">
                                <h3 style="text-transform: capitalize;">{{ $p->title }}</h3>
                                <div class="progress-bar position"  data-percent="00" data-color="#aadcf5,#12b321"></div>
                                </div>
                                <div class="col mt-2 pt-5">
                                <p>Campaign Starter</p>
                                <p>Starting date</p>
                                <p>Ending Date</p>
                                <p>Target Amount</p>
                                </div>
                                <div class="col mt-2 pt-5">
                                <p style="text-transform: capitalize;">{{ $p->full_name }}</p>
                                <p>Not started</p>
                                <p>N/A</p>
                                <p>GHC {{ $p->target }}</p>
                                </div>

                                <div class="col mt-5 pt-5">
                                <form action="{{route('pendcamp.show',$p->id)}}" method="get" style="display: inline;">
                                  <button type="submit"  class="btn btn-outline-primary">DETAILS</button>
                                  </form>
                                </div>

                            </div>
                        </div>
                    </div>
                 @endforeach

            @endif

                   <script>
            $(".progress-bar").loading();
            $('input').on('click', function () {
                 $(".progress-bar").loading();
            });
        </script>

@endsection
