<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Routes;
use App\Models\Stops;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public $pathview = 'client.pages';

    public function __construct(
        public Routes $routes,
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
        $routes = Routes::search($query)->get();
        $dataRoutes = $this->dataRouter();
        $passengerCar = [];
        $message = null;
        if(count($routes) > 0){
            $passengerCar = $routes[0]->passengerCars()->get();
        }else{
            $routes = [];
        }
        if(count($passengerCar) == 0){
            $message = "Tuyến đường chưa có xe hoạt động .";
        }
        if ($request->ajax()) {
            return response()->json(['data' => $passengerCar,'dataRoute' => $routes[0]]);
        } else {
           if(empty($routes)){
               $routes[0] = [];
           }
            return view($this->pathview . '.findRoutes', ['data' => $passengerCar,'dataRoute' => $routes[0], 'stops' => $dataRoutes['stops'],'message'=>$message]);
        }
    }



}
