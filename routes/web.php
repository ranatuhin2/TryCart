<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
