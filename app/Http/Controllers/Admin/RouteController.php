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
        $id = auth()->id();

        $data = Stops::whereRaw("JSON_CONTAINS(user_id, '$id')")
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
        if (!empty($request->input('car'))) {
            $carId = $request->input('car');
            foreach ($carId as $key => $id) {
                $car = PassengerCar::query()->findOrFail($id);
                if ($car) {
                    $car->route_id = $route->id;
                    $car->save();
                }
            }
        }


        $user_id = Auth::id();
        foreach ($departureArr as $key => $departure) {
            $existingStop = Stops::where('stop_name', strtolower($departure))->where('route_id', $route->id)->first();
            if ($existingStop) {
                $userIds = json_decode($existingStop->user_id, true);
                $user_ids = $userIds ?? [];
                if (!in_array($user_id, $user_ids)) {
                    $user_ids[] = $user_id;
                    $existingStop->user_id = $user_ids;
                    $existingStop->save();
                }
            } else {
                $data = [
                    'route_id' => $route->id,
                    'stop_name' => strtolower($departure),
                    'stop_type' => 0,
                    'user_id' => json_encode([$user_id]),
                    'order' => $key,
                ];
                Stops::create($data);
            }
        }

        foreach ($arrivalArr as $key => $arrival) {
            $existingStop = Stops::where('stop_name', strtolower($arrival))->where('route_id', $route->id)->first();
            if ($existingStop) {
                $userIds = json_decode($existingStop->user_id, true);
                $user_ids = $userIds ?? [];
                if (!in_array($user_id, $user_ids)) {
                    $user_ids[] = $user_id;
                    $existingStop->user_id = $user_ids;
                    $existingStop->save();
                }
            } else {
                $data = [
                    'route_id' => $route->id,
                    'stop_name' => strtolower($arrival),
                    'stop_type' => 1,
                    'user_id' => json_encode([$user_id]),
                    'order' => $key,
                ];
                Stops::create($data);
            }
        }
        return response()->json('Thêm mới thành công');
    }

    public function edit(string $id)
    {
        if (\request()->ajax()) {
            $userId = Auth::id();
            $route = $this->model->findOrFail($id);
            $stops = $route->stops()
                ->whereRaw("JSON_CONTAINS(user_id, '$userId')")
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

        $departure = $request->input('route_departure');
        $arrival = $request->input('route_arrival');
        $departureArr = $request->input('departure');
        $arrivalArr = $request->input('arrival');

        $route = Routes::findOrFail($id);

        $route->update([
            'departure' => $departure,
            'arrival' => $arrival,
        ]);

        $route->passengerCars()->update(['route_id' => null]);
        if(!empty($request->input('car'))){
            $carId = $request->input('car');
            foreach ($carId as $carId) {
                $car = PassengerCar::findOrFail($carId);
                $car->update(['route_id' => $route->id]);
            }
        }


        Stops::where('route_id', $route->id)->delete();

        $user_id = Auth::id();

        foreach ($departureArr as $key => $departure) {
            $existingStop = Stops::where('stop_name', strtolower($departure))->where('route_id', $route->id)->first();
            if ($existingStop) {
                $userIds = json_decode($existingStop->user_id, true);
                $user_ids = $userIds ?? [];
                if (!in_array($user_id, $user_ids)) {
                    $user_ids[] = $user_id;
                    $existingStop->user_id = $user_ids;
                    $existingStop->save();
                }
            } else {
                $data = [
                    'route_id' => $route->id,
                    'stop_name' => strtolower($departure),
                    'stop_type' => 0,
                    'user_id' => json_encode([$user_id]),
                    'order' => $key,
                ];
                Stops::create($data);
            }
        }

        foreach ($arrivalArr as $key => $arrival) {
            $existingStop = Stops::where('stop_name', strtolower($arrival))->where('route_id', $route->id)->first();
            if ($existingStop) {
                $userIds = json_decode($existingStop->user_id, true);
                $user_ids = $userIds ?? [];
                if (!in_array($user_id, $user_ids)) {
                    $user_ids[] = $user_id;
                    $existingStop->user_id = $user_ids;
                    $existingStop->save();
                }
            } else {
                $data = [
                    'route_id' => $route->id,
                    'stop_name' => strtolower($arrival),
                    'stop_type' => 1,
                    'user_id' => json_encode([$user_id]),
                    'order' => $key,
                ];
                Stops::create($data);
            }
        }
        return response()->json('Cập nhật thành công');
    }


    public function destroy(string $id)
    {
        $user = Auth::user();

        $route = Routes::findOrFail($id);

        $route->stops()
            ->where('user_id', $user->id)
            ->delete();

        $route->passengerCars()->update(['route_id' => null]);
        $route->delete();
        return response()->json('Xóa thành công');
    }


}
