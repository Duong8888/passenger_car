<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('admin.pages.dashboard.index');
});
// // Route::get('/dashboard/user', function () {
//     return view('admin.layouts.User.add');
// });
Route::get('/layout', function () {
    return view('admin.layouts.master');
});

Route::name('admin.')->group(function () {
    //booking
    Route::prefix('/booking')->controller(\App\Http\Controllers\BookCarController::class)
        ->name('booking.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/add', 'add')->name('add');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{booking}', 'edit')->name('edit');
            Route::post('/update/{booking}', 'update')->name('update');
            Route::get('/delete/{booking}', 'delete')->name('delete');
        });

    //booking
    // Route::prefix('/client')->controller(\App\Http\Controllers\BookCarController::class)
    //     ->name('booking.')
    //     ->group(function () {
    //         Route::get('/', 'index')->name('index');
    //         Route::get('/add', 'add')->name('add');
    //         Route::post('/store', 'store')->name('store');
    //         Route::get('/edit/{booking}', 'edit')->name('edit');
    //         Route::post('/update/{booking}', 'update')->name('update');
    //         Route::get('/delete/{booking}', 'delete')->name('delete');
    //     });
});
