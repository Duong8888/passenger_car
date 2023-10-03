<?php

namespace App\Http\Controllers;

use App\Models\Notifications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function store(Request $request)
    {
        $data = [
            'user_id' => '1',
            'user_send' => Auth::user()->id,
            'content' => $request->input('content'),
            'is_read' => '1',
            'url' => 'facebook.com',
        ];
    }
}
