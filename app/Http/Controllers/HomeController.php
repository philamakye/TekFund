<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\campaign_contribution;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $get_percent = campaign_contribution::where('campaign_id', $campaign->id)->value('percent');
        $cards['showcards'] = DB::table('campaigns')->join('campaign_contributions','campaign_contributions.campaign_id','=','campaigns.id')->where('status', 'live')->get();
        return view('index')->with($cards);
       // return view('index');->whereNotIn($userId, 'us_id')
    }
}
