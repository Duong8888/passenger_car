<?php

use App\Http\Controllers\Client\SearchController;
//use App\Http\Controllers\Client\Ticket\PaymentController;
use App\Http\Controllers\Client\Ticket\TicketController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PhoneAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\ProfileController;

//Nam
Route::get('/',[HomeController::class,'index'])->name('home');;
Route::post('/passengerCar-detail',[HomeController::class,'passengerCarDetail']);
Route::resource('/profile',ProfileController::class);


Route::get('/search', [SearchController::class, 'searchRequest'])->name('search');
Route::post('/sortBy', [SearchController::class, 'sortBy'])->name('sortBy');



Route::get('/sign_in', [PhoneAuthController::class, 'showlogin'])->name('showlogin');
Route::post('/sign_in', [PhoneAuthController::class, 'login'])->name('login');
Route::get('/register', [PhoneAuthController::class, 'showregister'])->name('showregister');
Route::post('/register', [PhoneAuthController::class, 'register'])->name('register');
Route::get('/logout', [PhoneAuthController::class, 'logout'])->name('logout');


Route::group(['prefix' => 'notifications', 'as' => 'notifications.'], function () {
    Route::get('/', [NotificationController::class, 'showList']);
    Route::post('send', [NotificationController::class, 'sendNotification'])->name('sendMessage');
    Route::post('load', [NotificationController::class, 'getNotification'])->name('loadMessage');
});


Route::get('/blog/{id}',[BlogController::class,'blog'])->name('blog');
Route::get('/blogs', [BlogController::class, 'show'])->name('blog.show');


Route::post('/update-ticket' , [TicketController::class, 'CountTicket'])->name('client.ticket.update-ticket');
Route::get('/payment-method', [TicketController::class, 'PaymentView'])->name('client.ticket.payment-method');
Route::post('/send-ticket', [TicketController::class, 'endPayment'])->name('client.ticket.end-payment-ticket');
Route::post('/vnpay-method', [TicketController::class, 'vnpay_payment'])->name('client.ticket.vnpay-method');
Route::post('/momo-method', [TicketController::class, 'momo_payment'])->name('client.ticket.momo-method');
Route::get('/vnpay-todb', [TicketController::class, 'checkoutPayment'])->name('client.ticket.add-vnpay-to-db');


