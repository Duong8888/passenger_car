<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneAuthController;
Route::get('/', function () {
    return view('client.layout.master');
});

Route::get('/sign_in', [PhoneAuthController::class,'showlogin'])->name('showlogin');
Route::post('/sign_in', [PhoneAuthController::class,'login'])->name('login');
Route::get('/register', [PhoneAuthController::class,'showregister'])->name('showregister');
Route::post('/register', [PhoneAuthController::class,'register'])->name('register');
Route::get('/logout', [PhoneAuthController::class,'logout'])->name('logout');
