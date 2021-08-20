<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user['users'] = DB::table('users')->where('role', '1')->select('name','email','username','school_id','campaign_num','contribution_num')->get();
        return view('admins.users')->with($user);
    }

    public function pendingCamp(){
        $pending['pend'] = DB::table('campaigns')->where('status', 'pending')->get();
        return view('admins.pending')->with($pending);
    }
    public function analytics(){

        return view ('admins.admin_details');
    }




}
