<?php

namespace App\Http\Controllers;

use App\Models\UserContribution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserContributionController extends Controller
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
        $user_contributions['us_cont'] = DB::table('user_contributions')->join('campaigns','campaigns.id', '=','user_contributions.campaign_id')->select('campaigns.title','user_contributions.contributed_amount','user_contributions.created_at')->where('user_id', Auth::id())->get();

        return view('contribution')->with($user_contributions);
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
     * @param  \App\Models\UserContribution  $userContribution
     * @return \Illuminate\Http\Response
     */
    public function show(UserContribution $userContribution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserContribution  $userContribution
     * @return \Illuminate\Http\Response
     */
    public function edit(UserContribution $userContribution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserContribution  $userContribution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserContribution $userContribution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserContribution  $userContribution
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserContribution $userContribution)
    {
        //
    }
}
