<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Facades\Validator;


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
    public function tryhealth(){
        return view('healthcare.step2');
    }

    public function index()
    {
        $get_schoolid = auth()->user()->school_id;
        if (!empty($get_schoolid)){
            return view('startcampaign');
        }
        else{
            return redirect('editprofile')->with('camp_error', 'Please fill out your basic information on your profile before you can begin a campaign!!');
        }
    }
    public function health_step1(){
        return view('healthcare.step1');
    }


    public function others_step1(){
        return view('otherss.others-step1');
    }

    public function proj_step1(){
        return view('proj.proj');
    }

    public function startup_step1(){
        return view('Start Up.startup');
    }

    public function mycamps(){
        return view('mycampaign');
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
    public function store_health(Request $request){

    }
    public function store_start(Request $request){

    }
    public function store_proj(Request $request){

    }
    public function store_others(Request $request){

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$campid = Auth::id();
        //$store = Campaign::findOrFail($campid);
        $store = new Campaign();
         $val = Validator::make($request->all(),[
            'hospital_name' => 'nullable',
            'doctors_report' => 'nullable',
            'business_cate' => 'nullable',
            'business_plan' => 'nullable',
            'project_field' => 'nullable',
            'project_plan' => 'nullable',
            'cause' => 'nullable',
            'prototype' =>'nullable',
            'cover_img' =>'nullable',
            'reference_1' =>'nullable',
            'reference_2' =>'nullable',
            'starter' => 'nullable',


         ]);
       //  $this->validate($request, $store_rule)
         if($val->fails()){
            return redirect('startcampaign')->with('error', 'Fundraiser validation error!!! Please try again');
         }


         if ($request->hasFile('cover_img')){
            $cover = $request->cover_img;
            $covers = $cover->getClientOriginalName();
            $cover->storeAs('covers', $covers, 'public');
            $store->cover_img = $covers;
         }
         if ($request->hasFile('business_plan')){
             $business = $request->business_plan;
             $businesses = $business->getClientOriginalName();
             $business->storeAs('business-plans', $businesses, 'public');
             $store->business_plan = $businesses;
         }
         if ($request->hasFile('doctors_report')){
             $report = $request->doctors_report;
             $reports =$report->getClientOriginalName();
             $report->storeAs('docReports', $reports,'public');
             $store->campaign_type = 'health';
             $store->doctors_report = $reports;
         }
         if ($request->hasFile('project_plan')){
             $store->campaign_type = 'project';
             $proj =$request->project_plan;
             $projs =$proj->getClientOriginalName();
             $proj->storeAs('project-files',$projs, 'public');
             $store->project_plan = $projs;
         }
         if ($request->hasFile('prototype')){
             $prot =$request->prototype;
             $prots =$prot->getClientOriginalName();
             $prot->storeAs('Project-prototypes', $prots,'public');
             $store->prototype = $prots;
         }

         if ($request->has('cause')){
             $store->campaign_type = 'other';
         }
         if ($request->has('business_cate')){
             $store->campaign_type = 'startup';
         }

        // Campaign::create($request->all());
        $store->fill([
            'starter' => $request->starter,
            'benefactor' =>$request->benefactor,
            'title' =>$request->title,
            'target' =>$request->target,
            'duration' =>$request->duration,
            'camp_youtubelink' =>$request->camp_youtubelink,
            //'cover_img' =>$covers,
            'story' =>$request->story,
            'full_name' =>$request->full_name,
            'hospital_name' =>$request->hospital_name,
           // 'doctors_report' =>$reports,
            'business_cate' =>$request->business_cate,
            //'business_plan' =>$businesses,
            'business_name' =>$request->business_name,
            'project_field' =>$request->project_field,
            //'project_plan' =>$request->project_plan,
            'cause' => $request->cause,
           // 'prototype' =>$request->prototype,
            'reference_1' =>$request->reference_1,
            'reference_2' =>$request->reference_2,

        ]);
        $store->status = 'pending';
        $store->us_id = Auth::id();
        $store->save();
        return redirect('/startcampaign')->with('message', 'Fundraiser Successfully Completed!!... You will be notified once the campaign is verified.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function show(Campaign $campaign)
    {
        //
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
