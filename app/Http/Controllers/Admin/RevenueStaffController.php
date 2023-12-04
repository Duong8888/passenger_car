<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PassengerCar;
use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\alert;

class RevenueStaffController extends Controller
{
    public function index(Request $request)
    {
        return view('staff.revenue.index');
    }

    public function filter_by_date(Request $request){
        $userId = Auth::id();
        $passengerCar = PassengerCar::where('user_id', $userId)->get();
        $tickets = collect();
        $data = $request->all();
        $form_date = $data['form_date'];
        $to_date = $data['to_date'];
        foreach ($passengerCar as $car) {
            $carTickets = $car->tickets()->whereBetween('date', [$form_date, $to_date])->orderBy('date', 'ASC')->get();
            $tickets = $tickets->merge($carTickets);
        }
        $chart_data = [];
        $chart_data = $tickets->groupBy('date')->map(function ($items) {
            return [
                'date' => $items->first()->date,
                'quantity' => $items->sum('quantity'),
                'total_price' => $items->sum('total_price'),
            ];
        })->values()->all();
        echo $data = json_encode($chart_data);
    }
    
    public function filter_by_select(Request $request){
        $userId = Auth::id();
        $passengerCar = PassengerCar::where('user_id', $userId)->get();
        $tickets = collect();
       $data = $request->all();
       $dauthangnay = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
       $dau_thangtruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
       $cuoi_thangtruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();
       $sub7days = Carbon::now('Asia/Ho_Chi_Minh')->subDays(7)->toDateString();
       $sub365days = Carbon::now('Asia/Ho_Chi_Minh')->subDays(365)->toDateString();
       $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

       if($data['dashboard_value'] == '7ngay'){
        // $tickets = Ticket::whereBetween('date',[$sub7days,$now])->orderBy('date','ASC')->get();
        foreach ($passengerCar as $car) {
            $carTickets = $car->tickets()->whereBetween('date', [$sub7days, $now])->orderBy('date', 'ASC')->get();
            $tickets = $tickets->merge($carTickets);
        }
       }elseif($data['dashboard_value'] == 'thangtruoc'){
        // $tickets = Ticket::whereBetween('date',[$dau_thangtruoc,$cuoi_thangtruoc])->orderBy('date','ASC')->get();
        foreach ($passengerCar as $car) {
            $carTickets = $car->tickets()->whereBetween('date', [$dau_thangtruoc, $cuoi_thangtruoc])->orderBy('date', 'ASC')->get();
            $tickets = $tickets->merge($carTickets);
        }
       }elseif($data['dashboard_value'] == 'thangnay'){
        // $tickets = Ticket::whereBetween('date',[$dauthangnay,$now])->orderBy('date','ASC')->get();
        foreach ($passengerCar as $car) {
            $carTickets = $car->tickets()->whereBetween('date', [$dauthangnay, $now])->orderBy('date', 'ASC')->get();
            $tickets = $tickets->merge($carTickets);
        }
       }else{
        // $tickets = Ticket::whereBetween('date',[$sub365days,$now])->orderBy('date','ASC')->get();
        foreach ($passengerCar as $car) {
            $carTickets = $car->tickets()->whereBetween('date', [$sub365days, $now])->orderBy('date', 'ASC')->get();
            $tickets = $tickets->merge($carTickets);
        }
       }
       $chart_data = [];
       $chart_data = $tickets->groupBy('date')->map(function ($items) {
           return [
               'date' => $items->first()->date,
               'quantity' => $items->sum('quantity'),
               'total_price' => $items->sum('total_price'),
           ];
       })->values()->all();
       echo $data = json_encode($chart_data);

    }

    public function dayrevenue(Request $request){
        $userId = Auth::id();
        $passengerCar = PassengerCar::where('user_id', $userId)->get();
        $tickets = collect();
        $sub60days = Carbon::now('Asia/Ho_Chi_Minh')->subDays(30)->toDateString();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        foreach ($passengerCar as $car) {
            $carTickets = $car->tickets()->whereBetween('date', [$sub60days, $now])->orderBy('date', 'ASC')->get();
            $tickets = $tickets->merge($carTickets);
        }
        $chart_data = [];
        $chart_data = $tickets->groupBy('date')->map(function ($items) {
            return [
                'date' => $items->first()->date,
                'quantity' => $items->sum('quantity'),
                'total_price' => $items->sum('total_price'),
            ];
        })->values()->all();
        echo $data = json_encode($chart_data);

    }

}
