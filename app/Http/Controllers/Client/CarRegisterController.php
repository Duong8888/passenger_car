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
use Kreait\Firebase\Storage;
class CarRegisterController extends Controller
{
    public function index()
    {
        $message = "";
        $messageStatus = "";
        return view('client.pages.car-register.index', ['message' => $message, 'messageStatus' => $messageStatus]);
    }

    public function post(Request $request,Storage $storage)
    {
//        dd($request->images);
        if ($request->hasFile('images')) {
        $images = $request->file('images');
        $uploadedImagesUrls = [];

        foreach ($images as $image) {
            $imagePath = 'images/' . $image->getClientOriginalName();

            $uploadedFile = fopen($image->getPathname(), 'r');
            $storage->getBucket()->upload($uploadedFile, [
                'name' => $imagePath
            ]);

            $uploadedImagesUrls[] = $storage->getBucket()->object($imagePath)->signedUrl(now()->addMinutes(60));
        }
        dd($uploadedImagesUrls);
        return response()->json(['urls' => $uploadedImagesUrls]);
    }

        return response()->json(['error' => 'No images found.'], 400);
//
//        $this->validate($request, [
//            'fullName' => 'required|string|max:255',
//            // 'phone' => 'required|string|max:20',
//            'email' => 'required|email|max:255',
//            'passengerCar_name' => 'required|string|max:255',
//            'province' => 'required|string|max:255',
//            'meassageInput' => 'required|string',
//        ]);
//
//        $fullName = $request->input('fullName');
//        $phone = $request->input('phone');
//        $email = $request->input('email');
//        $passengerCar_name = $request->input('passengerCar_name');
//        $province = $request->input('province');
//        $meassageInput = $request->input('meassageInput');
//        $created_at = now(); // Laravel's Carbon instance for the current date and time
//
//        $isRegisterCar = DB::table("contacts")->where("email", $email)->get();
//        if ($isRegisterCar->count() == 0) {
//            // Tiếp theo, bạn có thể thêm dữ liệu vào cơ sở dữ liệu
//            Contact::create([
//                'user_name' => $fullName,
//                'fullName' => $fullName,
//                'phone' => $phone,
//                'email' => $email,
//                'passengerCar_name' => $passengerCar_name,
//                'province' => $province,
//                'meassageInput' => $meassageInput,
//                'status' => "Chưa xử lý",
//                'created_at' => $created_at
//            ]);
//
//            $data = [
//                'user_id' => 0,
//                'user_send' => 0,
//                'content' => "Bạn có một nhà xe mới đăng kí",
//                'is_read' => false,
//                'url' => 'contact/index',
//            ];
//            Notifications::create($data);
//            $message = "Cảm ơn bạn đã tin tưởng chúng tôi. Chúng tôi sẽ liên hệ bạn vào thời gian sớm nhất.";
//            $messageStatus = "Bạn đã đăng ký thành công";
//
//            $mailSender = new NotificationMail($messageStatus, 'mails.carRegister', $message);
//            Mail::to($email)->send($mailSender);
//
//            return view('client.pages.car-register.index', ['message' => $message, 'messageStatus' => $messageStatus]);
//        }
//        return view('client.pages.car-register.index', ['message' => "Bạn đã gửi đơn đăng kí nhà xe. Vui lòng đợi quản trị viên kiểm tra!", 'messageStatus' => "Đang xử lý"]);
    }


    //Họ và tên: $fullName
    ////          Số điện thoại: $phone
    ////            Email: $email
    ////            Xe muốn đăng ký: $passengerCar_name
    ////            Tỉnh/thành phố: $province
    ////            Nội dung tin nhắn: $meassageInput
}
