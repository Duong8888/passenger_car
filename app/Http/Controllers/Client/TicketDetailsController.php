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
        return view('client.pages.ticketdetails.index',compact('tickets','user'));
    }
}
