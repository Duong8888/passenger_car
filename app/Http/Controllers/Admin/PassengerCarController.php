<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\PassengerCar;
use App\Models\Routes;
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
        'capacity' => 'Số gế',
        'price' => 'Giá vé',
        'route' => 'Tuyến đường',
        'action' => 'Thao tác',
    ];


    public function index(Request $request)
    {
        if($request->ajax()){
            $routes = Routes::all();
            $passengerCar = PassengerCar::query()->with(['route' => function($query){
                $query->get('departure','arrival');
            }])->orderBy('id','desc')->paginate(10);
            return \response()->json(['data' => $passengerCar,'routes'=>$routes]);
        }
        return parent::index($request);
    }

    public function store(Request $request)
    {
        $car = new $this->model;
        $album = new Album();
        $images = $request->file($this->fieldImage);
        $departureTime = $request->departure;
        $arrivalTime = $request->arrival;
        $albumData = [];

        $car->fill($request->except([$this->fieldImage, 'arrival', 'departure', '_token']));
        $car->user_id = Auth::user()->id;
        $car->save();

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




}

