<?php

namespace App\Http\Controllers\Client\Ticket;

use App\Http\Controllers\Controller;
use App\Http\Controllers\NotificationController;
use App\Jobs\SendMail;
use App\Models\PassengerCar;
use App\Models\SeatStatus;
use App\Models\Stops;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\TiketMail;
use App\Models\VnpayPayment;
use Illuminate\Contracts\Session\Session;
use Twilio\Rest\Client;
use Illuminate\Support\Str;

class TicketController extends Controller
{
    public function CountTicket(Request $request)
    {
        session()->forget('value');

        session()->push('value', $request->all());
        session()->push('vnp', time());
        Log::info(session('value'));
        return response()->json(['success' => $request->all()], Response::HTTP_OK);
    }

    public function PaymentView()
    {
        $stops = Stops::all();
        $data = (session()->get('value'));
        foreach ($data as $a) {
            if (isset($a['seat'])) {
                $seat = SeatStatus::query()
                    ->where('date', $a['date'])
                    ->where('time_id', $a['time_id'])
                    ->whereIn('seat_id', $a['seat'])
                    ->get();
                if (count($seat) == 0) {
                    foreach ($a['seat'] as $value) {
                        SeatStatus::create([
                            'passenger_car_id' => $a['passenger_car_id'],
                            'date' => $a['date'],
                            'time_id' => $a['time_id'],
                            'seat_status' => 0,
                            'seat_id' => $value,
                        ]);
                    }
                }else{
                    return back()->with('message','Ghế của bạn đã có người nhanh tay hơn đặt rồi vui lòng chọn gế khác !');
                }
            }
        }
        return view('client.pages.ticket.index', ['stops' => $stops]);
    }

    public function endPayment(Request $request)
    {
        
        session()->put('value.0.status',  $request->status);
        session()->put('value.0.payment_method',  $request->payment_method);
        session()->put('value.0.status', $request->status);
        session()->put('value.0.payment_method', $request->payment_method);
        $user_id = $request->passenger_car_user;
        $message = $request->username . ' đã đặt vé cần xác nhận ';
        $ticket = new Ticket();
        $ticket->fill(session('value')[0]);
        $data = (session()->get('value'));
        $seatArr = [];
        foreach ($data as $a) {
            if (isset($a['seat'])) {
                foreach ($a['seat'] as $value) {
                    array_push($seatArr, $value);
                }
            }
        }
        $ticket->seat_id = json_encode($seatArr);
        $ticket->save();
        foreach ($data as $a) {
            if (isset($a['seat'])) {
                foreach ($a['seat'] as $value) {
                    SeatStatus::query()
                        ->where([
                            'passenger_car_id' => $a['passenger_car_id'],
                            'date' => $a['date'],
                            'time_id' => $a['time_id'],
                            'seat_id' => $value,
                        ])
                        ->update(['seat_status'=>1,'ticket_id' => $ticket->id]);
                }
            }
        }

        $ticketId = $ticket->id;
        $phoneNumber = $request->phone;

        session()->push('value', $ticketId);

        Log::info($request->all());

        Log::info(session('value'));

        $notification = new NotificationController();
        $notification->sendNotification($user_id, $message, 'ticket');
        $emailAdmin = User::query()->findOrFail($user_id);

        SendMail::dispatch($emailAdmin, $ticket);
        SendMail::dispatch($request->email, $ticket);

        return response()->json(['success' => 'Done'], Response::HTTP_OK);
    }


