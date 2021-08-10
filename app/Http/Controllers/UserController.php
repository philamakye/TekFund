<?php

namespace App\Http\Controllers;

use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Campaign;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        return view('settings');
    }
    public function profile2(){

        return view('profile2');
    }
    public function email(){

        return view ('editemail');
    }

    public function profile(){
        $usId = Auth::id();
        $count = User::findOrFail($usId);
        $campain_num = DB::table('campaigns')->where('us_id',$usId)->where('status','live')->count();
        $contri_num = DB::table('user_contributions')->where('user_id',$usId)->count();
        $count->contribution_num = $contri_num;
        $count->campaign_num =$campain_num;
        $count->save();
        return view('profile');
    }
    public function uploadAvt(Request $request){

        if ($request->hasFile('image')) {
            auth()->user()->uploadAvatar($request->image);
            return redirect()->back()->with('message', 'Upload successful!!');
        }
        return redirect()->back()->with('error', 'No image selected');
    }
    public function uploadImg(Request $request)
    {

        if ($request->hasFile('image')) {
            auth()->user()->uploadImage($request->image);
            return redirect()->back()->with('message', 'Upload successful!!');
        }
        return redirect()->back()->with('error', 'No image selected');
    }
    public function storeBasic(Request $request){
        //get current user
        $userId = Auth::id();
        $info = User::findOrFail($userId);

        //validate request data
        $basic_rule = ([
            'first_name' => 'nullable|string|max: 50',
            'last_name' => 'nullable|string|max:50',
            'school_id' => 'nullable|digits:8|unique:users',
            'city' => 'nullable|string',
            'country' => 'nullable|string'
        ]);

        $messages = ([
            'max' => 'Name field should not be more than 50 characters',
            'string' => 'This field should not contain numeric characters'
        ]);
        $this->validate($request,$basic_rule, $messages);
            // fill validated data
        $info->fill([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'school_id' => $request->school_id,
            'city' => $request->city,
            'country' => $request->country,
        ]);

        //save filled model

            $info->save();
            return redirect()->back()->with('success', 'Basic Info Updated!!');

    }

    public function storeStory(Request $request){
        $userId = Auth::id();
        $story = User::findOrFail($userId);

        $rules = [
            'about_me' => 'nullable|max:800|string',
            'shrt_desc' =>'nullable|max:300|string',
        ];

        $customMessages = [
            'string' => 'The :attribute field is not numeric.',
            'about_me.max' => 'The length may not be more than 800 characters.',
            'shrt_desc.max'=> 'The length may not be more than 500 characters.'
        ];

        $this->validate($request, $rules, $customMessages);

        $story->fill([
            'shrt_desc' =>$request->shrt_desc,
            'about_me' =>$request->about_me,
        ]);

        $story->save();

        return redirect()->back()->with('status', 'Update success!!');

    }

    public function storelinks(Request $request){
        $userId = Auth::id();
        $links = User::findOrFail($userId);

        $linkrules = [
            'user_facebooklink' => 'nullable|url',
            'user_twitterlink' => 'nullable|url',
            'user_youtubelink' => 'nullable|url',
            'user_imdb' => 'nullable|url',
            'user_websitelink'=> 'nullable|url',
        ];


        $this->validate($request, $linkrules);
        $links->fill([
            'user_facebooklink'=>$request->user_facebooklink,
            'user_twitterlink' =>$request->user_twitterlink,
            'user_youtubelink' =>$request->user_youtubelink,
            'user_imdb' => $request->user_imdb,
            'user_websitelink'=>$request->user_websitelink,
        ]);

        if($links){
            $links->save();
            return redirect()->back()->with('msg', 'Links updated!!');

        }
        return redirect()->back()->with('err', 'Nothing to update!!');
    }
    public function startcampaign()
    {
        $get_schoolid = auth()->user()->school_id;
        $get_city = auth()->user()->city;
        $get_country = auth()->user()->country;
        if (!empty($get_schoolid)&& (!empty($get_city)) && (!empty($get_country))) {
            return view('startcampaign');
        } else {
            return redirect('editprofile')->with('camp_error', 'Please fill out your basic information on your profile before you can begin a campaign!!');
        }
    }
    public function health_step1()
    {
        return view('healthcare.step1');
    }
    public function others_step1()
    {
        return view('otherss.others-step1');
    }

    public function proj_step1()
    {
        return view('proj.proj');
    }

    public function startup_step1()
    {
        return view('Start Up.startup');
    }
    // public function mycamps()
    // {
    //     return view('mycampaign');
    // }
    public function store(Request $request)
    {
        //$campid = Auth::id();
        //$store = Campaign::findOrFail($campid);
        $store = new Campaign();
        $val = Validator::make($request->all(), [
            'hospital_name' => 'nullable',
            'doctors_report' => 'nullable',
            'business_cate' => 'nullable',
            'business_plan' => 'nullable',
            'project_field' => 'nullable',
            'project_plan' => 'nullable',
            'cause' => 'nullable',
            'prototype' => 'nullable',
            'cover_img' => 'nullable',
            'reference_1' => 'nullable',
            'reference_2' => 'nullable',
            'starter' => 'nullable',


        ]);
        //  $this->validate($request, $store_rule)
        if ($val->fails()) {
            return redirect('startcampaign')->with('error', 'Fundraiser validation error!!! Please try again');
        }


        if ($request->hasFile('cover_img')) {
            $cover = $request->cover_img;
            $covers = $cover->getClientOriginalName();
            $cover->storeAs('covers', $covers, 'public');
            $store->cover_img = $covers;
        }
        if ($request->hasFile('business_plan')) {
            $business = $request->business_plan;
            $businesses = $business->getClientOriginalName();
            $business->storeAs('business-plans', $businesses, 'public');
            $store->business_plan = $businesses;
        }
        if ($request->hasFile('doctors_report')) {
            $report = $request->doctors_report;
            $reports = $report->getClientOriginalName();
            $report->storeAs('docReports', $reports, 'public');
            $store->campaign_type = 'health';
            $store->doctors_report = $reports;
        }
        if ($request->hasFile('project_plan')) {
            $store->campaign_type = 'project';
            $proj = $request->project_plan;
            $projs = $proj->getClientOriginalName();
            $proj->storeAs('project-files', $projs, 'public');
            $store->project_plan = $projs;
        }
        if ($request->hasFile('prototype')) {
            $prot = $request->prototype;
            $prots = $prot->getClientOriginalName();
            $prot->storeAs('Project-prototypes', $prots, 'public');
            $store->prototype = $prots;
        }

        if ($request->has('cause')) {
            $store->campaign_type = 'other';
        }
        if ($request->has('business_cate')) {
            $store->campaign_type = 'startup';
        }

        // Campaign::create($request->all());
        $store->fill([
            'starter' => $request->starter,
            'benefactor' => $request->benefactor,
            'title' => $request->title,
            'target' => $request->target,
            'duration' => $request->duration,
            'camp_youtubelink' => $request->camp_youtubelink,
            //'cover_img' =>$covers,
            'story' => $request->story,
            'full_name' => $request->full_name,
            'hospital_name' => $request->hospital_name,
            // 'doctors_report' =>$reports,
            'business_cate' => $request->business_cate,
            //'business_plan' =>$businesses,
            'business_name' => $request->business_name,
            'project_field' => $request->project_field,
            //'project_plan' =>$request->project_plan,
            'cause' => $request->cause,
            // 'prototype' =>$request->prototype,
            'reference_1' => $request->reference_1,
            'reference_2' => $request->reference_2,

        ]);
        $store->status = 'pending';
        $store->us_id = Auth::id();
        $store->save();
        return redirect('/startcampaign')->with('message', 'Fundraiser Successfully Completed!!... You will be notified once the campaign is verified.');
    }

}

