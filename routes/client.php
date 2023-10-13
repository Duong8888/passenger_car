<?php

use App\Http\Controllers\Client\SearchController;
use App\Http\Controllers\Client\Ticket\PaymentController;
use App\Http\Controllers\Client\Ticket\TicketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhoneAuthController;
use App\Livewire\Ticket;

Route::get('/home',[HomeController::class,'index']);
Route::post('/passengerCar-detail',[HomeController::class,'passengerCarDetail']);


Route::get('/', [SearchController::class,'home'])->name('home');

Route::get('/search',[SearchController::class,'searchRequest'])->name('search');

Route::get('/route-list',function() {
    return view('client.pages.findRoutes');
});

Route::get('/sign_in', [PhoneAuthController::class,'showlogin'])->name('showlogin');
Route::post('/sign_in', [PhoneAuthController::class,'login'])->name('login');
Route::get('/register', [PhoneAuthController::class,'showregister'])->name('showregister');
Route::post('/register', [PhoneAuthController::class,'register'])->name('register');
Route::get('/logout', [PhoneAuthController::class,'logout'])->name('logout');

Route::post('/update-ticket' , [TicketController::class, 'CountTicket'])->name('client.ticket.update-ticket');
Route::get('/payment-method', [TicketController::class, 'PaymentView'])->name('client.ticket.payment-method');
Route::post('/send-ticket', [TicketController::class, 'endPayment'])->name('client.ticket.end-payment-ticket');
Route::post('/vnpay-method', [TicketController::class, 'vnpay_payment'])->name('client.ticket.vnpay-method');
Route::post('/momo-method', [TicketController::class, 'momo_payment'])->name('client.ticket.momo-method');
Route::get('/vnpay-todb', [TicketController::class, 'checkoutPayment'])->name('client.ticket.add-vnpay-to-db');
