<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'phone' => 'required|string|max:20',
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

        $message = "Cảm ơn bạn đã tin tưởng chúng tôi. Chúng tôi sẽ liên hệ bạn vào thời gian sớm nhất.";
        $messageStatus = "Bạn đã đăng ký thành công";

        return view('client.pages.car-register.index', ['message' => $message, 'messageStatus' => $messageStatus]);
    }

}
