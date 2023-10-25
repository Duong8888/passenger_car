<?php

use App\Http\Controllers\Admin\PassengerCarController;
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
use App\Http\Controllers\Admin\EditorController;

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
Route::get('/layout', function () {
    return view('admin.layouts.master');
});
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__ . '/auth.php';

Route::get('/sign_in', [PhoneAuthController::class, 'sign_in'])->name('sign_in'); // error

Route::get('/loginadmin', [App\Http\Controllers\LoginAdminController::class, 'showLoginAdmin'])->name('login_admin');
Route::post('/loginadmin', [App\Http\Controllers\LoginAdminController::class, 'loginAdmin']);
Route::get('/logoutadmin', [App\Http\Controllers\LoginAdminController::class, 'logoutAdmin'])->name('logoutAdmin');

// SupperAdmin-AdminPost
Route::group(['middleware' => ['role:SupperAdmin,AdminPost']], function () {
    Route::match(['GET', 'POST'], 'posts', [PostController::class, 'index'])->name('postsing');
    Route::get('postadd', [PostController::class, 'create'])->name('posts.create');
    Route::post('postadd', [PostController::class, 'store'])->name('posts.store');
    Route::post('ckeditor/image_upload', [EditorController::class, 'upload'])->name('upload');
    Route::get('/posts/{id}/edit',  [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{id}',  [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::get('/posting/{slug}', [PostController::class, 'createSlug'])->name('post.show');
});

//SupperAdmin-AdminTicket
Route::group(['middleware' => ['role:SupperAdmin,AdminTicket']], function () {
    Route::prefix('ticket')->controller(TicketController::class)->name('ticket.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/create', 'create')->name('create');
        Route::put('/{ticket}', 'update')->name('update');
        Route::delete('/{ticket}', 'destroy')->name('destroy');
        Route::get('/{ticket}/edit', 'edit')->name('edit');
    });
    Route::post('/trip', [TicketController::class, 'Trip']);
    Route::post('/passgenerCar/{id}', [TicketController::class, 'PassengerCar']);

});



// tuyến đường SupperAdmin-Admin
Route::group(['middleware' => ['role:SupperAdmin,Admin']], function () {
    Route::prefix('route')->controller(RouteController::class)->name('route.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/create', 'create')->name('create');
        Route::put('/{route}', 'update')->name('update');
        Route::delete('/{route}', 'destroy')->name('destroy');
        Route::get('/{route}/edit', 'edit')->name('edit');
    });
    // thống kê
    Route::get('/userReport', [UserReportController::class, 'index'])->name('admin.user.report');
    Route::get('/ticketReport', [TicketReportController::class, 'index'])->name('admin.ticket.report');
    // Quản lý nhà xe
    Route::get('/staff/index',[App\Http\Controllers\Admin\UserController::class,'index'])->name('route_staff_index');
    Route::match(['GET','POST'],'/staff/add',[App\Http\Controllers\Admin\UserController::class,'add'])->name('route_staff_add');
    Route::match(['GET','POST'],'/staff/edit/{id}',[App\Http\Controllers\Admin\UserController::class,'edit'])->name('route_staff_edit');
    Route::match(['GET','POST'],'/staff/delete/{id}',[App\Http\Controllers\Admin\UserController::class,'delete'])->name('route_staff_delete');
});

//Phân quyền SupperAdmin
Route::group(['middleware' => ['role:SupperAdmin']], function () {
    Route::resource('/permission', UserPermissionController::class);
    Route::resource('/rolePermission', RolePermissionController::class);
    Route::delete('/rolePermission/create/{id}',[RolePermissionController::class,'delete'])->name('admin.rolePermission.delete');
});



//Xe SupperAdmin-Admin-Nhà xe
Route::group(['middleware' => ['role:SupperAdmin,Admin,Nhà xe']], function () {
    Route::group(["prefix"=>"car","as"=>"car."],function(){
        Route::get('/',[PassengerCarController::class,'index'])->name('index');
        Route::post('store',[PassengerCarController::class,'store'])->name('store');
        Route::post('show',[PassengerCarController::class,'show'])->name('show');
        Route::post('update/{id}',[PassengerCarController::class,'update'])->name('update');
        Route::delete('delete/{id}',[PassengerCarController::class,'destroy'])->name('delete');
    });
    Route::resource('/service', ServicesController::class);
    Route::resource('/stop', StopsController::class);
});

// Route::get('/management/index',[App\Http\Controllers\Admin\AdminManagementController::class,'index'])->name('route_adminmanagement_index');
// Route::match(['GET','POST'],'/management/edit/{id}',[App\Http\Controllers\Admin\AdminManagementController::class,'edit'])->name('route_adminmanagement_edit');
// Route::match(['GET','POST'],'/management/add',[App\Http\Controllers\Admin\AdminManagementController::class,'add'])->name('route_adminmanagement_add');
// Route::match(['GET','POST'],'/management/delete/{id}',[App\Http\Controllers\Admin\AdminManagementController::class,'delete'])->name('route_adminmanagement_delete');
