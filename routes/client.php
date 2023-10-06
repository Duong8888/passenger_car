<?php

use App\Http\Controllers\Client\CategoryController;
use App\Http\Controllers\Client\PostController;
use App\Http\Controllers\Client\SearchController;
use Illuminate\Support\Facades\Route;



Route::prefix('/')->name('client.')->group(function () {
    Route::get('/', function () {
        return view('client.pages.home');
    })->name('index');

    Route::get('/categories/{id}', [CategoryController::class, 'detail'])->name('category-detail');
    Route::get('/posts/{slug}', [PostController::class, 'postDetail'])->name('post-detail');
});
Route::get('/search', [SearchController::class, 'search'])->name('search');
