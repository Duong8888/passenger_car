<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\admin\permission\RolePermissionController;
use App\Http\Controllers\admin\permission\UserPermissionController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\RouteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PhoneAuthController;
use App\Http\Controllers\Admin\TicketController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\Report\TicketReportController;
use App\Http\Controllers\Admin\Report\UserReportController;
use App\Http\Controllers\admin\StopsController;

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


Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/sign_in', [PhoneAuthController::class, 'sign_in'])->name('sign_in');


Route::get('/layout', function () {
    return view('admin.layouts.master');
});
Route::match(['GET', 'POST'], 'posts', [PostController::class, 'index'])->name('postsing');
Route::get('postadd', [PostController::class, 'create'])->name('posts.create');
Route::post('postadd', [PostController::class, 'store'])->name('posts.store');

Route::post('ckeditor/image_upload', [App\Http\Controllers\Admin\EditorController::class, 'upload'])->name('upload');
Route::get('/posts/{id}/edit',  [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}',  [PostController::class, 'update'])->name('posts.update');
// Đường dẫn route để xóa bài viết
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/posting/{slug}', [PostController::class, 'createSlug'])->name('post.show');


Route::resource('ticket', TicketController::class);

Route::post('/trip', [TicketController::class, 'Trip']);
Route::post('/passgenerCar/{id}', [TicketController::class, 'PassengerCar']);

Route::resource('/route', RouteController::class);
Route::get('/userReport', [UserReportController::class, 'index'])->name('admin.user.report');


//Phan'z Nam'z
Route::resource('/service', ServicesController::class);
Route::resource('/stop', StopsController::class);
// Route::get('/userlist',[UserPermissionController::class,'index'])->name('admin.user.list');
// Route::get('/permission/{id}',[UserPermissionController::class,'permission'])->name('admin.user.permission');
Route::resource('/permission', UserPermissionController::class);
Route::resource('/rolePermission', RolePermissionController::class);
Route::delete('/rolePermission/create/{id}',[RolePermissionController::class,'delete'])->name('admin.rolePermission.delete');

// Route::get('/rolelist',[RolePermissionController::class,'index'])->name('admin.role.list');
//End Phan'z Nam'z




Route::get('/staff/index', [App\Http\Controllers\UserController::class, 'index'])->name('route_staff_index');
Route::match(['GET', 'POST'], '/staff/add', [App\Http\Controllers\UserController::class, 'add'])->name('route_staff_add');
Route::match(['GET', 'POST'], '/staff/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('route_staff_edit');
Route::match(['GET', 'POST'], '/staff/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('route_staff_delete');


Route::get('/management/index', [App\Http\Controllers\AdminManagementController::class, 'index'])->name('route_adminmanagement_index');
Route::match(['GET', 'POST'], '/management/edit/{id}', [App\Http\Controllers\AdminManagementController::class, 'edit'])->name('route_adminmanagement_edit');
Route::match(['GET', 'POST'], '/management/add', [App\Http\Controllers\AdminManagementController::class, 'add'])->name('route_adminmanagement_add');
Route::match(['GET', 'POST'], '/management/delete/{id}', [App\Http\Controllers\AdminManagementController::class, 'delete'])->name('route_adminmanagement_delete');
