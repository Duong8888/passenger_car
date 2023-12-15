<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\PassengerCar;
use App\Models\Routes;
use App\Models\Service;
use App\Models\Vehicles;
use App\Models\WorkingTime;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PassengerCarController extends AdminBaseController
{
    public $model = PassengerCar::class;
    public $pathView = 'admin.pages.car.';
    public $urlbase = 'admin.car.';
    public $fieldImage = 'path';
    public $urlIndex = 'car.index';
    public $folderImage = 'car';
    public $titleIndex = 'Danh sách xe';
    public $titleCreate = 'Thêm mới xe';
    public $titleShow = 'Xem chi tiết xe';
    public $titleEdit = 'Cập nhật xe';
    public $colums = [
        'license_plate' => 'Biển số',
        'capacity' => 'Số ghế',
        'price' => 'Giá vé',
        'route' => 'Tuyến đường',
        'action' => 'Thao tác',
    ];


    public function index(Request $request)
    {
        $userId = Auth::user()->id;
        if ($request->ajax()) {
            $routes = Routes::all();
            $passengerCar = PassengerCar::query()->with(['route' => function ($query) {
                $query->get('departure', 'arrival');
            }])->orderBy('id', 'desc')->where('user_id', $userId)->paginate(10);
            return \response()->json(['data' => $passengerCar, 'routes' => $routes]);
        }
        $data = $this->model->orderBy('id', 'desc')->where('user_id', $userId)->paginate(10);
        $service = Service::all();
        $type = Vehicles::all();
        return view($this->pathView . __FUNCTION__, compact('data', 'service','type'))
            ->with('title', $this->titleIndex)
            ->with('colums', $this->colums)
            ->with('urlbase', $this->urlbase)
            ->with('titleCreate', $this->titleCreate);
    }

    public function store(Request $request)
    {
        Log::info($request->all());
        $car = new $this->model;
        $album = new Album();
        $images = $request->file($this->fieldImage);
        $departureTime = $request->departure;
        $arrivalTime = $request->arrival;
        $albumData = [];
        $arrService = $request->service;

        $car->fill($request->except([$this->fieldImage, 'arrival', 'departure', '_token']));
        $car->user_id = Auth::user()->id;
        if($request->type == '0'){
            $car->vehicle_id = 0;
        }
        $car->save();

        foreach ($arrService as $service) {
            $car->services()->attach($service);
        }

        foreach ($images as $image) {
            $tmpPath = Storage::put($this->folderImage, $image);
            $albumData[] = [
                'path' => 'storage/' . $tmpPath,
                'passenger_car_id' => $car->id
            ];
        }

        $album->insert($albumData);

        foreach ($departureTime as $key => $departureTimeValue) {
            if (isset($arrivalTime[$key])) {
                $arrivalTimeValue = $arrivalTime[$key];
                $departureTimeValue = strval($departureTimeValue);
                $arrivalTimeValue = strval($arrivalTimeValue);

                $workingTime = WorkingTime::where('departure_time', $departureTimeValue . ':00')
                    ->where('arrival_time', $arrivalTimeValue . ':00')
                    ->first();

                if ($workingTime) {
                    $workingTime->passengerCars()->attach($car->id);
                } else {
                    $workingTime = WorkingTime::create([
                        'departure_time' => $departureTimeValue . ':00',
                        'arrival_time' => $arrivalTimeValue . ':00',
                    ]);
                    $workingTime->passengerCars()->attach($car->id);
                }
            }
        }
        return \response()->json(['message' => 'Thêm thành công']);
    }


    public function edit(string $id)
    {
        return response()->json(PassengerCar::query()->with(['workingTime', 'services', 'albums'])->where('id', $id)->get());
    }

    public function update(Request $request, string $id)
    {
        try {
            $car = PassengerCar::query()->findOrFail($id);
            $car->workingTime()->detach();
            $img = Album::where('passenger_car_id', $id)->get();
            foreach ($img as $value) {
                $image = str_replace('storage/', '', $value->{$this->fieldImage});
                Storage::delete($image);
            }
            Album::where('passenger_car_id', $id)->delete();

            $album = new Album();
            $images = $request->file($this->fieldImage);
            $departureTime = $request->departure;
            $arrivalTime = $request->arrival;
            $albumData = [];
            $arrService = $request->service;

            $car->fill($request->except([$this->fieldImage, 'arrival', 'departure', '_token']));
            $car->user_id = Auth::user()->id;
            $car->save();

            $car->services()->sync($arrService);

            foreach ($images as $image) {
                $tmpPath = Storage::put($this->folderImage, $image);
                $albumData[] = [
                    'path' => 'storage/' . $tmpPath,
                    'passenger_car_id' => $car->id
                ];
            }

            $album->insert($albumData);
            foreach ($departureTime as $key => $departureTimeValue) {
                if (isset($arrivalTime[$key])) {
                    $arrivalTimeValue = $arrivalTime[$key];
                    $departureTimeValue = strval($departureTimeValue);
                    $arrivalTimeValue = strval($arrivalTimeValue);

                    $workingTime = WorkingTime::where('departure_time', $departureTimeValue . ':00')
                        ->where('arrival_time', $arrivalTimeValue . ':00')
                        ->first();

                    if ($workingTime) {
                        $workingTime->passengerCars()->attach($car->id);
                    } else {
                        $workingTime = WorkingTime::create([
                            'departure_time' => $departureTimeValue . ':00',
                            'arrival_time' => $arrivalTimeValue . ':00',
                        ]);
                        $workingTime->passengerCars()->attach($car->id);
                    }
                }
            }
            return \response()->json(['message' => 'Cập thành công']);
        } catch (\Exception $e) {
            return response()->json("Không tìm thấy bản ghi với ID $id");
        }

    }

    public function destroy(string $id)
    {
        if (\request()->ajax()) {
            $model = $this->model->with('albums')->findOrFail($id);
            $model->delete();
            foreach ($model->albums as $value) {
                Log::info($value->{$this->fieldImage});
                Storage::delete($value->{$this->fieldImage});
            }
            return response()->json("Xóa thành công");
        }else{
            return parent::destroy($id);
        }
    }


}

