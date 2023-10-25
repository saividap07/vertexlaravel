<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\LoginController;


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



Route::get('/index',function(){
    return view('index');
});

Route::get('/',function(){
    return view('front_index');
});

Route::get('/table',function(){
    return view('table');
});  

Route::resource('/testimonials',TestimonialsController::class)->middleware('logintest');

Route::resource('/team',TeamController::class)->middleware('logintest');

Route::resource('/portfolio',PortfolioController::class)->middleware('logintest');

Route::resource('/services',ServicesController::class)->middleware('logintest');

Route::get('/admin',[LoginController::class,'login']); 

Route::post('/getLoginDetails',[LoginController::class,'getLoginDetails']);

Route::get('/logout',[LoginController::class,'logout']);