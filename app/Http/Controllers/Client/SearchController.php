<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\PassengerCar;
use App\Models\PassengerCarService;
use App\Models\Routes;
use App\Models\Service;
use App\Models\Stops;
use App\Models\User;
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
        public PassengerCarService $passengerCarService,
        public User                $users,
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


    public function searchRequest(Request $request)
    {
        $user = $this->users->where('user_type', 'admin')->get();
        $routes = $this->routes
            ->where('arrival', $request->arrival)
            ->where('departure', $request->departure)
            ->get();
        $dataRoutes = $this->dataRouter();
        $passengerCar = [];
        $message = null;

        $filterStops = $this->filterStops($request->departure, $request->arrival);
        if (count($routes) > 0) {
            $passengerCar = $routes[0]->passengerCars()->orderBy('price', 'desc')->with(['workingTime', 'services', 'user', 'albums'])->get();
        } else {
            $routes = [];
        }
        if (count($passengerCar) == 0) {
            $message = "Tuyến đường chưa có xe hoạt động .";
        }
        if ($request->ajax()) {
            return response()->json(['data' => $passengerCar, 'filterStops' => $filterStops['data'], 'dataRoute' => $routes[0]]);
        } else {
            if (empty($routes)) {
                $routes[0] = [];
            }
            return view($this->pathview . '.findRoutes', ['data' => $passengerCar, 'dataRoute' => $routes[0], 'stops' => $dataRoutes['stops'], 'filterStops' => $filterStops['data'], 'message' => $message, 'user' => $user]);
        }
    }


    public function filterPassengerCars($departure = null, $arrival = null, $type = null, $minTimes = null, $maxTimes = null, $priceStart = null, $priceEnd = null, $users = null, $departureStop = null, $arrivalStop = null)
    {
        $query = DB::table('passenger_cars')
            ->join('routes', 'passenger_cars.route_id', '=', 'routes.id')
            ->join('passenger_car_working_times', 'passenger_cars.id', '=', 'passenger_car_working_times.passenger_car_id')
            ->join('working_times', 'passenger_car_working_times.working_time_id', '=', 'working_times.id')
//            ->join('stops', 'stops.route_id', '=', 'routes.id')
            ->join('users', 'passenger_cars.user_id', '=', 'users.id')
            ->leftjoin('albums', function ($join) {
                $join->on('passenger_cars.id', '=', 'albums.passenger_car_id');
            })
            ->select(
                'passenger_cars.id',
                'passenger_cars.price',
                'routes.departure',
                'routes.arrival',
                'passenger_cars.capacity',
                'working_times.departure_time',
                'working_times.arrival_time',
                'working_times.id as working_times_id',
                'users.name',
                DB::raw('MAX(albums.path) as path')
            )
            ->groupBy('passenger_cars.id', 'passenger_cars.price', 'routes.departure', 'routes.arrival', 'passenger_cars.capacity', 'working_times.departure_time', 'working_times.arrival_time', 'working_times.id', 'users.name')
            ->where('routes.departure', $departure)
            ->where('routes.arrival', $arrival);

        if ($type != null) {
            $query->orderBy('passenger_cars.price', $type);
        }

        if ($departureStop !== null) {
            $query->whereExists(function ($query) use ($departureStop) {
                $query->select(DB::raw(1))
                    ->from('stops')
                    ->whereColumn('stops.route_id', 'routes.id')
                    ->where('stops.id', $departureStop)
                    ->whereRaw('JSON_CONTAINS(stops.user_id, CAST(passenger_cars.user_id AS CHAR))');
            });
        }

        if ($arrivalStop !== null) {
            $query->whereExists(function ($query) use ($arrivalStop) {
                $query->select(DB::raw(1))
                    ->from('stops')
                    ->whereColumn('stops.route_id', 'routes.id')
                    ->where('stops.id', $arrivalStop)
                    ->whereRaw('JSON_CONTAINS(stops.user_id, CAST(passenger_cars.user_id AS CHAR))');
            });
        }



        if ($minTimes != null || $maxTimes != null) {
            $query->where(function ($query) use ($minTimes, $maxTimes) {
                foreach ($minTimes as $key => $minTime) {
                    $query->orWhereBetween('working_times.departure_time', [$minTime, $maxTimes[$key]]);
                }
            });
        }

        if ($priceStart != null || $priceEnd != null) {
            $query->whereBetween('passenger_cars.price', [$priceStart, $priceEnd]);
        }

        if ($users != null) {
            $userIdsArray = $users;
            $userIds = array_keys($userIdsArray);
            $query->whereIn('passenger_cars.user_id', $userIds);
        }

        log::info($query->toSql());
        return $query->get();
    }

    public function sortBy(Request $request)
    {
        Log::info($request->all());
        $routes = $this->routes
            ->where('arrival', $request->arrival)
            ->where('departure', $request->departure)
            ->get();
        Log::info($routes);
        $departure = $request->departure;
        $arrival = $request->arrival;
        $type = $request->input('type', 'desc');
        $max = $request->input('max', '');
        $min = $request->input('min', '');
        $priceStart = $request->input('price-start', '0');
        $priceEnd = $request->input('price-end', '2000000');
        $users = $request->input('users');
        $departureStop = $request->input('departureStop',null);
        $arrivalStop = $request->input('arrivalStop', null);


        $idPassengerCars = $this->filterPassengerCars($departure, $arrival, $type, $min, $max, $priceStart, $priceEnd, $users,$departureStop,$arrivalStop);
        $service = $this->service::all();
        $PassengerCarsService = $this->passengerCarService::all();
        Log::info($idPassengerCars);
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
