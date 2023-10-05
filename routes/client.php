<?php

use App\Http\Controllers\Client\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Client\ProfileController;

//Nam
Route::get('/home',[HomeController::class,'index']);
Route::post('/passengerCar-detail',[HomeController::class,'passengerCarDetail']);
Route::resource('/profile',ProfileController::class);


use App\Http\Controllers\PhoneAuthController;


Route::get('/', [SearchController::class,'home'])->name('home');

Route::get('/search',[SearchController::class,'searchRequest'])->name('search');

Route::get('/route-list',function() {
    return view('client.pages.findRoutes');
});

Route::get('/sign_in', [PhoneAuthController::class,'showlogin'])->name('showlogin');
Route::post('/sign_in', [PhoneAuthController::class,'login'])->name('login');
Route::get('/register', [PhoneAuthController::class,'showregister'])->name('showregister');
Route::post('/register', [PhoneAuthController::class,'register'])->name('register');
Route::get('/logout', [PhoneAuthController::class,'logout'])->name('logout');

