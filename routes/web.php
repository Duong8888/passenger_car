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
use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\Report\TicketReportController;
use App\Http\Controllers\Admin\Report\UserReportController;
use App\Http\Controllers\admin\StopsController;
use App\Http\Controllers\Admin\EditorController;

use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\PostCategoryController;
use App\Http\Controllers\Admin\RevenueController;

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

Route::get('/sign_in', [PhoneAuthController::class, 'sign_in'])->name('sign_in');

Route::get('/login', [App\Http\Controllers\LoginAdminController::class, 'showLoginAdmin'])->name('login');
Route::post('/login', [App\Http\Controllers\LoginAdminController::class, 'loginAdmin']);

Route::middleware(['auth', CheckAdmin::class])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/logoutadmin', [App\Http\Controllers\LoginAdminController::class, 'logoutAdmin'])->name('logoutAdmin');

    // SupperAdmin-Admin-AdminPost
    Route::group(['middleware' => 'checkRoles:SupperAdmin,Admin,AdminPost'], function () {
        Route::match(['GET', 'POST'], 'posts', [PostController::class, 'index'])->name('postsing');
        Route::get('postadd', [PostController::class, 'create'])->name('posts.create');
        Route::post('postadd', [PostController::class, 'store'])->name('posts.store');
        Route::post('ckeditor/image_upload', [EditorController::class, 'upload'])->name('upload');
        Route::get('/posts/{id}/edit',  [PostController::class, 'edit'])->name('posts.edit');
        Route::put('/posts/{id}',  [PostController::class, 'update'])->name('posts.update');
        Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
        Route::get('/posting/{slug}', [PostController::class, 'createSlug'])->name('post.show');
    });
    //SupperAdmin-Admin-AdminTicket
    Route::group(['middleware' => 'checkRoles:SupperAdmin,Admin,AdminTicket'], function () {
        Route::prefix('ticket')->controller(TicketController::class)->name('ticket.')->group(function (){
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
    Route::group(['middleware' => 'checkRoles:SupperAdmin,Admin'], function () {
        Route::prefix('route')->controller(RouteController::class)->name('route.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/', 'store')->name('store');
            Route::get('/create', 'create')->name('create');
            Route::put('/{route}', 'update')->name('update');
            Route::delete('/{route}', 'destroy')->name('destroy');
            Route::get('/{route}/edit', 'edit')->name('edit');
        });

        // thống kê
        Route::get('/userReport', [UserReportController::class, 'index'])->name('user.report');
        Route::get('/ticketReport', [TicketReportController::class, 'index'])->name('ticket.report');



        // Quản lý contact nhà xe
        Route::get('/contact/index', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('route_contact_index');
        Route::match(['GET', 'POST'], '/contact/add', [App\Http\Controllers\Admin\ContactController::class, 'add'])->name('route_contact_add');
        Route::match(['GET', 'POST'], '/contact/update/{id}', [App\Http\Controllers\Admin\ContactController::class, 'edit'])->name('route_contact_edit');

        // Quản lý nhà xe
        Route::get('/staff/index', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('route_staff_index');
        Route::match(['GET', 'POST'], '/staff/add', [App\Http\Controllers\Admin\UserController::class, 'add'])->name('route_staff_add');
        Route::match(['GET', 'POST'], '/staff/edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('route_staff_edit');
        Route::match(['GET', 'POST'], '/staff/delete/{id}', [App\Http\Controllers\Admin\UserController::class, 'delete'])->name('route_staff_delete');

    });


    //Phân quyền SupperAdmin
    Route::group(['middleware' => 'checkRoles:SupperAdmin'], function () {
        Route::resource('/permission', UserPermissionController::class);
        Route::resource('/rolePermission', RolePermissionController::class);
        Route::delete('/rolePermission/create/{id}', [RolePermissionController::class, 'delete'])->name('admin.rolePermission.delete');
    });
    //Xe SupperAdmin-Admin-Nhà xe
    Route::group(['middleware' => 'checkRoles:SupperAdmin,Admin,Nhà xe'], function () {
        Route::group(["prefix" => "car", "as" => "car."], function () {
            Route::get('/', [PassengerCarController::class, 'index'])->name('index');
            Route::post('store', [PassengerCarController::class, 'store'])->name('store');
            Route::post('show', [PassengerCarController::class, 'show'])->name('show');
            Route::post('edit/{id}', [PassengerCarController::class, 'edit'])->name('edit');
            Route::post('update/{id}', [PassengerCarController::class, 'update'])->name('update');
            Route::delete('delete/{id}', [PassengerCarController::class, 'destroy'])->name('delete');
        });
        Route::resource('/service', ServicesController::class);
        Route::resource('/stop', StopsController::class);
    });
});


        Route::get('categories/', [PostCategoryController::class, 'index'])->name('category.index');
        Route::get('categories/add', [PostCategoryController::class, 'add'])->name('category.add');
        Route::post('categories/add', [PostCategoryController::class, 'store'])->name('category.store');
        Route::get('categories/edit/{category}', [PostCategoryController::class, 'edit'])->name('category.edit');
        Route::put('categories/edit/{id}', [PostCategoryController::class, 'update'])->name('category.update');
        Route::delete('categories/delete/{id}', [PostCategoryController::class, 'delete'])->name('category.delete');

        Route::get('customers/', [CustomerController::class, 'index'])->name('customer.index');
        Route::get('customers/add', [CustomerController::class, 'add'])->name('customer.add');
        Route::post('customers/add', [CustomerController::class, 'store'])->name('customer.store');
        Route::get('customers/edit/{customer}', [CustomerController::class, 'edit'])->name('customer.edit');
        Route::put('customers/edit/{id}', [CustomerController::class, 'update'])->name('customer.update');
        Route::delete('customers/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');

        Route::get('revenue/', [RevenueController::class, 'index'])->name('revenue.index');
        Route::get('revenue/add', [RevenueController::class, 'add'])->name('revenue.add');
        Route::post('revenue/add', [RevenueController::class, 'store'])->name('revenue.store');
        Route::get('revenue/edit/{revenue}', [RevenueController::class, 'edit'])->name('revenue.edit');
        Route::put('revenue/edit/{id}', [RevenueController::class, 'update'])->name('revenue.update');
        Route::delete('revenue/delete/{id}', [RevenueController::class, 'delete'])->name('revenue.delete');



// Route::get('/management/index',[App\Http\Controllers\Admin\AdminManagementController::class,'index'])->name('route_adminmanagement_index');
// Route::match(['GET','POST'],'/management/edit/{id}',[App\Http\Controllers\Admin\AdminManagementController::class,'edit'])->name('route_adminmanagement_edit');
// Route::match(['GET','POST'],'/management/add',[App\Http\Controllers\Admin\AdminManagementController::class,'add'])->name('route_adminmanagement_add');
// Route::match(['GET','POST'],'/management/delete/{id}',[App\Http\Controllers\Admin\AdminManagementController::class,'delete'])->name('route_adminmanagement_delete');
