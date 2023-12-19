<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\PassengerCar;
use App\Models\Routes;
use App\Models\Ticket;
use App\Models\WorkingTime;
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
        $ticket = Ticket::where([
            'id'=> $request->id,
            'phone' => $request->phone
        ])
        ->get();
        $passenger_car = PassengerCar::where('id', $ticket[0]->passenger_car_id)->get();
        $route = Routes::where('id', $passenger_car[0]->route_id)->get();
        $time = WorkingTime::where('id', $ticket[0]->time_id )->get();
        
        return view('client.pages.ticket.finish',[
            'data' => $passenger_car[0]->license_plate,
            'email' => $ticket[0]->email,
            'route_departure' => $route[0]->departure,
            'route_arrival' => $route[0]->arrival,
            'departure' => $time[0]->departure_time,
            'arrival' => $time[0]->arrival_time,
            'time_departure' => $ticket[0]->time_departure,
            'time_arrival' => $ticket[0]->time_arrival,
            'username' => $ticket[0]->username,
            'phone' => $ticket[0]->phone,
            'email' => $ticket[0]->email,
            'total_price' => $ticket[0]->total_price,
            'id' => ''
        ]);
    }

}
