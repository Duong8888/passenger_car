<?php

namespace App\Http\Controllers;

use App\Events\NewNotification;
use App\Models\Notifications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class NotificationController extends Controller
{
    public function sendMessage()
    {
        event(new NewNotification("13",'Hello bạn nhỏ lâu rồi mình không gặp nhău'));
    }

}
