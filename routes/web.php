<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



/*-------------------------------------------Admin Panel Route------------------------------------------------------------------------*/ 
Route::get('auth',[AuthController::class,'login'])->name('admin.login');
Route::post('login-submit',[AuthController::class , 'loginSubmit'])->name('admin.loginSubmit');

Route::get('register',[AuthController::class,'register'])->name('admin.register');
Route::post('register-submit',[AuthController::class,'registerSubmit'])->name('admin.registerSubmit');



Route::prefix('admin')->middleware('webGuard')->group(function(){

    Route::get('dashboard',[DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('users',[DashboardController::class, 'usersModule'])->name('admin.users');
});





Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');





/*--------------------------------------------Test Route------------------------------------------------------------------------------*/ 
Route::get('test',function(){
    echo Config::get('constant.ADMIN_PROFILE_PHOTO');
    exit("Go to Hell!");
});