<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
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
Route::match(['GET','POST'],'posts', [PostController::class,'index'])->name('postsing');
Route::get('postadd', [PostController::class, 'create'])->name('posts.create');
Route::post('postadd', [PostController::class, 'store'])->name('posts.store');

Route::post('ckeditor/image_upload', [App\Http\Controllers\Admin\EditorController::class, 'upload'])->name('upload');
Route::get('/posts/{id}/edit',  [PostController::class,'edit'])->name('posts.edit');
Route::put('/posts/{id}',  [PostController::class,'update'])->name('posts.update');
// Đường dẫn route để xóa bài viết
Route::delete('/posts/{id}', [PostController::class,'destroy'])->name('posts.destroy');

