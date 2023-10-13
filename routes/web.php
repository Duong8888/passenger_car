<?php


use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\RouteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PhoneAuthController;
use App\Http\Controllers\Admin\TicketController;
use Illuminate\Support\Facades\Http;
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

Route::get('login', function (){
    echo 123;
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/sign_in', [PhoneAuthController::class,'sign_in'])->name('sign_in');

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
Route::get('/posting/{slug}', [PostController::class,'createSlug'])->name('post.show');


Route::resource('ticket', TicketController::class);
Route::post('/trip', [TicketController::class, 'Trip']);
Route::post('/passgenerCar/{id}' , [TicketController::class, 'PassengerCar']);

Route::resource('/route', RouteController::class);



//Phan'z Nam'z
Route::resource('service', ServicesController::class);
//End Phan'z Nam'z

// setting
