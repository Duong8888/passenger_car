<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use App\Models\PassengerCar;
use App\Models\Routes;
use App\Models\SeatsLayout;
use App\Models\SeatStatus;
use App\Models\Stops;
use Illuminate\Http\Request;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TicketController extends AdminBaseController
{
    public $model = Ticket::class;
    public $pathView = 'admin.pages.ticket.';
    public $urlbase = 'admin.tickets.';
    public $fieldImage = 'ticket';
    public $urlIndex = 'admin.ticket.index';
    public $titleIndex = 'Danh sách Danh mục';
    public $titleCreate = 'Thêm mới Danh mục';
    public $titleShow = 'Xem chi tiết danh mục';
    public $titleEdit = 'Cập nhật Danh mục';
    public $colums = [
        'image' => 'Ảnh đại diện',
        'name' => 'Tên',
        'describe' => 'Mô tả',
    ];

    public function validateStore($request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
        ]);

        if ($validator->fails()) {
            return $validator;
        }
    }

    public function create()
    {
        $user = User::where('id', Auth::user()->id)->get();

        $route = Routes::all();


        return view($this->pathView . __FUNCTION__, [
            'user' => $user,
            'route' => $route,
        ])

            ->with('title', $this->titleCreate)
            ->with('colums', $this->colums)
            ->with('urlbase', $this->urlbase);
    }

    public function edit(string $id)
    {
        $model = $this->model->findOrFail($id);
        $user_relationship  = User::find($model->phone);
       
        $passengerCar_relationship = PassengerCar::find($model->passenger_car_id);
        $user = User::all();
        $route = Routes::all();
        $passengerCar = PassengerCar::all();


        return view($this->pathView . __FUNCTION__, compact('model', 'user', 'user_relationship', 'passengerCar_relationship', 'passengerCar', 'route'))

            ->with('title', $this->titleEdit)
            ->with('colums', $this->colums)
            ->with('urlbase', $this->urlbase);
    }

    public function Trip(Request $request)
    {

        $departure = $request->input('departure');
        $arrival = $request->input('arrival');

        $tripList = Routes::where('departure', $departure)
            ->orWhere('arrival', $arrival)
            ->get();


        return response()->json($tripList);
    }

    public function PassengerCar($id)
    {
        $PassengerCar = PassengerCar::where('route_id', $id)
            ->get();

        return response()->json($PassengerCar);
    }
    public function destroy(string $id)
    {
        $model = $this->model->findOrFail($id);

        $model->delete();

        return to_route($this->urlIndex)->with('success', 'Delete Successfully!');
    }
    public function store(Request $request)
    {
        $validator = $this->validateStore($request);

        // if ($validator->fails()) {
        //     return back()->withErrors($validator)->withInput();
        // }

        $model = new $this->model;

        $model->fill($request->except([$this->fieldImage]));

        if ($request->hasFile($this->fieldImage)) {
            $tmpPath = Storage::put($this->folderImage, $request->{$this->fieldImage});

            $model->{$this->fieldImage} = 'storage/' . $tmpPath;
        }

        $model->save();

        return redirect()->route($this->urlIndex)->with('success', 'Created Successfully');
    }

    public function Confirm(Request $request){
        Ticket::where('id', $request->id)->update(['status' => 2]);
      
        return response()->json(['success' => 'Done'], Response::HTTP_OK);
    }

    public function CheckPhone(Request $request){
        $phone = $request->input('phone');
        $user_name = User::where('phone', $phone)->pluck('name');
        $user_email = User::where('phone', $phone)->pluck('email');
        $user = [
            'name' => $user_name,
            'email' => $user_email
        ];
        return response()->json($user);
    }

    public function Price(Request $request){
        $passengerCar =  PassengerCar::where('id', $request->value)->get();
        $routes =  $passengerCar[0]->route;
        $stops = Stops::where('route_id', $routes->id)->get();
        $price = PassengerCar::where('id', $request->value)->pluck('price');
        if($passengerCar[0]->vehicle_id != 0){
            $layout = SeatsLayout::query()->where('vehicle_id', $passengerCar[0]->vehicle->id)->get();
            $checkSlot = SeatStatus::query()
                ->where('passenger_car_id',$passengerCar[0]->id)
                ->where('date',$request->date)
                ->where('time_id',$request->time)
                ->get();
        }else{
            $layout = [];
            $checkSlot = [];
        }
        $array =[
            'price' => $price,
            'layout' => $layout,
            'checkSlot' => $checkSlot,
            'passengerCars' => $passengerCar,
            'routes' => $routes,
            'stops' => $stops,
        ];
        return response()->json($array);
    }
}
