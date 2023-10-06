<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketIndexController extends Controller
{
    public function index(){
        $tickets = DB::table('tickets')->select('id','username','phone','email','user_id','passenger_car_id','quantity','total_price','payment_method','status')->get();
        return view('client.pages.profile',compact('tickets'));
    }
    public function getSearch(Request $request){
        $tickets = Ticket::where('username','like','%'.$request->key.'%')->get();
        return view('client.pages.profile', compact('tickets'));
    }
}
