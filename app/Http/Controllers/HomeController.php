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

// use App\Models\PassengerCarWorkingTime;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct(
        public VietnameseProvinces $vietnameseProvinces
    )
    {
    }

    public function index()
    {

        $data = $this->vietnameseProvinces->get('name');
        $stops = [];
        foreach ($data as $key => $value) {
            $stops[] = $value->name;
        }

        $albums = PassengerCar::with('albums')->get();
        $routes = Routes::all();

        $users = User::where('user_type', 'staff')->take(8)->get();
        $passengerCars = PassengerCar::with('workingTime')->whereNotNull('route_id')->inRandomOrder()->get();
        return view('client.pages.home.index', compact('albums', 'routes', 'passengerCars', 'stops', 'users'));
    }

    public function passengerCarDetail(Request $request)
    {
        $passengerCars = PassengerCar::query()
            ->where('id', $request->id)
            ->with([
                'services',
                'albums',
                'user',
                'route',
                'comments',
                'workingTime'
            ])->get();

        $albums = $passengerCars[0]->albums;
        $routes = $passengerCars[0]->route;
        $services = $passengerCars[0]->services;
        $user = User::where('id', $passengerCars[0]->user->id)->get('id');
        $comments = $passengerCars[0]->comments;
        $workingTime = WorkingTime::query()->where('id', $request->time)->get();
        $stops = Stops::where('route_id', $passengerCars[0]->route->id)->where('user_id', $user[0]->id)->get();

        return view('client.pages.home.passengerCar-detail', compact('albums', 'routes', 'passengerCars', 'user', 'comments', 'stops', 'services', 'workingTime'));
    }

    public function listPassengerCar(Request $request)
    {
        $passengerCarMore = $this->passengerCarMoreDAO();
        if ($request->ajax()) {
            return response()->json($passengerCarMore);
        }
    }

    public function passengerCarMoreDAO(): array
    {
        $query = DB::table('passenger_cars')
            ->select('passenger_cars.id',
                'passenger_cars.license_plate',
                'passenger_cars.capacity',
                'passenger_cars.price',
                'passenger_cars.description',
                'passenger_cars.user_id',
                'passenger_cars.route_id',
                'routes.departure',
                'routes.arrival',
                'passenger_car_working_times.working_time_id',
                'passenger_car_working_times.passenger_car_id',
                'working_times.departure_time',
                'working_times.arrival_time',
                'users.name')
            ->join('routes', 'passenger_cars.route_id', '=', 'routes.id')
            ->join('passenger_car_working_times', 'passenger_car_working_times.passenger_car_id', '=', 'passenger_cars.id')
            ->join('working_times', 'passenger_car_working_times.working_time_id', '=', 'working_times.id')
            ->join('users', 'passenger_cars.user_id', '=', 'users.id');
        $data = $query->get();
        return ['data' => $data];
    }


}
