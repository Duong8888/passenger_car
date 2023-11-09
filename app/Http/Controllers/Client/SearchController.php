<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\PassengerCar;
use App\Models\PassengerCarService;
use App\Models\Routes;
use App\Models\Service;
use App\Models\Stops;
use App\Models\VietnameseProvinces;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SearchController extends Controller
{
    public $pathview = 'client.pages.filter';

    public function __construct(
        public Routes              $routes,
        public PassengerCar        $passengerCar,
        public VietnameseProvinces $vietnameseProvinces,
        public Service             $service,
        public PassengerCarService $passengerCarService
    )
    {
    }

    public function dataRouter()
    {
        $data = $this->vietnameseProvinces->get('name');
        $stops = [];
        foreach ($data as $key => $value) {
            $stops[] = $value->name;
        }
        return ["stops" => $stops];
    }

    public function home()
    {
        $data = $this->dataRouter();
        return view($this->pathview . '.findRoutes', ['stops' => $data['stops']]);
    }

    public function searchRequest(Request $request)
    {
        $query = $request->departure . " " . $request->arrival;
        $routes = $this->routes::search($query)->get();
        $dataRoutes = $this->dataRouter();
        $passengerCar = [];
        $message = null;

        $filterStops = $this->filterStops($request->departure, $request->arrival);
        if (count($routes) > 0) {
            $passengerCar = $routes[0]->passengerCars()->orderBy('price', 'desc')->with(['workingTime', 'services'])->get();
        } else {
            $routes = [];
        }
        if (count($passengerCar) == 0) {
            $message = "Tuyến đường chưa có xe hoạt động .";
        }
        if ($request->ajax()) {
            return response()->json(['data' => $passengerCar, 'filterStops' => $filterStops['data'] , 'dataRoute' => $routes[0]]);
        } else {
            if (empty($routes)) {
                $routes[0] = [];
            }
            return view($this->pathview . '.findRoutes', ['data' => $passengerCar, 'dataRoute' => $routes[0], 'stops' => $dataRoutes['stops'], 'filterStops' => $filterStops['data'], 'message' => $message]);
        }
    }


    public function filterPassengerCars($departure, $arrival, $filterArrival, $filterDeparture, $type = null, $minTimes = [], $maxTimes = [], $priceStart = null, $priceEnd = null)
    {
        $query = DB::table('passenger_cars')
            ->join('routes', 'passenger_cars.route_id', '=', 'routes.id')
            ->join('passenger_car_working_times', 'passenger_cars.id', '=', 'passenger_car_working_times.passenger_car_id')
            ->join('working_times', 'passenger_car_working_times.working_time_id', '=', 'working_times.id')
            ->join('stops', 'stops.route_id', '=', 'routes.id')
            ->join('users', 'users.id', '=', 'passenger_cars.user_id')
            ->join('contacts', 'contacts.phone', '=', 'users.phone')
            ->select(
                'passenger_cars.id',
                'passenger_cars.price',
                'routes.departure',
                'routes.arrival',
                'passenger_cars.capacity',
                'working_times.departure_time',
                'working_times.arrival_time',
                'working_times.id as working_times_id',
                'contacts.passengerCar_name'
            )
            ->where('routes.departure', $departure)
            ->where('routes.arrival', $arrival);

        if (!empty($type)) {
            $query->orderBy('passenger_cars.price', $type);
        }

        if (!empty($filterArrival)) {
            $query->where('stops.id', $filterArrival);
        }
        if (!empty($filterDeparture)) {
            $query->where('stops.id', $filterDeparture);
        }

        if (!empty($minTimes) || !empty($maxTimes)) {
            $query->where(function ($query) use ($minTimes, $maxTimes) {
                foreach ($minTimes as $key => $minTime) {
                    $query->orWhereBetween('working_times.departure_time', [$minTime, $maxTimes[$key]]);
                }
            });
        }

        if (!empty($priceStart) || !empty($priceEnd)) {
            $query->whereBetween('passenger_cars.price', [$priceStart, $priceEnd]);
        }
        log::info($query->toSql());
        return $query->get();
    }

    public function sortBy(Request $request)
    {
        $query = $request->departure . " " . $request->arrival;
        $routes = $this->routes::search($query)->get();
        $departure = $request->departure;
        $arrival = $request->arrival;
        $filterArrival = $request->filterArrival;
        $filterDeparture = $request->filterDeparture;
        $type = $request->input('type', 'desc');
        $max = $request->input('max', '');
        $min = $request->input('min', '');
        $priceStart = $request->input('price-start', '0');
        $priceEnd = $request->input('price-end', '2000000');


        $idPassengerCars = $this->filterPassengerCars($departure, $arrival, $filterArrival, $filterDeparture, $type, $min, $max, $priceStart, $priceEnd);
        $service = $this->service::all();
        $PassengerCarsService = $this->passengerCarService::all();
        return response()->json(['data' => $idPassengerCars, 'dataRoute' => $routes[0], 'service' => $service, 'passengerCarsService' => $PassengerCarsService]);
    }

    public function filterStops($departure, $arrival)
    {
        $query = DB::table('stops')
            ->select(
                'stops.id',
                'stops.stop_name',
                'stops.stop_type'
            )
            ->join('routes', 'stops.route_id', '=', 'routes.id')
            ->where('routes.departure', $departure)
            ->where('routes.arrival', $arrival);
        log::info($query->toSql());
        $filterStops = $query->get();
        return ['data' => $filterStops];
    }

}
