<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PassengerCar;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RevenueStaffController extends Controller
{
    public function index(Request $request)
    {
        $start_date = $request->input('start_date');
        $end_date = Carbon::parse($request->input('end_date'))->endOfDay();
        if (is_null($start_date)) {
            $start_date = now()->toDateString();
        }
        if (is_null($end_date)) {
            $end_date = now()->toDateString();
        }
        if ($start_date && $end_date) {
            $passengerCarsQuery = PassengerCar::with('user', 'tickets')
                ->whereHas('tickets', function ($ticketQuery) use ($start_date, $end_date) {
                    $ticketQuery->whereBetween('created_at', [$start_date, $end_date]);
                });
        } else {
            $today = Carbon::now()->endOfDay();
            $passengerCarsQuery = PassengerCar::with('user', 'tickets')
                ->whereHas('tickets', function ($ticketQuery) use ($today) {
                    $ticketQuery->whereBetween('created_at', [$today, $today]);
                });
        }
        
        $passengerCars = $passengerCarsQuery->get();
        $mergedCars = $passengerCars->groupBy('user_id')->map(function ($group) {
            return [
                'tenNhaXe' => $group[0]->user->name,
                'soLuongXe' => count($group),
                'soLuongVeDat' => $group->sum(function ($car) {
                    return $car->tickets->count();
                }),
                'soLuongNguoi' => $group->sum(function ($car) {
                    return $car->tickets->sum('quantity');
                }),
                'ttOnline' => $group->sum(function ($car) {
                    return $car->tickets->filter(function ($ticket) {
                        return $ticket->status == 2;
                    })->count();
                }),
                'ttOffline' => $group->sum(function ($car) {
                    return $car->tickets->filter(function ($ticket) {
                        return $ticket->status == 1;
                    })->count();
                }),
                'huy' => $group->sum(function ($car) {
                    return $car->tickets->filter(function ($ticket) {
                        return $ticket->status == 0;
                    })->count();
                }),
                'doanhThu' => $group->sum(function ($car) {
                    return $car->tickets->sum('total_price');
                }),
            ];
        });
        // return response()->json($mergedCars, 200, [], JSON_PRETTY_PRINT);
        return view('staff.revenue.index',compact('mergedCars'));
    }

}
