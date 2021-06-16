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
    public function email(){

        return view ('editemail');
    }

    public function profile(){

        return view('profile');
    }
}

