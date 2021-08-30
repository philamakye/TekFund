<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\UserContribution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\campaign_contribution;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PendingController extends Controller
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
        $pending['pend'] = DB::table('campaigns')->where('status', 'pending')->get();

         return view('admins.pending')->with($pending);
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
        $schid['sch_id']= User::where('user_id',$campaign->us_id)->select('school_id','username','phone_number','city','country','first_name','last_name','pro_image')->first();
        return view('admins.admin_details')->with(['details' => $campaign])->with($schid);
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
         Campaign::where('id',$campaign->id)->update(['status'=>'live','created_at'=>now()]);
        $usId = $campaign->us_id;
        $count = User::findOrFail($usId);
        $campain_num = DB::table('campaigns')->where('us_id', $usId)->where('status', 'live')->count();
        $count->campaign_num = $campain_num;
        $count->save();
        return redirect()->route('pendcamp.index')->with('message','Campaign status changed to live');

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
