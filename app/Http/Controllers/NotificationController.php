<?php

namespace App\Http\Controllers;

use App\Events\NewNotification;
use App\Models\Notifications;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class NotificationController extends Controller
{
    public function sendNotification(Request $request)
    {
        event(new NewNotification($request->id, $request->message));
        $data = [
            'user_id' => $request->id,
            'user_send' => \auth()->user()->id,
            'content' => $request->message,
            'is_read' => false,
            'url' => 'test',
        ];
        $this->store($data);
    }

    public function store($data)
    {
        Notifications::create($data);
    }

    public function getNotification(Request $request){
        $notification = Notifications::query()->where('user_id',$request->id)->with(['user'])->get();
        $countNotification = Notifications::query()->where('is_read',false)->where('user_id',$request->id)->count();
        return response()->json(['notification' => $notification, 'count' => $countNotification]);
    }

    public function showList()
    {
        $data = User::all();
        return view('client.pages.notification', compact('data'));
    }

}
