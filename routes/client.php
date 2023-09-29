<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('client.layout.master');
// });
Route::get('/home',[HomeController::class,'index']);
Route::post('/passengerCar-detail',[HomeController::class,'passengerCarDetail']);
