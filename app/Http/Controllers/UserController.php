<?php

namespace App\Http\Controllers;

use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
}

