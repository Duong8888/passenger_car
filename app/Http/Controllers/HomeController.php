<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Routes;
use App\Models\PassengerCar;
use App\Models\WorkingTime;
// use App\Models\PassengerCarWorkingTime;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){

        // Lấy thông tin từ các bảng
        $albums = PassengerCar::with('albums')->get();  // Lấy thông tin từ bảng Album
        //  return response()->json($albums);
        // dd($albums[0]->path);
        $routes = Routes::all();  // Lấy thông tin từ bảng Route
        // return response()->json($routes);
        $passengerCars = PassengerCar::with('workingTime')->take(3)->get();  // Lấy thông tin từ bảng PassengerCar
        // dd($passengerCars);
        $workingTime = WorkingTime::all();  // Lấy thông tin từ bảng WorkingTime

        return view('client.pages.home.index', compact('albums', 'routes', 'passengerCars','workingTime'));

    }
    public function passengerCarDetail(Request $request){
        // dd($request);
        // Lấy thông tin từ các bảng

        $albums = PassengerCar::with('albums')->get();  // Lấy thông tin từ bảng Album
        // return response()->json($albums);
        $routes = PassengerCar::with('route')->where('route_id',$request->route_id)->take(3)->get(); // Lấy thông tin từ bảng Route
        // return response()->json($routes[0]->id);
       
        $passengerCars = PassengerCar::with('workingTime')->find($request->passenger_id);  // Lấy thông tin từ bảng PassengerCar
        // return response()->json($passengerCars);

        // $workingTime = WorkingTime::find($request->passenger_id);  // Lấy thông tin từ bảng WorkingTime
        //  return response()->json($passengerCars);
        $users = PassengerCar::with('user')->where('user_id',$request->user_id)->get();
        // $comments = PassengerCar::with('comments')->get();
        //  return response()->json($passengerCars);


        


        return view('client.pages.home.passengerCar-detail', compact('albums', 'routes', 'passengerCars','users'));

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
        echo'aaaaaaaaaaaaaaa';
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
