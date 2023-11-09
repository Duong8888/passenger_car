<?php

namespace App\Http\Controllers\Client\Ticket;

use App\Http\Controllers\Controller;
use App\Models\PassengerCar;
use App\Models\Stops;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\TiketMail;
use Twilio\Rest\Client;

class TicketController extends Controller
{
    public function CountTicket(Request $request)
    {
        session()->forget('value');

        session()->push('value', $request->all());

        return response()->json(['success' => 'Done'], Response::HTTP_OK);
    }

    public function PaymentView()
    {
        $stops = Stops::all();
        return view('client.pages.ticket.index', ['stops' => $stops]);
    }

    public function endPayment(Request $request)
    {

        $ticket = new Ticket();
        $ticket->fill($request->all());
        $ticket->save();

        $email = new TiketMail($ticket);
        Mail::to($request->email)->send($email);


        $phoneNumber = substr_replace($ticket->phone, "+84", 0, 0);


//        $twilioSid = env('TWILIO_SID');
//        $twilioToken = env('TWILIO_AUTH_TOKEN');
//        // dd($twilioSid,$twilioToken);
//        $twilio = new Client($twilioSid, $twilioToken);
        $mess = "Thông báo đặt vé! " . $ticket->name . "\n  Người đặt: " . $ticket->username . "\n Điểm đón: " . $ticket->departure .
            "\n Điểm trả:" . $ticket->arrival . "\n Số lượng vé: " . $ticket->quantity . "\n Tổng tiền: " . $ticket->total_price .
            "\n Hình thức thanh toán:" . $ticket->payment_method;
//        $message = $twilio->messages->create(
//            $phoneNumber,
//            [
//                "from" => "+13342314820",
//                "body" =>  (string)$mess
//            ]
//        );


        $APIKey = "371FC468F99345C39169670876C613"; //env('ESMS_API_KEY');
        $SecretKey = "CE2DD09E775331ABA3C0A53F349260"; // env('ESMS_API_SEC');


        $SendContent = urlencode($mess);
        $data = "http://rest.esms.vn/MainService.svc/json/SendMultipleMessage_V4_get?Phone=$phoneNumber&ApiKey=$APIKey&SecretKey=$SecretKey&Content=$SendContent&SmsType=8";
        //De dang ky brandname rieng vui long lien he hotline 0901.888.484 hoac nhan vien kinh Doanh cua ban

        $curl = curl_init($data);
        curl_setopt($curl, CURLOPT_FAILONERROR, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);

        $obj = json_decode($result, true);
        if ($obj['CodeResult'] == 100) {
            print "<br>";
            print "CodeResult:" . $obj['CodeResult'];
            print "<br>";
            print "CountRegenerate:" . $obj['CountRegenerate'];
            print "<br>";
            print "SMSID:" . $obj['SMSID'];
            print "<br>";
        } else {
            print "ErrorMessage:" . $obj['ErrorMessage'];
        }


        $twilioSid = env('TWILIO_SID');
        $twilioToken = env('TWILIO_AUTH_TOKEN');

        $twilio = new Client($twilioSid, $twilioToken);
        $mess = "Thông báo đặt vé! ".$ticket->name . "\n  Người đặt: ".$ticket->username . "\n Điểm đón: ".$ticket->departure .
        "\n Điểm trả:" . $ticket->arrival . "\n Số lượng vé: " . $ticket->quantity . "\n Tổng tiền: ".$ticket->total_price.
        "\n Hình thức thanh toán:". $ticket->payment_method;
        $message = $twilio->messages->create(
            $phoneNumber,
            [
                "from" => "+13342314820",
                "body" =>  (string)$mess
            ]
        );


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

    public function momo_payment()
    {
        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';

        $orderInfo = "Thanh toán qua MoMo";
        $amount = "10000";
        $orderId = time() . "";
        $redirectUrl = "http://127.0.0.1:8000/home";
        $ipnUrl = "http://127.0.0.1:8000/home";
        $extraData = "";


        if (!empty($_POST)) {
            $partnerCode = $partnerCode;
            $accessKey = $accessKey;
            $serectkey = $secretKey;
            $orderId = $orderId; // Mã đơn hàng
            $orderInfo = $orderInfo;
            $amount = $amount;
            $ipnUrl = $ipnUrl;
            $redirectUrl = $redirectUrl;
            $extraData = $extraData;

            $requestId = time() . "";
            $requestType = "payWithATM";
            //$extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
            //before sign HMAC SHA256 signature
            $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
            $signature = hash_hmac("sha256", $rawHash, $serectkey);
            $data = array(
                'partnerCode' => $partnerCode,
                'partnerName' => "Test",
                "storeId" => "MomoTestStore",
                'requestId' => $requestId,
                'amount' => $amount,
                'orderId' => $orderId,
                'orderInfo' => $orderInfo,
                'redirectUrl' => $redirectUrl,
                'ipnUrl' => $ipnUrl,
                'lang' => 'vi',
                'extraData' => $extraData,
                'requestType' => $requestType,
                'signature' => $signature
            );
            $result = $this->execPostRequest($endpoint, json_encode($data));
            $jsonResult = json_decode($result, true);  // decode json

            //Just a example, please check more in there

            header('Location: ' . $jsonResult['payUrl']);
        }
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
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret); //
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
                'user_id' => 1,
                'total_price' => $a['total_price'],
                'email' => $a['email'],
                'phone' => $a['phone'],
                'quantity' => $a['quantity'],
                'passenger_car_id' => $a['passenger_car_id'],
                'departure' => $a['departure'],
                'arrival' => $a['arrival'],
            ]);
            $a['payment_method'] = 'Đã Thanh toán VNPAY';
            $a = (object)$a;
            $email = new TiketMail($a);
            Mail::to($a->email)->send($email);


            $phoneNumber = substr_replace($a->phone, "", 0, 0);

