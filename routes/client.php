<?php

use App\Http\Controllers\Client\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SearchController::class,'home']);

Route::get('/search',[SearchController::class,'searchRequest'])->name('search');

Route::get('/route-list',function() {
    return view('client.pages.findRoutes');
});
