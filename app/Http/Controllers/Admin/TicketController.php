<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use App\Models\PassengerCar;
use App\Models\Routes;
use Illuminate\Http\Request;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Support\Facades\Log;
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
        ],[
            'username.required' => 'yêu cầu nhập tiêu đề',
        ]);

        if ($validator->fails()) {
            return $validator;
        }
    }

    public function create()
    {
        $user = User::all();

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

        $passengerCar = PassengerCar::all();


        return view($this->pathView . __FUNCTION__, compact('model', 'user', 'user_relationship', 'passengerCar_relationship', 'passengerCar'))

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
}
