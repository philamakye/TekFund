<?php

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\UserContributionController;
use App\Http\Controllers\UserController;
use App\Models\UserContribution;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/campaign', function () {
    return view('viewcampaign');
});
Route::get('/multi', function () {
    return view('healthcare.multistep');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/startcampaign', [App\Http\Controllers\CampaignController::class, 'index'])->name('start campaign');

//Route::view('admin','admin');

Route::get('/admin', 'AdminController@index' )->name('admin')->middleware('admin');
Route::get('/setting',[App\Http\Controllers\UserController::class, 'index'])->name('settings');
Route::get('/healthcare', 'CampaignController@health_step1')->name('healthcare');
//Route::get('/healthcare2', 'CampaignController@health_step2')->name('healthcare-step 2');
Route::get('/editprofile', 'UserController@profile2')->name('profile-2');
Route::get('/email', 'UserController@email')->name('Email');
Route::get('/profile', 'UserController@profile')->name(('Profile'));
Route::post('/upload', 'userController@uploadAvt')->name('Upload-profile image');
Route::post('/upload-avatar', 'userController@uploadImg')->name('Upload-avatar');
Route::get('/contributions','UserContributionController@index')->name('Contributions');
Route::get('/mycampaigns','CampaignController@mycamps')->name('My Campaigns');
Route::get('/others','CampaignController@others_step1')->name('Others');
Route::get('/others2','CampaignController@others_step2')->name('Others-step 2');
Route::get('/project','CampaignController@proj_step1')->name('project');
Route::get('/project2','CampaignController@proj_step2')->name('project-step 2');
Route::get('/startup', 'CampaignController@startup_step1')->name('Start Up');
Route::get('/startup2','CampaignControler@startup_step2')->name('Start Up-step 2');




#Route::get('/startcampaign', function(){
 #   return view('startcampaign');
#});
