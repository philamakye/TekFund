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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/startcampaign', [App\Http\Controllers\CampaignController::class, 'index'])->name('start campaign');

//Route::view('admin','admin');

Route::get('/admin', 'AdminController@index' )->name('admin')->middleware('admin');
#Route::get('/startcampaign', 'CampaignController@index') ->name('start campaign');
Route::get('/setting',[App\Http\Controllers\UserController::class, 'index'])->name('settings');
Route::get('/healthcare', 'CampaignController@health_step1')->name('healthcare');
Route::get('/healthcare2', 'CampaignController@health_step2')->name('healthcare');
Route::get('/editprofile', 'UserController@profile2')->name('profile-2');
Route::get('/email', 'UserController@email')->name('Email');
Route::get('/profile', 'UserController@profile')->name(('Profile'));
Route::post('/upload', 'userController@uploadAvt')->name('Upload-profile image');
Route::post('/upload-avatar', 'userController@uploadImg')->name('Upload-avatar');
Route::get('/contributions','UserContributionController@index')->name('Contributions');
Route::get('/mycampaigns','CampaignController@mycamps')->name('My Campaigns');



#Route::get('/startcampaign', function(){
 #   return view('startcampaign');
#});
