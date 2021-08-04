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
        $live['campaigns'] = DB::table('campaigns')->where('status', 'live')->get();
        return view('admins.admin')->with($live);
    }

    public function pendingCamp(){
        $pending['pend'] = DB::table('campaigns')->where('status', 'pending')->get();
        return view('admins.pending')->with($pending);
    }
    public function analytics(){

        return view ('admins.admin_details');
    }




}
