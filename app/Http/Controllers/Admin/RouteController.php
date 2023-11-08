<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use App\Http\Controllers\Controller;
use App\Models\PassengerCar;
use App\Models\Stops;
use App\Models\VietnameseProvinces;
use Illuminate\Http\Request;
use App\Models\Routes;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RouteController extends AdminBaseController
{
    public $model = Routes::class;
    public $pathView = 'admin.pages.route.';
    public $urlbase = 'admin.route.';
    public $fieldImage = 'route';
    public $urlIndex = 'route.index';
    public $folderImage = 'categories/image';
    public $titleIndex = 'Danh sách tuyến đường';
    public $titleCreate = 'Thêm mới tuyến đường';
    public $titleShow = 'Xem chi tiết';
    public $titleEdit = 'Cập nhật';


    public function index(Request $request)
    {
        parent::index($request);
        $dataRoute = VietnameseProvinces::all();
        $carData = PassengerCar::query()
            ->where('user_id', Auth::user()->id)
            ->whereNull('route_id')
            ->get();
        $data = Stops::where('user_id', Auth::user()->id)
            ->join('routes', 'stops.route_id', '=', 'routes.id')
            ->select('routes.departure', 'routes.arrival', 'routes.id')
            ->distinct()
            ->paginate(10);
        if ($request->ajax()) {
            return response()->json(['data' => $data, 'carData' => $carData,]);
        }
        return view($this->pathView . __FUNCTION__, compact('data', 'dataRoute', 'carData'))
            ->with('title', $this->titleIndex)
            ->with('colums', $this->colums)
            ->with('urlbase', $this->urlbase)
            ->with('titleCreate', $this->titleCreate);
    }

    public function store(Request $request)
    {
        Log::info($request->all());
        $carId = $request->input('car');
        $departure = $request->input('routeDeparture');
        $arrival = $request->input('routeArrival');
        $departureArr = $request->input('departure');
        $arrivalArr = $request->input('arrival');
        $route = Routes::where('departure', $departure)
            ->where('arrival', $arrival)
            ->first();
        if (!$route) {
            $slug = Str::slug($departure . " đi " . $arrival);
            $route = Routes::create([
                'slug' => $slug,
                'departure' => $departure,
                'arrival' => $arrival,
                'price' => '0',
            ]);
        }
        foreach ($carId as $key => $id) {
            $car = PassengerCar::query()->findOrFail($id);
            if ($car) {
                $car->route_id = $route->id;
                $car->save();
            }
        }

        $arrStop = [];
        foreach ($arrivalArr as $key => $value) {
            $arrStop[] = [
                'stop_name' =>$value,
                'stop_type' =>1,
                'route_id' =>$route->id,
                'user_id' => Auth::user()->id,
                'order' =>$key,
            ];
        }
        foreach ($departureArr as $key => $value) {
            $arrStop[] = [
                'stop_name' =>$value,
                'stop_type' =>0,
                'route_id' =>$route->id,
                'user_id' => Auth::user()->id,
                'order' =>$key,
            ];
        }

        Stops::query()->insert($arrStop);
        return response()->json('Thêm mới thành công');
    }

    public function edit(string $id)
    {
        if (\request()->ajax()) {
            $userId = Auth::id();
            $route = $this->model->findOrFail($id);
            $stops = $route->stops()
                ->where('user_id', $userId)
                ->get();
            $cars = $route->passengerCars()
                ->where('user_id', $userId)
                ->where('route_id', $route->id)
                ->get();
            $carsNull = PassengerCar::query()
                ->where('user_id', Auth::user()->id)
                ->whereNull('route_id')
                ->get();
            return response()->json(['route' => $route, 'cars' => $cars, 'stops' => $stops, 'carNull' => $carsNull]);
        }
        return parent::edit($id);
    }

    public function update(Request $request, string $id)
    {

    }

}
