<?php


use App\Http\Controllers\Client\SearchController;
use App\Http\Controllers\Client\Ticket\TicketController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PhoneAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\CategoryController;
use App\Http\Controllers\Client\ProfileController;
use App\Http\Controllers\Client\CarRegisterController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Middleware\CheckUser;

//Nam

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/listPassengerCar',[HomeController::class,'listPassengerCar'])->name('listPassengerCar');
Route::get('car/{id}?{time}&{date}',[HomeController::class,'passengerCarDetail'])->name('passengerCar.detail');
Route::post('addComment',[HomeController::class,'addComment'])->name('passengerCar.detail.comment');
Route::resource('/profile',ProfileController::class);
Route::get('/profile/ticketdetails/{id}',[ProfileController::class,'ticketDetails'])->name('ticketDetails_index');





Route::get('/search', [SearchController::class, 'searchRequest'])->name('search');
Route::post('/sortBy', [SearchController::class, 'sortBy'])->name('sortBy');

Route::get('/login', [PhoneAuthController::class, 'login'])->name('client.phone.login');
Route::get('/verify-otp', [PhoneAuthController::class, 'otp'])->name('client.phone.verify-otp');
Route::get('/log-out', [PhoneAuthController::class, 'logout'])->name('client.phone.logout');

Route::group(['prefix' => 'notifications', 'as' => 'notifications.'], function () {
    Route::get('/', [NotificationController::class, 'showList']);
    Route::post('send', [NotificationController::class, 'test'])->name('sendMessage');
    Route::post('test', [NotificationController::class, 'test'])->name('duong');
    Route::post('load', [NotificationController::class, 'getNotification'])->name('loadMessage');
});




Route::middleware(CheckUser::class)->group(function(){
    Route::get('/',[HomeController::class,'index'])->name('home');;
    Route::get('car/{id}',[HomeController::class,'passengerCarDetail'])->name('passengerCar.detail');

    //Route::post('/passengerCar-detail',[HomeController::class,'passengerCarDetail'])->name('passengerCar-detail');
    Route::resource('/profile',ProfileController::class);
    Route::get('/profile/ticketdetails/{id}',[ProfileController::class,'ticketDetails'])->name('ticketDetails_index');
    Route::post('/profile/ticketDetailDelete/{id}',[ProfileController::class,'ticketDetailsDelete'])->name('ticketDetails_delete');

    Route::get('/search', [SearchController::class, 'searchRequest'])->name('search');
    Route::post('/sortBy', [SearchController::class, 'sortBy'])->name('sortBy');

    Route::post('/process', [PhoneAuthController::class, 'store'])->name('client.phone.process');
    Route::get('/log-out', [PhoneAuthController::class, 'logout'])->name('client.phone.logout');

    Route::group(['prefix' => 'notifications', 'as' => 'notifications.'], function () {
        Route::get('/', [NotificationController::class, 'showList']);
        Route::post('send', [NotificationController::class, 'sendNotification'])->name('sendMessage');
        Route::post('load', [NotificationController::class, 'getNotification'])->name('loadMessage');
    });


    Route::get('/blog/{id}', [BlogController::class, 'blog'])->name('blog');
    Route::get('/blogs', [BlogController::class, 'show'])->name('blog.show');
//    Route::get('/category-detail/{id}',[BlogController::class, 'show'])->name('category-detail');
//    Route::get('/category-blog/{id}', [BlogController::class, 'blog'])->name('category-blog');



    Route::post('/update-ticket', [TicketController::class, 'CountTicket'])->name('client.ticket.update-ticket');
    Route::post('/change-ticket', [TicketController::class, 'ChangeTicket'])->name('client.ticket.changed-ticket');
    Route::get('/payment-method', [TicketController::class, 'PaymentView'])->name('client.ticket.payment-method');
    Route::post('/cancel-ticket', [TicketController::class, 'CancelTicket'])->name('client.ticket.cancel-ticket');
    Route::post('/send-ticket', [TicketController::class, 'endPayment'])->name('client.ticket.end-payment-ticket');

    Route::post('/vnpay-method', [TicketController::class, 'vnpay_payment'])->name('client.ticket.vnpay-method');
    Route::post('/momo-method', [TicketController::class, 'momo_payment'])->name('client.ticket.momo-method');
    Route::get('/vnpay-todb', [TicketController::class, 'checkoutPayment'])->name('client.ticket.add-vnpay-to-db');
    Route::get('/end-ticket-payment', [TicketController::class, 'EndTicketPayment'])->name('client.finish.ticket');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/search-ticket', [ContactController::class, 'search'])->name('client.contact.search');
    Route::post('/search-ticket', [ContactController::class, 'searchTicket'])->name('client.contact.searchTicket');
    
});

Route::get('/loginadmin', [App\Http\Controllers\LoginAdminController::class, 'showLoginAdmin'])->name('login_admin');



    Route::post('/loginadmin', [App\Http\Controllers\LoginAdminController::class, 'loginAdmin'])->name('login_admin_success');

    Route::get('/logoutadmin', [App\Http\Controllers\LoginAdminController::class, 'logoutAdmin'])->name('logoutAdmin');

#Dang ky xe
Route::get('/car-register', [CarRegisterController::class, 'index'])->name('car-register.index');
Route::post('/car-register', [CarRegisterController::class, 'post'])->name('car-register.index');

//về chúng tôi
Route::get('/about_us',[App\Http\Controllers\Client\AboutController::class,'index'])->name('about_us.index');
Route::get('/vision',[App\Http\Controllers\Client\AboutController::class,'vision'])->name('about_us.vision');
Route::get('/mission',[App\Http\Controllers\Client\AboutController::class,'mission'])->name('about_us.mission');

Route::post('clear-session',[TicketController::class, 'clearSession'])->name('clear');



