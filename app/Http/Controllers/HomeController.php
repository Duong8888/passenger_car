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
        $passengerCars = PassengerCar::query()
            ->where('id',$request->id)
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
        $workingTime = WorkingTime::query()->where('id',$request->time)->get();
        $stops = Stops::where('route_id', $passengerCars[0]->route->id)->where('user_id',$user[0]->id)->get();

        return view('client.pages.home.passengerCar-detail', compact('albums', 'routes', 'passengerCars', 'user', 'comments', 'stops', 'services','workingTime'));
    }
}