//            $twilioSid = env('TWILIO_SID');
//            $twilioToken = env('TWILIO_AUTH_TOKEN');
//            // dd($twilioSid,$twilioToken);
//            $twilio = new Client($twilioSid, $twilioToken);
            $mess = "Thông báo đặt vé! " . "\n  Người đặt: " . $a->username . "\n Điểm đón: " . $a->departure .
                "\n Điểm trả:" . $a->arrival . "\n Số lượng vé: " . $a->quantity . "\n Tổng tiền: " . $a->total_price .
                "\n Hình thức thanh toán:" . $a->payment_method;
//            $message = $twilio->messages->create(
//                $phoneNumber,
//                [
//                    "from" => "+13342314820",
//                    "body" =>  (string)$mess
//                ]
//            );

            $APIKey = "371FC468F99345C39169670876C613"; //env('ESMS_API_KEY');
            $SecretKey = "CE2DD09E775331ABA3C0A53F349260"; // env('ESMS_API_SEC');


            $SendContent = urlencode($mess);
            $data = "http://rest.esms.vn/MainService.svc/json/SendMultipleMessage_V4_get?Phone=$phoneNumber&ApiKey=$APIKey&SecretKey=$SecretKey&Content=$SendContent&SmsType=8";
            //De dang ky brandname rieng vui long lien he hotline 0901.888.484 hoac nhan vien kinh Doanh cua ban

            $curl = curl_init($data);
            curl_setopt($curl, CURLOPT_FAILONERROR, true);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($curl);

            $obj = json_decode($result, true);
            if ($obj['CodeResult'] == 100) {
                print "<br>";
                print "CodeResult:" . $obj['CodeResult'];
                print "<br>";
                print "CountRegenerate:" . $obj['CountRegenerate'];
                print "<br>";
                print "SMSID:" . $obj['SMSID'];
                print "<br>";
            } else {
                print "ErrorMessage:" . $obj['ErrorMessage'];
            }

        }
//        return response()->json($dataDebug);
        session()->forget('cart');
        return to_route('client.finish.ticket')->with('success', 'Đặt hàng thành công');
    }


    public function EndTicketPayment()
    {
        return view('client.pages.ticket.finish');

    public function EndTicketPayment(Request $request){
        $passenger_car = PassengerCar::where('id', session('value')[0]['passenger_car_id'])->get();

        return view('client.pages.ticket.finish', [
            'data' => $passenger_car,
        ]);
    }
}
