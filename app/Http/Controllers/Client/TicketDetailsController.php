<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketDetailsController extends Controller
{
    public function index(Request $request){
         $user = auth()->user();
         $tickets = Ticket::all();
        //  return response()->json($user->tickets, 200, [], JSON_PRETTY_PRINT);
        return view('client.pages.ticketdetails.index',compact('user','tickets'));
    }
}
