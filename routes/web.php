<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\admin\Insertajob;
use App\Http\Controllers\admin\JobController;
use App\Http\Controllers\front\jobView;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
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

//customer dashboard
Route::get('/',[jobView::class ,'index']);
Route::get('/aboutUS',[jobView::class ,'aboutUS']);
Route::get('/contactUS',[jobView::class ,'contactUS']);
Route::get('/edutrains',[jobView::class ,'edutrains']);
Route::get('/exper',[jobView::class ,'exper']);
Route::get('/favoritejobs',[jobView::class ,'favoritejobs']);
Route::get('/findjob',[jobView::class ,'findjob']);
Route::get('/jobDetails',[jobView::class ,'jobDetails']);
Route::get('/Notification',[jobView::class ,'Notification']);
Route::get('/ourServices',[jobView::class ,'ourServices']);
Route::get('/profileApplication',[jobView::class ,'profileApplication']);
Route::get('/profileChangePassword',[jobView::class ,'profileChangePassword']);
Route::get('/profileDashboard',[jobView::class ,'profileDashboard']);
Route::get('/profileEdit',[jobView::class ,'profileEdit']);
Route::get('/signIN',[jobView::class ,'signIN']);
Route::get('/signUP',[jobView::class ,'signUP']);
Route::get('/skills',[jobView::class ,'skills']);


//admin dashboard
Route::get('/AdminDashboard',[AdminDashboardController::class,'showdashboard'])->name('AdminDashboard');
Route::get('/postjob',[JobController::class , 'dashboard'])->name('postjob');
Route::post('/postjob',[JobController::class , 'storejob']);
Route::get('/profileEditad',[AuthController::class , 'adminEdit'])->name('profileEditad');
Route::post('/updateuserinfo',[AuthController::class , 'saveuser'])->name('updateuserinfo');

