<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;
use PDF;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $users = Contact::all();
        return view('admin.pages.contact.index', compact('users'));
    }


    function randomPassword()
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
    public function handleCheckSuccess($content, $contact)
    {

        $random_pass = $this->randomPassword();
        $data = [
            "fullName" => isset($contact->user_name) ? $contact->user_name : "Default",
            "email" =>  $contact->email,
            "phone" => $contact->phone,
            "password" => Hash::make($random_pass),
            "hashPassword" => $random_pass,
            'name' => $contact->user_name,
            'user_type' => 'staff',
            "title" => $content['title'],
            "province" => $contact->province,
            "passengerCar_name" => $contact->passengerCar_name,
            "number_card" => $contact->number_card,
            "rental_code" => $contact->rental_code,
            "created_at" => date("d/m/Y H:i:s", strtotime($contact->created_at)),
            "day" => date('D'),
            "month" => date('M'),
            "year" => date('Y')
        ];
        $messageStatus = "Yêu cầu của bạn đã được xử lý thành công ";
        $uniqueUser = User::query()->where('email', $data['email'])->first();
        $roleUser = $uniqueUser;
        if (!$uniqueUser) {
            $user = User::create($data);
        } else {
            $user = $uniqueUser->update($data);
            $user = $roleUser;
        }

        unset($data['user_type']);
        $role = Role::where('name', 'Nhà xe')->first();
        $user->assignRole($role);
        $pdf = PDF::loadView('mails.registerApply', $data);

        Mail::send('mails.carRegisterPending', $data, function ($message) use ($data, $pdf) {
            $text = $this->convertTextToSlug($data['name']);
            $message->to($data["email"], $data["email"])
                ->subject($data["title"])
                ->attachData($pdf->output(), $text . ".pdf");
        });
        return $messageStatus;
    }
    public function appy(Request $request)
    {
        $contact = Contact::query()->where('id', $request->value['id'])->first();
        $random_pass = $this->randomPassword();
        $uniqueUser = User::query()->where('email', $contact->email)->first();
        $roleUser = $uniqueUser;
        $data = [
            "fullName" => $contact->user_name,
            "email" => $contact->email,
            "hashPassword" => $random_pass,
            "phone" => $contact->phone,
            "password" => Hash::make($random_pass),
            'name' => $contact->user_name,
            'user_type' => 'staff',
        ];
        if (!$uniqueUser) {
            User::create($data);
        } else {
            $user = $uniqueUser->update($data);
            $user = $roleUser;
        }
        $role = Role::where('name', 'Nhà xe')->first();
        $user->assignRole($role);
        $contact->update(['status' => "Đã xử lý"]);
        $data['title'] = "Đăng kí thành công đối tác CAR FINDER PRO";

        Mail::send('mails.carRegisterSuccess', $data, function ($message) use ($data) {
            $message->to($data['email'], 'Visitor')->subject($data['title']);
        });
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        User::where('id', $id)->delete();
        Session::flash('success', 'xóa thành công' . $id);
        return redirect()->route('route_staff_index');
    }

    public function detail(Request $request, $id)
    {
        $user = Contact::where('id', $id)->first();
        return view('admin.pages.contact.detail', ['user' => $user]);
    }

    public function sendmail(Request $request)
    {
        $contact = Contact::query()->where('id', $request->value['id'])->first();
        $contact->update(['status' => "Đang xử lý"]);
        $data["title"] = "Thông tin xác nhận đăng kí làm đối tác CAR FINDER PRO";
        $response = $this->handleCheckSuccess($data, $contact);
        return Response($response);
    }

    public function convertTextToSlug($text)
    {
        // Loại bỏ ký tự đặc biệt và chuyển chữ hoa thành chữ thường
        $text = mb_strtolower($text, 'UTF-8');
        $text = preg_replace('/[^a-z0-9\-]/', '-', $text);

        // Loại bỏ các ký tự '-' liên tiếp
        $text = preg_replace('/-+/', '-', $text);

        // Loại bỏ các ký tự '-' ở đầu và cuối chuỗi
        $text = trim($text, '-');

        return $text;
    }

    public function cancelRequest(Request $request)
    {
        $contact = Contact::query()->where('id', $request->value['id'])->first();
        $contact->update(['status' => "Đã hủy"]);
        $data = [
            "title" => "Đơn đăng kí không đủ điều kiện",
            "email" => $contact->email,
            "content" => $request->value['content'],
            "status" => "Không đủ điều kiện",
            "fullName" => $contact->user_name,
        ];
        $result = Mail::send('mails.carCancel', $data, function ($message) use ($data) {
            $message->to($data["email"], $data["email"])
                ->subject($data["title"]);
        });
        if ($result) {
            return Response($data);
        }
    }
}
