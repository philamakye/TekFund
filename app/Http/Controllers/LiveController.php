<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\campaign_contribution;
use App\Models\User;
class LiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function __construct()
    {

        $this->middleware('auth');
    }
    public function getCreatedAtAttribute($timestamp)
    {
        return Carbon::parse($timestamp)->format('M d, Y');
    }
    public function index()
    {
        $live['campaigns'] = DB::table('campaign_contributions')->rightJoin('campaigns', 'campaign_contributions.campaign_id', '=', 'campaigns.id')->where('status', 'live')->get();
        return view('admins.admin')->with($live);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function show(Campaign $campaign)
    {
        $count_backers['contris'] = campaign_contribution::where('campaign_id', $campaign->id)->select('num_contributors','total_amount','percent')->first();
        $schid['sch_id'] = User::where('user_id', $campaign->us_id)->select('school_id', 'username', 'phone_number', 'city', 'country', 'first_name', 'last_name', 'pro_image')->first();
        return view('admins.live_details')->with(['details' => $campaign])->with($count_backers)->with($schid);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign)
    {
        // echo $campaign->full_name;
       // return view('admins.admin_details');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaign $campaign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
        //
    }
}
