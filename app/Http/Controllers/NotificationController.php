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

    public function sendNotification($id ,$message)
    {
        event(new NewNotification($id, $message));
        $data = [
            'user_id' => $id,
            'user_send' => \auth()->user()->id,
            'content' => $message,
            'is_read' => false,
            'url' => 'ticket',
        ];
        $this->store($data);
    }


    public function test(Request $request){
        Log::info($request->all());
        $this->sendNotification($request->id ,$request->message);
    }

    public function store($data)
    {
        Notifications::create($data);
    }

    public function getNotification(Request $request){

        $notification = Notifications::orderBy("created_at", "DESC")->get();
        $countNotification = Notifications::query()->where('is_read',false)->count();
        return response()->json(['notification' => $notification, 'count' => $countNotification]);
    }

    public function showList()
    {
        $data = User::all();
        return view('client.pages.notification', compact('data'));
    }

}
