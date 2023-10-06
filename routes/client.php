<?php

use App\Http\Controllers\Client\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

<<<<<<< Updated upstream

Route::get('/home',[HomeController::class,'index']);
Route::post('/passengerCar-detail',[HomeController::class,'passengerCarDetail']);

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

=======
use App\Http\Controllers\Client\BlogController;
Route::get('/', function () {
    return view('client.pages.home');
});
Route::get('/search',[SearchController::class,'search'])->name('search');
Route::get('/blog/{id}',[BlogController::class,'blog'])->name('blog');
Route::get('/blogs', [BlogController::class, 'show'])->name('blog.show');
>>>>>>> Stashed changes
