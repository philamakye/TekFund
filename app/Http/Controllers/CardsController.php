<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\campaign_contribution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class CardsController extends Controller
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

    public function index()
    {
        $cards['showcards'] = DB::table('campaign_contributions')->rightJoin('campaigns', 'campaign_contributions.campaign_id', '=', 'campaigns.id')->where('status', 'live')->get();
        return view('index')->with($cards);

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
        $get_percent = DB::table('campaign_contributions')->where('campaign_id',$campaign->id)->value('percent');
        $get_total_amount = campaign_contribution::where('campaign_id',$campaign->id)->value('total_amount');
        $get_backers = campaign_contribution::where('campaign_id',$campaign->id)->value('num_contributors');
        $get_link = $campaign->camp_youtubelink;
        $strip_link = explode("=",$get_link);
        $get_id = $campaign->us_id;
        $getelem ['elem']= DB::table('users')->where('user_id',$get_id)->select('campaign_num', 'city', 'country')->first();
        return view('viewcampaign')->with(['camp'=> $campaign])->with($getelem)->with(['fin'=>$strip_link[1]])->with(['perc'=>$get_percent])->with(['amount'=>$get_total_amount])->with(['backers'=>$get_backers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign)
    {
        //
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
