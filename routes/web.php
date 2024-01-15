<?php

use App\Http\Controllers\Admin\PassengerCarController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\permission\RolePermissionController;
use App\Http\Controllers\Admin\permission\UserPermissionController;
use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\RouteController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PhoneAuthController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\Report\TicketReportController;
use App\Http\Controllers\Admin\Report\UserReportController;
use App\Http\Controllers\Admin\StopsController;
use App\Http\Controllers\Admin\EditorController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\PostCategoryController;
use App\Http\Controllers\Admin\revenueAdmin\ContactStaffController;
use App\Http\Controllers\Admin\revenueAdmin\UserTypeController;
use App\Http\Controllers\Admin\RevenueAdminController;
use App\Http\Controllers\Admin\RevenueController;
use App\Http\Controllers\Admin\RevenueStaffController;
use App\Http\Controllers\Auth\PasswordController;

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
    Route::post('/change-password', [\App\Http\Controllers\Admin\ProfileAdminController::class, 'changePassword'])->name('change-password');
    Route::get('/change-password', [\App\Http\Controllers\Admin\ProfileAdminController::class, 'showChangePasswordForm'])->name('change-password');
    Route::post('dashboard/revenue', [DashboardController::class, 'dayrevenue'])->name('dashboard.dayrevenue');
    Route::post('dashboard/revenue1', [DashboardController::class, 'dayrevenue1'])->name('dashboard.dayrevenue1');
    Route::post('dashboard/revenue2', [DashboardController::class, 'dayrevenue2'])->name('dashboard.dayrevenue2');
    Route::post('dashboard/revenue3', [DashboardController::class, 'dayrevenue3'])->name('dashboard.dayrevenue3');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/logoutadmin', [App\Http\Controllers\LoginAdminController::class, 'logoutAdmin'])->name('logoutAdmin');

    // Quản lý tin tức chung
    Route::match(['GET', 'POST'], 'posts', [PostController::class, 'index'])->name('postsing');
    Route::get('postadd', [PostController::class, 'create'])->name('posts.create');
    Route::post('postadd', [PostController::class, 'store'])->name('posts.store');
    Route::post('ckeditor/image_upload', [EditorController::class, 'upload'])->name('upload');
    Route::get('/posts/{id}/edit',  [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{id}',  [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::get('/posting/{slug}', [PostController::class, 'createSlug'])->name('post.show');

    //  Nhà xe
    Route::group(['middleware' => 'checkRoles:Nhà xe'], function () {
        // Quản lý vé
        Route::prefix('ticket')->controller(TicketController::class)->name('ticket.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/', 'store')->name('store');
            Route::post('/checks-eat', 'checkSeat')->name('check');
            Route::get('/create', 'create')->name('create');
            Route::post('/{ticket}', 'update')->name('update');
            Route::delete('/{ticket}', 'destroy')->name('destroy');
            Route::get('/{ticket}/edit', 'edit')->name('edit');
            Route::post('/cancel', 'cancel')->name('cancel-vnp');
            Route::get('/search', 'search')->name('search');
        });

        Route::post('/searchTime', [TicketController::class,'searchTime'])->name('time');

        Route::post('/trip', [TicketController::class, 'Trip']);
        Route::post('/phone', [TicketController::class, 'CheckPhone']);
        Route::post('/price', [TicketController::class, 'Price']);
        Route::post('/passgenerCar/{id}', [TicketController::class, 'PassengerCar']);
        Route::post('/confirm', [TicketController::class, 'Confirm']);
        Route::post('/getLayout', [TicketController::class, 'getLayout'])->name('showLayout');
        // Quản lý tuyến đường nhà xe
        Route::prefix('route')->controller(RouteController::class)->name('route.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/store', 'store')->name('store');
            Route::get('/create', 'create')->name('create');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::put('/update/{id}', 'update')->name('update');
            Route::delete('/destroy/{route}', 'destroy')->name('destroy');
        });

        // Quản lý xe
        Route::group(["prefix" => "car", "as" => "car."], function () {
            Route::get('/', [PassengerCarController::class, 'index'])->name('index');
            Route::post('store', [PassengerCarController::class, 'store'])->name('store');
            Route::post('show', [PassengerCarController::class, 'show'])->name('show');
            Route::post('edit/{id}', [PassengerCarController::class, 'edit'])->name('edit');
            Route::post('update/{id}', [PassengerCarController::class, 'update'])->name('update');
            Route::delete('delete/{id}', [PassengerCarController::class, 'destroy'])->name('delete');
            Route::post('check', [PassengerCarController::class, 'checkLicense'])->name('checkLicense');
        });
        Route::resource('/service', ServicesController::class);
        Route::resource('/stop', StopsController::class);
        // quản lý danh mục
        Route::get('categories/', [PostCategoryController::class, 'index'])->name('category.index');
        Route::get('categories/add', [PostCategoryController::class, 'add'])->name('category.add');
        Route::post('categories/add', [PostCategoryController::class, 'store'])->name('category.store');
        Route::get('categories/edit/{category}', [PostCategoryController::class, 'edit'])->name('category.edit');
        Route::put('categories/edit/{id}', [PostCategoryController::class, 'update'])->name('category.update');
        Route::delete('categories/delete/{id}', [PostCategoryController::class, 'delete'])->name('category.delete');
        // quản lý khách hàng
        Route::get('customers/', [CustomerController::class, 'index'])->name('customer.index');
        Route::get('customers/add', [CustomerController::class, 'add'])->name('customer.add');
        Route::post('customers/add', [CustomerController::class, 'store'])->name('customer.store');
        Route::get('customers/edit/{customer}', [CustomerController::class, 'edit'])->name('customer.edit');
        Route::put('customers/edit/{id}', [CustomerController::class, 'update'])->name('customer.update');
        Route::delete('customers/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');

        // Tổng doanh thu cho nhà xe
        Route::prefix('revenueStaff')->controller(RevenueStaffController::class)->name('revenueStaff.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/dayrevenue', 'dayrevenue')->name('dayrevenue');
            Route::post('/filter-by-date', 'filter_by_date')->name('filter_by_date');
            Route::post('/filter-by-select', 'filter_by_select')->name('filter_by_select');
        });
        // quản lý lich trình
        Route::group(['prefix' => 'schedule', 'as' => 'schedule.'], function () {
            Route::get('/', [ScheduleController::class, 'index'])->name('index');
            Route::post('/update', [ScheduleController::class, 'update'])->name('update');
        });
    });

    //  SupperAdmin-Admin
    Route::group(['middleware' => 'checkRoles:SupperAdmin,Admin'], function () {
        // thống kê
        Route::get('/userReport', [UserReportController::class, 'index'])->name('user.report');
        Route::get('/ticketReport', [TicketReportController::class, 'index'])->name('ticket.report');
        // Tổng doanh thu cho admin
        Route::prefix('revenueAdmin')->controller(RevenueAdminController::class)->name('revenueAdmin.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/dayrevenue', 'dayrevenue')->name('dayrevenue');
            Route::post('/filter-by-date', 'filter_by_date')->name('filter_by_date');
            Route::post('/filter-by-select', 'filter_by_select')->name('filter_by_select');



        });

        //Thống kê liên hệ
        Route::prefix('contactStaff')->controller(ContactStaffController::class)->name('contactStaff.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/dayrevenue', 'dayrevenue')->name('dayrevenue');
            Route::post('/filter-by-date', 'filter_by_date')->name('filter_by_date');
            Route::post('/filter-by-select', 'filter_by_select')->name('filter_by_select');
        });
        //Thống kê người dùng
        Route::prefix('userType')->controller(UserTypeController::class)->name('userType.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/dayrevenue', 'dayrevenue')->name('dayrevenue');
            Route::post('/filter-by-date', 'filter_by_date')->name('filter_by_date');
            Route::post('/filter-by-select', 'filter_by_select')->name('filter_by_select');
        });
        // Quản lý contact
        Route::get('/contact/index', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('route_contact_index');
        Route::get('/contact/detail/{id}', [App\Http\Controllers\Admin\ContactController::class, 'detail'])->name('route_contact_detail');
        Route::post('/contact/sendmail', [App\Http\Controllers\Admin\ContactController::class, 'sendmail'])->name('route_contact_sendmail');
        Route::post('/contact/cancel-request', [App\Http\Controllers\Admin\ContactController::class, 'cancelRequest'])->name('route_contact_cancel');
        Route::post('/contact/success-request', [App\Http\Controllers\Admin\ContactController::class, 'successRequest'])->name('route_contact_success');
        Route::match(['GET', 'POST'], '/contact/add', [App\Http\Controllers\Admin\ContactController::class, 'add'])->name('route_contact_add');
        Route::match(['GET', 'POST'], '/contact/update', [App\Http\Controllers\Admin\ContactController::class, 'appy'])->name('route_contact_edit');
        Route::get('/contact/update-form/{id}', [App\Http\Controllers\Admin\ContactController::class, 'editForm'])->name('route_contact_editForm');
        Route::post('/contact/update-ting/{id}', [App\Http\Controllers\Admin\ContactController::class, 'updateForm'])->name('route_contact_update');
        Route::get('/textsearch', [App\Http\Controllers\Admin\ContactController::class, 'textsearch'])->name('textsearch');

        // Quản lý nhà xe
        Route::get('/staff/index', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('route_staff_index');
        Route::get('/contact/detail/{id}', [App\Http\Controllers\Admin\ContactController::class, 'detail'])->name('route_contact_detail');
        Route::post('/contact/sendmail', [App\Http\Controllers\Admin\ContactController::class, 'sendmail'])->name('route_contact_sendmail');
        Route::match(['GET', 'POST'], '/staff/add', [App\Http\Controllers\Admin\UserController::class, 'add'])->name('route_staff_add');
        Route::match(['GET', 'POST'], '/staff/edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('route_staff_edit');
        Route::match(['GET', 'POST'], '/staff/delete/{id}', [App\Http\Controllers\Admin\UserController::class, 'delete'])->name('route_staff_delete');
        // Route::get('/searchstaff', [App\Http\Controllers\admin\UserController::class, 'searchstaff'])->name('searchstaff');
        Route::match(['GET', 'POST'], '/searchstaff', [App\Http\Controllers\Admin\UserController::class, 'searchStaff'])->name('route_staff_searchstaff');



    });

    //Phân quyền SupperAdmin
    Route::group(['middleware' => 'checkRoles:SupperAdmin'], function () {
        Route::resource('/permission', UserPermissionController::class);
        Route::resource('/rolePermission', RolePermissionController::class);
        Route::delete('/rolePermission/create/{id}', [RolePermissionController::class, 'delete'])->name('rolePermission.delete');
    });
});


Route::group(['prefix' => 'notifications', 'as' => 'notifications.'], function () {
    Route::get('/', [NotificationController::class, 'showList']);
    Route::post('send', [NotificationController::class, 'sendNotification'])->name('sendMessage');
    Route::post('load', [NotificationController::class, 'getNotification'])->name('loadMessage');
});

Route::get('password', [PasswordController::class, 'update'])->name('password');
// Trong file routes/web.php








// Route::get('/management/index',[App\Http\Controllers\Admin\AdminManagementController::class,'index'])->name('route_adminmanagement_index');
// Route::match(['GET','POST'],'/management/edit/{id}',[App\Http\Controllers\Admin\AdminManagementController::class,'edit'])->name('route_adminmanagement_edit');
// Route::match(['GET','POST'],'/management/add',[App\Http\Controllers\Admin\AdminManagementController::class,'add'])->name('route_adminmanagement_add');
// Route::match(['GET','POST'],'/management/delete/{id}',[App\Http\Controllers\Admin\AdminManagementController::class,'delete'])->name('route_adminmanagement_delete');
