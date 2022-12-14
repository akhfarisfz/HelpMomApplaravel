<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\HomePageController;


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

Route::get('/', function () {
    return view('landingpage');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'authenthicate']);

Route::get('/signin',[SigninController::class,'index']);
Route::post('/signin',[SigninController::class,'store']);

Route::get('/logout',[HomePageController::class,'logout'])->middleware('auth');

