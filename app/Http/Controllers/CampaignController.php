<?php

namespace App\Http\Controllers;
use App\Models\Campaign;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\campaign_contribution;
use App\Models\UserContribution;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $userId =Auth::id();
        $user_camp['us_camp'] = DB::table('campaigns')->where('us_id',$userId)->where('status','live')->get();
        return view('mycampaign')->with($user_camp);
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
        return view('withdrawal');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign)
    {
        $campcont = UserContribution::where('campaign_id', $campaign->id)->select('contributor_name', 'cont_email', 'contributed_amount', 'updated_at')->get();
        $schid['sch_id'] = User::where('user_id', $campaign->us_id)->select('school_id', 'username', 'phone_number', 'city', 'country', 'first_name', 'last_name', 'pro_image')->first();

        if (campaign_contribution::where('campaign_id', $campaign->id)->exists()){
            $count_backers['contris'] = campaign_contribution::where('campaign_id', $campaign->id)->select('num_contributors', 'total_amount', 'percent')->first();
            return view('mycamp-details')->with(['mydetails' => $campaign])->with($count_backers)->with($schid)->with('cont_details', $campcont);

        }else
        {
            return view('mycamp-details')->with(['mydetails' => $campaign])->with($schid)->with('cont_details', $campcont);

        }
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
      if (!empty($request->update_story)){
          Campaign::where('id',$campaign->id)->update([
              'story'=> $request->update_story
          ]);
          return redirect()->back()->with('message','Story successfuly updated!');
      }
      else{
          return redirect()->back()->with('error','Nothing to update!');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
        // $grabcamp = campaign::find($campaign->id);
        // $campaign->delete();
        dd($campaign->id);
        //return redirect()->route('campaigns.index')->with('message','Campaign successfully deleted');
    }
}
