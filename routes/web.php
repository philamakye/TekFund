<?php

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\UserContributionController;
use App\Http\Controllers\UserController;
use App\Models\UserContribution;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use PHPUnit\TextUI\XmlConfiguration\Group;
use PHPUnit\TextUI\XmlConfiguration\IniSetting;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/tryhealth', function () {
//     return view('health2');
// });

Route::get('/', function () {
    $cards['showcards'] = DB::table('campaign_contributions')->rightJoin('campaigns', 'campaign_contributions.campaign_id', '=', 'campaigns.id')->where('status', 'live')->get();
    return view('index')->with($cards);

});
 Route::resource('home', 'CardsController')->parameters(['home' => 'campaign']);

// Route::get('/campaign', function () {
//     return view('viewcampaign');
// });


//Route::get('/tryhealth',[App\Http\Controllers\CampaignController:: class, 'please']);
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/startcampaign', [App\Http\Controllers\UserController::class, 'startcampaign'])->name('start campaign');

Route::get('/admin', 'AdminController@index' )->name('admin')->middleware('admin');
//Route::get('/admin/pending', 'AdminController@pendingCamp')->name('pending campaigns');
//Route::get('/analytics', 'AdminController@analytics')->name('admin_analytics');
//Route::resource('campaigns', 'CampaignController');
Route::resource('live', 'LiveController')->parameters(['live' => 'campaign']);
Route::resource('pendcamp', 'PendingController')->parameters(['pendcamp' => 'campaign']);
//Route::resource('contributions', 'UserContributionController');
Route::resource('campaigns', 'CampaignController');
Route::get('/setting',[App\Http\Controllers\UserController::class, 'index'])->name('settings');
Route::get('/healthcare', 'UserController@health_step1')->name('healthcare');
Route::get('/analytics', 'AdminController@analytics') ->name('admin_analytics')->middleware('admin');
Route::get('/setting',[App\Http\Controllers\UserController::class, 'index'])->name('settings');
Route::get('/healthcare', 'UserController@health_step1')->name('healthcare');
Route::get('/editprofile', 'UserController@profile2')->name('profile-2');
Route::get('/email', 'UserController@email')->name('Email');
Route::get('/profile', 'UserController@profile')->name(('Profile'));
Route::post('/upload', 'userController@uploadAvt')->name('Upload-profile image');
Route::post('/upload-avatar', 'userController@uploadImg')->name('Upload-avatar');
Route::get('/contributions','UserContributionController@index')->name('Contributions');
Route::get('/others','UserController@others_step1')->name('Others');
Route::get('/project','UserController@proj_step1')->name('project');
Route::get('/startup', 'UserController@startup_step1')->name('Start Up');
Route::post('/store-BasicInfo', 'UserController@storeBasic')->name('store Basic info');
Route::post('/store-story', 'UserController@storeStory')->name('Your Story');
Route::post('/other-links', 'UserController@storelinks')->name('other links');
Route::post('/storecampaign', 'UserController@store')->name('store-campaign');
Route::get('/verify_transaction', 'PaymentController@verify')->name('pay');

// // Laravel 8
// Route::get('/payment/callback', [App\Http\Controllers\PaymentController::class, 'handleGatewayCallback']);





