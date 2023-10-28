<?php

namespace App\Http\Controllers;

use App\Models\VietnameseProvinces;
use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Routes;
use App\Models\PassengerCar;
use App\Models\WorkingTime;
use App\Models\Comment;
use App\Models\Service;
use App\Models\Stops;
use App\Models\User;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

// use App\Models\PassengerCarWorkingTime;

class MapController  extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct() {
    }

    public function index(Request $request)
    {
        $ticketId = $request->ticketId;
        $workTime =  $this->getWorkingTime($ticketId);
        if ($request->ajax()) {
            return response()->json($workTime);
        }
        return view('client.pages.map.index', ['ticketId' => $ticketId]);
    }

    public function getWorkingTime($ticketId): array
    {
        $query = DB::table('working_times')
            ->select('*'
            )
            ->join('passenger_car_working_times', 'passenger_car_working_times.working_time_id', '=', 'working_times.id')
            ->join('passenger_cars', 'passenger_car_working_times.passenger_car_id', '=', 'passenger_cars.id')
            ->join('tickets', 'tickets.passenger_car_id', '=', 'passenger_cars.id')
            ->where('tickets.id', $ticketId);
        $data = $query->get();
        return ['data' => $data];
    }
}
