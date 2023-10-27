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

// use App\Models\PassengerCarWorkingTime;

class HomeController  extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct(
        public VietnameseProvinces $vietnameseProvinces
    ) {
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
        return view('client.pages.home.index', compact('albums', 'routes', 'passengerCars','stops','users'));


    }
    public function passengerCarDetail(Request $request)
    {
        $albums = PassengerCar::with('albums')->get();
        $routes = PassengerCar::with('route')->where('route_id', $request->route_id)->take(4)->get();
        $passengerCars = PassengerCar::with('workingTime')->find($request->passenger_id);
        $services = PassengerCar::with('services')->get();
        $users = User::all();
        $comments = Comment::where('passenger_car_id', $request->passenger_id)->get();
        $stops = Stops::where('route_id', $request->route_id)->get();

        return view('client.pages.home.passengerCar-detail', compact('albums', 'routes', 'passengerCars', 'users', 'comments', 'stops', 'services'));
    }
}
