<?php

use App\Http\Controllers\Client\SearchController;
use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhoneAuthController;

Route::get('/home', [HomeController::class, 'index']);
Route::post('/passengerCar-detail', [HomeController::class, 'passengerCarDetail']);


Route::get('/', [SearchController::class, 'home'])->name('home');

Route::get('/search', [SearchController::class, 'searchRequest'])->name('search');

Route::get('/route-list', function () {
    return view('client.pages.findRoutes');
});

Route::get('/sign_in', [PhoneAuthController::class, 'showlogin'])->name('showlogin');
Route::post('/sign_in', [PhoneAuthController::class, 'login'])->name('login');
Route::get('/register', [PhoneAuthController::class, 'showregister'])->name('showregister');
Route::post('/register', [PhoneAuthController::class, 'register'])->name('register');
Route::get('/logout', [PhoneAuthController::class, 'logout'])->name('logout');


Route::group(['prefix' => 'notifications', 'as' => 'notifications.'], function () {
    Route::get('/', [NotificationController::class, 'showList']);
    Route::post('send', [NotificationController::class, 'sendNotification'])->name('sendMessage');
    Route::post('load', [NotificationController::class, 'getNotification'])->name('loadMessage');
});

