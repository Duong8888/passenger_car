<?php

namespace App\Http\Controllers\Client;

use App\Events\NewNotification;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NotificationController;
use App\Mail\NotificationMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Notifications;
use Google\Cloud\Storage\StorageClient;
use App\Models\Firebase;
class CarRegisterController extends Controller
{
    protected $firebase;
    public function __construct(Firebase $firebase = null) {
        $this->firebase = $firebase;
    }
    public function index()
    {
        $message = "";
        $messageStatus = "";
        return view('client.pages.car-register.index', ['message' => $message, 'messageStatus' => $messageStatus]);
    }

    public function post(Request $request)
    {

        //
        $this->validate($request, [
            'email' => 'required|email|max:255',
        ]);

        $fullName = $request->input('user_name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $passengerCar_name = $request->input('passengerCar_name');
        $province = $request->input('province');
        $meassageInput = $request->input('meassageInput');
        $created_at = now(); // Laravel's Carbon instance for the current date and time

        $isRegisterCar = DB::table("contacts")->where("email", $email)->first();
        if ($isRegisterCar == null) {
            $url_image = $this->firebase->uploadImage($request);
            // Tiếp theo, bạn có thể thêm dữ liệu vào cơ sở dữ liệu
            Contact::create([
                'user_name' => $fullName,
                'fullName' => $fullName,
                'phone' => $phone,
                'email' => $email,
                'passengerCar_name' => $passengerCar_name,
                'province' => $province,
                'meassageInput' => $meassageInput,
                'status' => "Chưa xử lý",
                'created_at' => $created_at,
                'images' => json_encode($url_image),
                'number_card' => $request->input('number_card'),
                'rental_code' => $request->input('rental_code'),

            ]);

            $data = [
                'user_id' => 0,
                'user_send' => 0,
                'content' => "Bạn có một nhà xe mới đăng kí",
                'is_read' => false,
                'url' => 'contact/index',
            ];
            Notifications::create($data);
            $message = "Cảm ơn bạn đã tin tưởng chúng tôi. Chúng tôi sẽ liên hệ bạn vào thời gian sớm nhất.";
            $messageStatus = "Bạn đã đăng ký thành công";

            $mailSender = new NotificationMail($messageStatus, 'mails.carRegister', $message);
            Mail::to($email)->send($mailSender);

            return view('client.pages.car-register.index', ['message' => $message, 'messageStatus' => $messageStatus]);
        }
        return view('client.pages.car-register.index', ['message' => "Bạn đã gửi đơn đăng kí nhà xe trước đó. Vui lòng đợi quản trị viên kiểm tra!", 'messageStatus' => $isRegisterCar->status]);
    }

}
