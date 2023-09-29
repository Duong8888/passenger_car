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
        $departure = [];
        $arrival = [];
        foreach ($data as $key => $value) {
            $departure[] = $value->departure;
            $arrival[] = $value->arrival;
        }
        $uniqueDeparture = array_unique($departure);
        $uniqueArrival= array_unique($arrival);
        return  ["departure" => $uniqueDeparture, "arrival" =>$uniqueArrival];
    }

    public function home()
    {
        $data = $this->dataRouter();
        return view($this->pathview.'.home',['arrival'=>$data['arrival'], 'departure'=>$data['departure']]);
    }

    public function searchRequest(Request $request)
    {
        $query = $request->input('departure')." ".$request->input('arrival');
        $routes = Routes::search($query)->get();
        $passengerCar = $routes[0]->passengerCars()->get();
        return view($this->pathview.'.findRoutes',['data'=>$passengerCar]);
    }



}
