<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\NotificationMail;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class ContactController extends Controller
{
    public function index(Request $request)
    {
        $users = Contact::all();
        return view('admin.pages.contact.index', compact('users'));
    }


    function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    public function edit(Request $request, $id)
    {
        $status = $request->status;
        $contact = Contact::query()->where('id', $id);
        $contact->update(['status' => $status]);

        if ($status === 'Đã xử lý') {
            $messageStatus = "Yêu cầu của bạn Đã được xử lý thành công ";
            $data = (object) "";
            $data->fullName = $contact->get(['fullName']);
            $data->email = $contact->get(['email']);
            $data->phone = $contact->get(['phone']);
            $data->password = $this->randomPassword();
            $data->hashPassword = Hash::make($data->password);

            DB::insert('insert into users (name, email, phone, password, user_type) values (?, ?, ?, ?, ?)', [
                $data->fullName[0]['fullName'],
                $data->email[0]['email'],
                $data->phone[0]['phone'],
                $data->hashPassword,
                'staff'
            ]);

            $mailSender = new NotificationMail($messageStatus, 'mails.carRegisterSuccess', $data);
            Mail::to($contact->get(['email']))->send($mailSender);
        }

        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        User::where('id', $id)->delete();
        Session::flash('success', 'xóa thành công' . $id);
        return redirect()->route('route_staff_index');
    }
}
