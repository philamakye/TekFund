<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('settings');
    }
    public function profile2(){

        return view('profile2');
    }
}

