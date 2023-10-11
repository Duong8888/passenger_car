<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\PassengerCar;
use App\Models\Routes;
use App\Models\Stops;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SearchController extends Controller
{
    public $pathview = 'client.pages';

    public function __construct(
        public Routes       $routes,
        public PassengerCar $passengerCar,
    )
    {
    }

    public function dataRouter()
    {
        $data = $this->routes->all();
        $stops = [];
        foreach ($data as $key => $value) {
            $stops[] = $value->departure;
            $stops[] = $value->arrival;
        }
        $uniqueStops = array_unique($stops);
        return ["stops" => $uniqueStops];
    }

    public function home()
    {
        $data = $this->dataRouter();
        return view($this->pathview . '.home', ['stops' => $data['stops']]);
    }

    public function searchRequest(Request $request)
    {
        $query = $request->departure . " " . $request->arrival;
        $routes = $this->routes::search($query)->get();
        $dataRoutes = $this->dataRouter();
        $passengerCar = [];
        $message = null;
        if (count($routes) > 0) {
            $passengerCar = $routes[0]->passengerCars()->orderBy('price', 'desc')->with(['workingTime','services'])->get();
        } else {
            $routes = [];
        }
        if (count($passengerCar) == 0) {
            $message = "Tuyến đường chưa có xe hoạt động .";
        }
        if ($request->ajax()) {
            return response()->json(['data' => $passengerCar, 'dataRoute' => $routes[0]]);
        } else {
            if (empty($routes)) {
                $routes[0] = [];
            }
            return view($this->pathview . '.findRoutes', ['data' => $passengerCar, 'dataRoute' => $routes[0], 'stops' => $dataRoutes['stops'], 'message' => $message]);
        }
    }

    public function sortBy(Request $request)
    {
        Log::info($request->all());
        $query = $request->departure . " " . $request->arrival;
        $routes = $this->routes::search($query)->get();
        $passengerCar = [];

        if (count($routes) > 0) {

            if($request->has('type')){
                $passengerCar = $routes[0]->passengerCars()->orderBy('price', $request->type)->with(['workingTime','services'])->get();
            }

            if($request->has('type')){

            }

        } else {
            $routes = [];
        }
        return response()->json(['data' => $passengerCar, 'dataRoute' => $routes[0]]);
    }



}
