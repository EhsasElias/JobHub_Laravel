<?php

use App\Http\Controllers\CategoriesCotroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobViews;
use Illuminate\Support\Facades\Route;

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


Route::get('/index',[JobViews::class ,'index']);
Route::get('/aboutUS',[JobViews::class ,'aboutUS']);
Route::get('/contactUS',[JobViews::class ,'contactUS']);
Route::get('/edutrains',[JobViews::class ,'edutrains']);
Route::get('/exper',[JobViews::class ,'exper']);
Route::get('/favoritejobs',[JobViews::class ,'favoritejobs']);
Route::get('/findjob',[JobViews::class ,'findjob']);
Route::get('/jobDetails',[JobViews::class ,'jobDetails']);
Route::get('/Notification',[JobViews::class ,'Notification']);
Route::get('/ourServices',[JobViews::class ,'ourServices']);
Route::get('/profileApplication',[JobViews::class ,'profileApplication']);
Route::get('/profileChangePassword',[JobViews::class ,'profileChangePassword']);
Route::get('/profileDashboard',[JobViews::class ,'profileDashboard']);
Route::get('/profileEdit',[JobViews::class ,'profileEdit']);
Route::get('/signIN',[JobViews::class ,'signIN']);
Route::get('/signUP',[JobViews::class ,'signUP']);
Route::get('/skills',[JobViews::class ,'skills']);
