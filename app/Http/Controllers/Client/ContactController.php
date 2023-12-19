<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        // Lấy thông tin người dùng hiện tại
        $users = auth()->user();

        // Truyền thông tin người dùng tới view
        return view('client.pages.contact.contact', compact('users'));
    }

    public function search(){
        return view('client.pages.contact.search');
    }

    public function searchTicket(Request $request){
        $ticket = Ticket::where('id', $request->id)
        ->orWhere('phone', $request->phone)
        ->get();
        return view('client.pages.contact.search', compact('ticket'));
    }

}
