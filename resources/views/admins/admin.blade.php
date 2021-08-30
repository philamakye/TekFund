@extends('layouts.triallay')

@section('trial')
@if($campaigns->count() > 0)
                 @foreach ($campaigns as $liv)
                    <div class="card my-4 mx-3">
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col">
                                <h3 style="text-transform: capitalize;">{{ $liv->title }}</h3>
                                @if (!empty($liv->percent))
                                <div class="progress-bar position"  data-percent="{{ $liv->percent }}" data-color="#aadcf5,#12b321"></div>
                                @elseif(empty($liv->percent))
                                <div class="progress-bar position"  data-percent="00" data-color="#aadcf5,#12b321"></div>
                                @endif
                                </div>
                                <div class="col mt-2 pt-5">
                                <p>Campaign Starter</p>
                                <p>Starting date</p>
                                <p>Ending Date</p>
                                <p>Target Amount</p>
                                </div>
                                <div class="col mt-2 pt-5">
                                <p style="text-transform:capitalize;">{{ $liv->full_name }}</p>
                                <p>{{ \Carbon\Carbon::parse($liv->created_at)->format('d M Y')}}</p>
                                <p>{{ \Carbon\Carbon::parse($liv->created_at)->addDays($liv->duration)->format('d M Y')}}</p>
                                <p>GHC {{ $liv->target }}</p>
                                </div>

                                <div class="col mt-5 pt-5">
                                <form action="{{ route('live.show', $liv->id) }}" method="get" style="display: inline;">
                                  <button type="submit"  class="btn btn-outline-primary">DETAILS</button>
                                  </form>
                                </div>

                            </div>
                        </div>
                    </div>
                   @endforeach
                 @else
                 <h3 style="margin-left:300px">There are no on-going campaigns!</h3>
                 @endif
                    <script>
            $(".progress-bar").loading();
            $('input').on('click', function () {
                 $(".progress-bar").loading();
            });
        </script>


@endsection
