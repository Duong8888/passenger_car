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
    )
    {
    }

    public function index(){

        $data = $this->vietnameseProvinces->get('name');
        $stops = [];
        foreach ($data as $key => $value) {
            $stops[] = $value->name;
        }

        $albums = PassengerCar::with('albums')->get();
        $routes = Routes::all();
        $passengerCars = PassengerCar::with('workingTime')->get();
        $workingTime = WorkingTime::all();
        // return response()->json($passengerCars, 200, [], JSON_PRETTY_PRINT);
        return view('client.pages.home.index', compact('albums', 'routes', 'passengerCars','workingTime','stops'));

    }

    public function passengerCarDetail(Request $request){
        $albums = PassengerCar::with('albums')->get();
        $routes = PassengerCar::with('route')->where('route_id',$request->route_id)->take(4)->get();
        $passengerCars = PassengerCar::with('workingTime')->find($request->passenger_id);
        $services = PassengerCar::with('services')->get();
        $users = User::all();
        $comments = Comment::where('passenger_car_id',$request->passenger_id)->get();

        // return response()->json($stop[0]->route, 200, [], JSON_PRETTY_PRINT);
        // dd($comments);

        return view('client.pages.home.passengerCar-detail', compact('albums', 'routes', 'passengerCars','services','users','comments'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
