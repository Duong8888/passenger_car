<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.pages.dashboard.index');
});
Route::get('/layout', function () {
    return view('admin.layouts.master');
});
Route::get('/tuan_anh', function () {
    return view('admin.layouts.master');
});

Route::get('/layout', function () {
    return view('admin.layouts.master');
});
