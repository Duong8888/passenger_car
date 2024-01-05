<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use App\Models\PassengerCar;
use App\Models\revenue;
use App\Models\Routes;

use App\Models\SeatsLayout;
use App\Models\SeatStatus;
use App\Models\Stops;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;

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

    public function update(Request $request, string $id)
    {
        $ticket = Ticket::query()->findOrFail($request->id);
        $ticket->update([
              "phone" => $request->phone,
              "username" => $request->username,
              "email" => $request->email,
              "date" => $request->date,
              "passenger_car_id" => $request->passenger_car_id,
              "quantity" => $request->quantity,
              "total_price" => $request->total_price,
              "status" => "1",
              "time" => $request->time,
              "departure" => $request->departure,
              "arrival" => $request->arrival,
              "id" => $request->id,
              "payment_method" => "thanh toán tại nhà xe",
        ]);
        $seatStatus = SeatStatus::query()->where('ticket_id', $request->id)->get();
        foreach ($seatStatus as $value){
            $value->delete();
        }

        foreach($request->slot as $value){
            SeatStatus::create([
                "passenger_car_id" => $request->passenger_car_id,
                "date" => $request->date,
                "time_id" => $request->time,
                "seat_status" => "1",
                "ticket_id"=>$ticket->id,
                "seat_id" =>$value,
            ]);
        }
        return redirect()->route($this->urlIndex)->with('success', 'Update Successfully');
    }

    public function validateStore($request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
        ]);

        if ($validator->fails()) {
            return $validator;
        }
    }
    public function index(Request $request)
    {
        $transportUnitId = Auth::user()->id;
        $page = request()->get('page') ?: 1;
        $data = Ticket::whereHas('passengerCar', function ($query) use ($transportUnitId) {
            $query->where('user_id', $transportUnitId);
        })
            ->orderBy('id','desc')
            ->paginate(10, ['*'], 'page', $page);
        $passengerCar = PassengerCar::where('user_id', $transportUnitId)->get();
        return view('admin.pages.ticket.index', compact('data','passengerCar'))
            ->with('title', $this->titleIndex)
            ->with('colums', $this->colums)
            ->with('urlbase', $this->urlbase)
            ->with('titleCreate', $this->titleCreate);
    }

    public function create()
    {
        $user = User::where('id', Auth::user()->id)->get();

        $id = auth()->id();

        $route = Stops::whereRaw("JSON_CONTAINS(user_id, '$id')")
            ->join('routes', 'stops.route_id', '=', 'routes.id')
            ->select('routes.departure', 'routes.arrival', 'routes.id')
            ->distinct()
            ->paginate(10);

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
        $layout = [];
        $checkSlot = [];
        $seat = [];
        $model = $this->model->findOrFail($id);
        $car_relationship = $model->passengerCar()->get();
        if($car_relationship[0]->vehicle_id != 0){
            $layout = SeatsLayout::query()->where('vehicle_id', $car_relationship[0]->vehicle->id)->get();
            $checkSlot = SeatStatus::query()
                ->where('passenger_car_id',$car_relationship[0]->id)
                ->where('date',$model->date)
                ->where('time_id',$model->time_id)
                ->where('ticket_id','<>',$model->id)
                ->get();
            $seatData = SeatStatus::query()
                ->where('ticket_id',$model->id)
                ->get();
            $seat = $seatData->toArray();
        }
        $route = $car_relationship[0]->route()->get();
        $passengerCar = $route[0]->passengerCars()->get();
        $time = $car_relationship[0]->workingTime()->get();
        return view($this->pathView . __FUNCTION__, compact('model', 'layout', 'checkSlot', 'seat', 'car_relationship', 'passengerCar', 'route','time'))
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
            ->where('user_id',Auth::user()->id)
            ->get();
        return response()->json($PassengerCar);
    }


    public function getLayout(Request $request){
        Log::info($request->all());
        $passengerCars = PassengerCar::query()->where('id', $request->id)->first();
        if($passengerCars->vehicle_id != 0){
            $layout = SeatsLayout::query()->where('vehicle_id', $passengerCars->vehicle->id)->get();
            $checkSlot = SeatStatus::query()
                ->where('passenger_car_id',$passengerCars->id)
                ->where('date',$request->date)
                ->where('time_id',$request->time_id)
                ->get();
        }else{
            $layout = [];
            $checkSlot = [];
        }
        $currentTime = Carbon::now()->toTimeString();
        $day = Carbon::now()->toDateString();
        $times = $passengerCars->workingTime()->get();
        if($day == $request->date){
            $times = $passengerCars->workingTime()->where('departure_time', '>', $currentTime)->get();
        }
        return \response()->json(['layout'=>$layout, 'checkSlot'=>$checkSlot,'times'=>$times]);
    }
    public function destroy(string $id)
    {
        $model = $this->model->findOrFail($id);

        $model->delete();

        return to_route($this->urlIndex)->with('success', 'Delete Successfully!');
    }
    public function store(Request $request)
    {
        Log::info($request->all());
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

        $model->seat_id = json_encode($request->slot);
        $model->time_id = $request->time;
        $model->save();

        foreach ($request->slot as $value) {
            SeatStatus::create([
                'passenger_car_id' => $request->passenger_car_id,
                'date' => $request->date,
                'time_id' => $request->time,
                'seat_status' => 1,
                'ticket_id' => $model->id,
                'seat_id' => $value,
            ]);
        }

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
    public function cancel(Request $request)
    {
        $data_cancel = DB::table("tickets")
            ->join('vnpay_payments', 'vnpay_payments.inc_id', '=', 'tickets.inc_id')
            ->where('tickets.id', $request->id)->get();
        if (count($data_cancel) > 0) {
            $other_field = null;
            if(isset($data_cancel[0])){
                $other_field = json_decode($data_cancel[0]->other_field);
            }
            $apiUrl = 'https://sandbox.vnpayment.vn/merchant_webapi/api/transaction';
            $vnp_TmnCode = env('VNP_TMNCODE');
            $vnp_HashSecret  = env('VNP_HASHSECRET');

            $vnp_TxnRef = $data_cancel[0]->vnp_TxnRef;
            $vnp_Amount = $data_cancel[0]->total_price;
            $vnp_TransactionType = "02";
            $vnp_RequestId = date("YmdHis");
            $inputData = array(
                "vnp_RequestId" => (int)$vnp_RequestId,
                "vnp_Version" => '2.1.0',
                "vnp_Command" => "refund",
                "vnp_TmnCode" => $vnp_TmnCode,
                "vnp_TransactionType" => $vnp_TransactionType,
                "vnp_TxnRef" => (int)$vnp_TxnRef,
                "vnp_Amount" => $vnp_Amount * 100,
                "vnp_TransactionNo" => $other_field ? $other_field->vnp_TransactionNo : 0,
                "vnp_TransactionDate" => (int)date('YmdHis', time()),
                "vnp_CreateBy" => "admin",
                "vnp_CreateDate" => (int)date('YmdHis', time()),
                "vnp_IpAddr" => request()->ip(),
                "vnp_OrderInfo" => 'Hoan tra giao dich #' . $request->id,
            );

            $format = '%s|%s|%s|%s|%s|%s|%s|%s|%s|%s|%s|%s|%s';

            $dataHash = sprintf(
                $format,
                $inputData['vnp_RequestId'], //1
                $inputData['vnp_Version'], //2
                $inputData['vnp_Command'], //3
                $inputData['vnp_TmnCode'], //4
                $inputData['vnp_TransactionType'], //5
                $inputData['vnp_TxnRef'], //6
                $inputData['vnp_Amount'], //7
                $inputData['vnp_TransactionNo'],  //8
                $inputData['vnp_TransactionDate'], //9
                $inputData['vnp_CreateBy'], //10
                $inputData['vnp_CreateDate'], //11
                $inputData['vnp_IpAddr'], //12
                $inputData['vnp_OrderInfo'] //13
            );

            $vnpSecureHash = hash_hmac('sha512', $dataHash, $vnp_HashSecret);
            $inputData['vnp_SecureHash'] = $vnpSecureHash;
            $headers = [
                "Content-Type" => "application/json"
            ];
            $response = Http::withHeaders($headers)->post($apiUrl, $inputData);
            $responseBody = json_decode($response->getBody(), true);
            $message = "Lỗi hệ thống vui lòng thử lại sau!";
            if($responseBody['vnp_ResponseCode'] == 00) {
                Ticket::where('id', $request->id)->update(['status' => 0]);
                $message = "Hoàn tiền thành công";
            }else if($responseBody['vnp_ResponseCode'] == 91){
                $message = "Không tìm thấy yêu cầu hoàn trả";
            }else if($responseBody['vnp_ResponseCode'] == 94){
                $message = "Giao dịch đã được gửi yêu cầu hoàn tiền trước đó. Yêu cầu này VNPAY đang xử lý";
            }
            else if($responseBody['vnp_ResponseCode'] == 95){
                $message = "Giao dịch này không thành công bên VNPAY. VNPAY từ chối xử lý yêu cầu";
            }
            else if($responseBody['vnp_ResponseCode'] == 97){
                $message = "Dữ liệu gửi sang không đúng";
            }
            return Response([
                'status' => $responseBody['vnp_ResponseCode'],
                'body' => $responseBody,
                'message' => $message
            ]);
        }
        return Response([
            'status' => 400,
            'message' => "Lỗi vui lòng thử lại"
        ]);


    }
    public function search(Request $request){
        $passengerCars = PassengerCar::where('license_plate', $request->license_plate)->get();

        $data = Ticket::where('passenger_car_id', $passengerCars[0]->id)->orderBy('id','desc')->paginate(10);

        $passengerCar = PassengerCar::get();
        return view('admin.pages.ticket.index', compact('data', 'passengerCar'))
        ->with('title', $this->titleIndex)
        ->with('colums', $this->colums)
        ->with('urlbase', $this->urlbase)
        ->with('titleCreate', $this->titleCreate);

    }

    public function checkSeat(Request $request){
        Log::info($request);
        $check = true;
        foreach ($request['slot'] as $value){
            $data = SeatStatus::query()->where([
                ['date','=',$request['date']],
                ['time_id','=',$request['time']],
                ['seat_id','=',$value],
                ['passenger_car_id','=',$request['passenger_car_id']],
            ])->get();
            if(count($data) != 0){
                $check = false;
            }
        }
        return \response()->json(['check'=>$check]);
    }
}
