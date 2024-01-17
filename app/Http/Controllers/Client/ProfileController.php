<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUser\ProfileUpdateUserRequest;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\WorkingTime;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\alert;

class ProfileController extends Controller
{
      /**
     * Display the user's profile form.
     */

    public function index(Request $request){
        $user = auth()->user();
        $tickets = Ticket::with('passengerCar')->where('phone', $user->phone)->get();
        // return response()->json($tickets[0]->passengerCar->albums[0]->path, 200, [], JSON_PRETTY_PRINT);
        return view('client.pages.profile.profile',compact('user','tickets'));

    }

    public function update(Request $request, $id)
    {
        $user = auth()->user();
        if ($request->input('action') === 'updateInfo') {
            $this->updateInfo($request, $user);
            return redirect()->route('profile.index')->with('successInfo', 'Thông tin đã được cập nhật thành công.');
        }elseif ($request->input('action') === 'updatePassword') {
            $this->updatePassword($request, $user);
            return redirect()->route('profile.index');
        }
    }

    private function updateInfo(Request $request, $user)
    {
        $request->validate([
            'name' => 'required|max:15',
            'email' => 'required|email|unique:users,email,'.$user->id,
            // 'phone' => 'required|numeric|digits:10|unique:users,phone,'.$user->id,
        ], [
            'name.required' => 'Tên là trường bắt buộc.',
            'name.max' => 'Tên không được vượt quá 15 ký tự.',
            'email.required' => 'Email là trường bắt buộc.',
            'email.email' => 'Email phải là địa chỉ email hợp lệ.',
            'email.unique' => 'Email đã được sử dụng bởi người dùng khác.',
            // 'phone.required' => 'Số điện thoại là trường bắt buộc.',
            // 'phone.numeric' => 'Số điện thoại chỉ được chứa số.',
            // 'phone.digits' => 'Số điện thoại phải có 10 chữ số.',
            // 'phone.unique' => 'Số điện thoại đã được sử dụng bởi người dùng khác.',
        ]);
            $name = $request->input('name');
            $email = $request->input('email');
            // $phone = $request->input('phone');

            $user->fill([
                'name' => $name,
                'email' => $email,
                // 'phone' => $phone,
            ])->save();
    }

    private function updatePassword(Request $request, $user)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6',
            'new_password_confirmation' => 'required|same:new_password'
        ], [
            'current_password.required' => 'Password là trường bắt buộc.',
            'new_password' => 'Password là trường bắt buộc.',
            'new_password.min' => 'Password tối thiểu 6 số',
            'new_password_confirmation' =>  'Password là trường bắt buộc.',
            'new_password_confirmation.same' =>  'Mật khẩu không trùng khớp',
        ]);
        if (Hash::check($request->input('current_password'), $user->password)) {
            $user->password = Hash::make($request->input('new_password'));
            $user->save();
            return redirect()->route('profile.index')->with('successPassword', 'Mật khẩu đã được cập nhật thành công.');
        } else {
            return redirect()->route('profile.index')->with('errorPassword', 'Mật khẩu hiện tại không chính xác.');
        }
    }

    public function ticketDetails(Request $request,$id){
        $user = auth()->user();
        $tickets = Ticket::find($id);
        $time_id = $tickets->time_id;
        $working_time = WorkingTime::where('id', $time_id)->get();

        //  return response()->json($tickets->passengerCar, 200, [], JSON_PRETTY_PRINT);
        return view('client.pages.profile.ticketDetail',compact('user','tickets','working_time'));
    }

    public function ticketDetailsDelete($id){
        $user = auth()->user();
        $tickets = Ticket::find($id);
        $time_id = $tickets->time_id;
        $tickets->update(['status' => 0]);
        $working_time = WorkingTime::where('id', $time_id)->get();
        return view('client.pages.profile.ticketDetail',compact('user','tickets','working_time'));
    }
}