    public function vnpay_payment(Request $request)
    {
        $a = json_decode($request->session);
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('client.ticket.add-vnpay-to-db');
        $vnp_TmnCode = "AUOGLFUH"; //Mã website tại VNPAY
        $vnp_HashSecret = "GVTYEMYJEHIQHBAUVYJAPQSDYIIKZEIK"; //Chuỗi bí mật
        $vnp_TxnRef = time(); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh toán hóa đơn";
        $vnp_OrderType = "Trip Payment";
        $vnp_Amount = $a[0]->total_price * 100;
        $vnp_Locale = "VN";
        $vnp_BankCode = "NCB";
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR']; //127.0.0.1

        $inputData = [
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        ];
        $vnpdb = VnpayPayment::query()->where('inc_id', session()->get('vnp')[0])->first();
        if (!$vnpdb) {
            VnpayPayment::query()->create([
                'vnp_TmnCode' => $vnp_TmnCode,
                'vnp_CreateDate' => $inputData['vnp_CreateDate'],
                'vnp_TxnRef' => $vnp_TxnRef,
                'passenger_car_id' => $a[0]->passenger_car_id,
                'status' => "Hoàn tiền",
                'inc_id' => session()->get('vnp')[0]
            ]);
        }

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }

        header('Location: ' . $vnp_Url);
        die();
    }

    public function checkoutPayment(Request $request)
    {
        if (session('value')) {
            $vnpay_item = VnpayPayment::query()->where('inc_id', session()->get('vnp')[0])->first();
            
            if ($request->vnp_ResponseCode == '00' && $request->vnp_TransactionStatus == '00') {
                $passenger_car = PassengerCar::where('id', session('value')[0]['passenger_car_id'])->get();
                $data = (session()->get('value'));

                foreach ($data as $a) {

                    $ticket = Ticket::query()->create([
                        'username' => $a['username'],
                        'status' => 2,
                        'payment_method' => 'Đã Thanh toán VNPAY',
                        'total_price' => $a['total_price'],
                        'email' => $a['email'],
                        'phone' => $a['phone'],
                        'quantity' => $a['quantity'],
                        'passenger_car_id' => $a['passenger_car_id'],
                        'departure' => $a['departure'],
                        'arrival' => $a['arrival'],
                        'date' => $a['date'],
                        'time_id' => $a['time_id'],
                        'inc_id' => session()->get('vnp')[0]
                    ]);
                    $a['payment_method'] = 'Đã Thanh toán VNPAY';
                    $data_vnp = [
                        'vnp_BankTranNo' => $request->vnp_BankTranNo,
                        'vnp_OrderInfo' => $request->vnp_OrderInfo,
                        'vnp_TransactionNo' => $request->vnp_TransactionNo,
                        'ticket_id' => $ticket->id
                    ];
                    $vnpay_item->update(['other_field' => json_encode($data_vnp)]);
                }

                $user_id = session('value')[0]['passenger_car_user'];
                $message = session('value')[0]['username'] . ' đã đặt vé thành công';
                $notification = new NotificationController();
                $notification->sendNotification($user_id, $message, 'ticket');

                SendMail::dispatch(session('value')[0]['email'],  $ticket);

                $email =  session('value')[0]['email'];
                $route_departure =  session('value')[0]['route_departure'];
                $route_arrival =  session('value')[0]['route_arrival'];
                $departure = session('value')[0]['departure'];
                $time_departure = session('value')[0]['time_departure'];
                $arrival = session('value')[0]['arrival'];
                $time_arrival = session('value')[0]['time_arrival'];
                $username =  session('value')[0]['username'];
                $phone = session('value')[0]['phone'];
                $email = session('value')[0]['email'];
                $total_price = session('value')[0]['total_price'];
                session()->forget('value');
                return view('client.pages.ticket.finish2', [
                    'data' => $passenger_car,
                    'email' => $email,
                    'route_departure' => $route_departure,
                    'route_arrival' => $route_arrival,
                    'departure' => $departure,
                    'arrival' => $arrival,
                    'time_departure' =>  $time_departure,
                    'time_arrival' =>  $time_arrival,
                    'username' =>  $username,
                    'phone' => $phone,
                    'email' => $email,
                    'total_price' => $total_price,
                ]);

            }
        if ($request->vnp_ResponseCode == '00' && $request->vnp_TransactionStatus == '00') {
            $passenger_car = PassengerCar::where('id', session('value')[0]['passenger_car_id'])->get();
            $data = (session()->get('value'));
            $seatArr = [];
            foreach ($data as $a) {
                $YourPhone = $a['phone'];
                if (isset($a['seat'])) {
                    foreach ($a['seat'] as $value) {
                        array_push($seatArr, $value);
                    }
                }

                $ticket = Ticket::query()->create([
                    'username' => $a['username'],
                    'status' => 2,
                    'payment_method' => 'Đã Thanh toán VNPAY',
                    'total_price' => $a['total_price'],
                    'email' => $a['email'],
                    'phone' => $a['phone'],
                    'quantity' => $a['quantity'],
                    'passenger_car_id' => $a['passenger_car_id'],
                    'departure' => $a['departure'],
                    'arrival' => $a['arrival'],
                    'date' => $a['date'],
                    'time_id' => $a['time_id'],
                    'seat_id' => json_encode($seatArr)
                ]);
            }
            } else {
                return redirect()->route('client.ticket.payment-method');
            }
            $user_id = session('value')[0]['passenger_car_user'];
            $message = session('value')[0]['username'] . ' đã đặt vé thành công';
            $notification = new NotificationController();
            $notification->sendNotification($user_id, $message, 'ticket');

            SendMail::dispatch(session('value')[0]['email'], $ticket);

            $email = session('value')[0]['email'];
            $route_departure = session('value')[0]['route_departure'];
            $route_arrival = session('value')[0]['route_arrival'];
            $departure = session('value')[0]['departure'];
            $time_departure = session('value')[0]['time_departure'];
            $arrival = session('value')[0]['arrival'];
            $time_arrival = session('value')[0]['time_arrival'];
            $username = session('value')[0]['username'];
            $phone = session('value')[0]['phone'];
            $email = session('value')[0]['email'];
            $total_price = session('value')[0]['total_price'];
            session()->forget('value');
            return view('client.pages.ticket.finish2', [
                'data' => $passenger_car,
                'email' => $email,
                'route_departure' => $route_departure,
                'route_arrival' => $route_arrival,
                'departure' => $departure,
                'arrival' => $arrival,
                'time_departure' => $time_departure,
                'time_arrival' => $time_arrival,
                'username' => $username,
                'phone' => $phone,
                'email' => $email,
                'total_price' => $total_price,

            ]);
        } else {
            return redirect()->route('client.ticket.payment-method');
        }
        return redirect()->route('client.ticket.payment-method');
    }

    public function EndTicketPayment(Request $request)
    {
        if (session('value')) {
            $passenger_car = PassengerCar::where('id', session('value')[0]['passenger_car_id'])->get();
            $email = session('value')[0]['email'];
            $route_departure = session('value')[0]['route_departure'];
            $route_arrival = session('value')[0]['route_arrival'];
            $departure = session('value')[0]['departure'];
            $time_departure = session('value')[0]['time_departure'];
            $arrival = session('value')[0]['arrival'];
            $time_arrival = session('value')[0]['time_arrival'];
            $username = session('value')[0]['username'];
            $phone = session('value')[0]['phone'];
            $email = session('value')[0]['email'];
            $total_price = session('value')[0]['total_price'];
            $id = session('value')[1];
            session()->forget('value');

            return view('client.pages.ticket.finish', [
                'data' => $passenger_car,
                'email' => $email,
                'route_departure' => $route_departure,
                'route_arrival' => $route_arrival,
                'departure' => $departure,
                'arrival' => $arrival,
                'time_departure' => $time_departure,
                'time_arrival' => $time_arrival,
                'username' => $username,
                'phone' => $phone,
                'email' => $email,
                'total_price' => $total_price,
                'id' => $id,
            ]);
        }
        return redirect()->route('client.ticket.payment-method');
    }

    public function ChangeTicket(Request $request)
    {
        $arrayInfo = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
        ];
        session()->put('value.0.username', $request->name);
        session()->put('value.0.phone', $request->phone);
        session()->put('value.0.email', $request->email);
        Log::info(session('value'));
        return response()->json($arrayInfo, Response::HTTP_OK);
    }

    public function CancelTicket(Request $request)
    {
        $ticket = Ticket::where('id', $request->id)->update(['status' => 0]);
        session()->forget('value');
        return response()->json(['success' => 'Done'], Response::HTTP_OK);
    }
}
