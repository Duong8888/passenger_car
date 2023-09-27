<?php

use App\Http\Controllers\Client\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.pages.home');
});
Route::get('/search',[SearchController::class,'search'])->name('search');
