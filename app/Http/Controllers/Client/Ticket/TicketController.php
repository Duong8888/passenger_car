<?php

namespace App\Http\Controllers\Client\Ticket;

use App\Http\Controllers\Controller;
use App\Http\Controllers\NotificationController;
use App\Jobs\SendMail;
use App\Models\PassengerCar;
use App\Models\Stops;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\TiketMail;
use Twilio\Rest\Client;
use Illuminate\Support\Str;

class TicketController extends Controller
{
    public function CountTicket(Request $request)
    {
        session()->forget('value');

        session()->push('value', $request->all());
        Log::info(session('value'));
        return response()->json(['success' => 'Done'], Response::HTTP_OK);
    }

    public function PaymentView()
    {
        $stops = Stops::all();
        return view('client.pages.ticket.index', ['stops' => $stops]);
    }

    public function endPayment(Request $request)
    {

        $user_id = $request->passenger_car_user;
        $message = $request->username . ' đã đặt vé cần xác nhận ';
        $ticket = new Ticket();
        $ticket->fill($request->all());
        $ticket->save();
        $ticketId = $ticket->id;
        $phoneNumber = $request->phone;

        session()->push('value', $ticketId);
           
        Log::info(session('value'));

        // $APIKey = "4804FCD90B5191173B9C05ADAEB455";
        // $SecretKey = "ECA5AFD4D982FAF3E2315AF3654B4A";

        // $YourPhone = $phoneNumber;
        // $Content = "Cam on quy khach da su dung dich vu cua chung toi. Chuc quy khach mot ngay tot lanh!";

        // $SendContent = urlencode($Content);
        // $data = "http://rest.esms.vn/MainService.svc/json/SendMultipleMessage_V4_get?Phone=$YourPhone&ApiKey=$APIKey&SecretKey=$SecretKey&Content=$SendContent&Brandname=Baotrixemay&SmsType=2";

        // $curl = curl_init($data);
        // curl_setopt($curl, CURLOPT_FAILONERROR, true);
        // curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        // $result = curl_exec($curl);

        // $obj = json_decode($result, true);
        // if ($obj['CodeResult'] == 100) {
        //     Log::info("thành công ");
        // } else {
        //     Log::info("lỗi  ");
        // }

         $notification = new NotificationController();
         $notification->sendNotification($user_id, $message);

        SendMail::dispatch($request->email,  $ticket);

        return response()->json(['success' => 'Done'], Response::HTTP_OK);
    }

    public function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data)
            )
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }

    public function vnpay_payment(Request $request)
    {
        $a = json_decode($request->session);
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('client.ticket.end-payment-ticket');
        $vnp_TmnCode = "AUOGLFUH"; //Mã website tại VNPAY
        $vnp_HashSecret = "GVTYEMYJEHIQHBAUVYJAPQSDYIIKZEIK"; //Chuỗi bí mật
        $vnp_TxnRef = time(); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh toán hóa đơn";
        $vnp_OrderType = "Trip Payment";
        $vnp_Amount = $a[0]->total_price * 100;
        $vnp_Locale = "VN";
        $vnp_BankCode = "NCB";
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR']; //127.0.0.1

        $inputData = array(
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
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
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
        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnp_Url
        );
        // return redirect()->route('client.ticket.add-vnpay-to-db');
        header('Location: ' . $vnp_Url);
        die();
    }

    public function checkoutPayment()
    {
        $data = (session()->get('value'));

        foreach ($data as $a) {

            Ticket::query()->create([
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
                'date' => $a['date']
            ]);
            $a['payment_method'] = 'Đã Thanh toán VNPAY';
        }
     
        return to_route('client.finish.ticket')->with('success', 'Đặt hàng thành công');
    }


    public function EndTicketPayment(Request $request)
    {
        $passenger_car = PassengerCar::where('id', session('value')[0]['passenger_car_id'])->get();

        return view('client.pages.ticket.finish', [
            'data' => $passenger_car,
        ]);
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

    public function CancelTicket(Request $request){
        $ticket = Ticket::where('id', $request->id)->update(['status' => 0]);
        session()->forget('value');
        return response()->json(['success' => 'Done'], Response::HTTP_OK);
    }
}
