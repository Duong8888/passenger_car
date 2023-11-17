<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\NotificationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Notifications;

class CarRegisterController extends Controller
{
    public function index()
    {
        $message = "";
        $messageStatus = "";
        return view('client.pages.car-register.index', ['message' => $message, 'messageStatus' => $messageStatus]);
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'fullName' => 'required|string|max:255',
            // 'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'passengerCar_name' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'meassageInput' => 'required|string',
        ]);

        $fullName = $request->input('fullName');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $passengerCar_name = $request->input('passengerCar_name');
        $province = $request->input('province');
        $meassageInput = $request->input('meassageInput');
        $created_at = now(); // Laravel's Carbon instance for the current date and time

        // Tiếp theo, bạn có thể thêm dữ liệu vào cơ sở dữ liệu
        DB::insert('insert into contacts (user_name, fullName, phone, email, passengerCar_name, province, meassageInput, status, created_at) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [
            $fullName,
            $fullName,
            $phone,
            $email,
            $passengerCar_name,
            $province,
            $meassageInput,
            "Chưa xử lý",
            $created_at,
        ]);
        $data = [
            'user_id' =>0,
            'user_send' => 0,
            'content' => "Bạn có một nhà xe mới đăng kí",
            'is_read' => false,
            'url' => 'contact/index',
        ];
        Notifications::create($data);
        $message = "Cảm ơn bạn đã tin tưởng chúng tôi. Chúng tôi sẽ liên hệ bạn vào thời gian sớm nhất.";
        $messageStatus = "Bạn đã đăng ký thành công";
        $alreadySent = false;
        if (!$alreadySent) {
            $mailSender = new NotificationMail($messageStatus, 'mails.carRegister', $message);
            Mail::to($email)->send($mailSender);

            $alreadySent = true; // Đặt cờ để chỉ ra rằng email đã được gửi
        }

        return view('client.pages.car-register.index', ['message' => $message, 'messageStatus' => $messageStatus]);


    }

//Họ và tên: $fullName
////          Số điện thoại: $phone
////            Email: $email
////            Xe muốn đăng ký: $passengerCar_name
////            Tỉnh/thành phố: $province
////            Nội dung tin nhắn: $meassageInput
}
