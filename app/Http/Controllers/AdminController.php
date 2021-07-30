<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function index(){

        return view('admin');
    }
    public function analytics(){
        return view('admin_details');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }


}
