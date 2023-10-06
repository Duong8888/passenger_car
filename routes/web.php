<?php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PhoneAuthController;
use App\Http\Controllers\Admin\TicketController;
use Illuminate\Support\Facades\Http;
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

Route::resource('ticket', TicketController::class);
Route::get('/user/index',[App\Http\Controllers\UserController::class,'index'])->name('route_user_index');
Route::match(['GET','POST'],'/user/add',[App\Http\Controllers\UserController::class,'add'])->name('route_user_add');
Route::match(['GET','POST'],'/user/edit/{id}',[App\Http\Controllers\UserController::class,'edit'])->name('route_user_edit');
Route::match(['GET','POST'],'/user/delete/{id}',[App\Http\Controllers\UserController::class,'delete'])->name('route_user_delete');
Route::get('/passengerCar/index',[App\Http\Controllers\PassengerCarController::class,'index'])->name('route_passengerCar_index');
Route::match(['GET','POST'],'/passengerCar/add',[App\Http\Controllers\PassengerCarController::class,'add'])->name('route_passengerCar_add');
Route::match(['GET','POST'],'/passengerCar/edit/{id}',[App\Http\Controllers\PassengerCarController::class,'edit'])->name('route_passengerCar_edit');
Route::match(['GET','POST'],'/passengerCar/delete/{id}',[App\Http\Controllers\UserController::class,'delete'])->name('route_passengerCar_delete');






