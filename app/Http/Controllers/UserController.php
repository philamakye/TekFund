<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}

