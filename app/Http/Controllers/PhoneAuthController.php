<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class PhoneAuthController extends Controller
{
    public function showlogin(){
        return view('auth.sign_in');
    }
        public function login(Request $request)
        {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->intended('register'); // Điều hướng đến trang chính sau khi đăng nhập
            }

            return redirect()->route('login')->with('error', 'Invalid login credentials.');
        }


    public function showregister(){
        return view('auth.register');
    }
// Xử lý đăng ký người dùng
    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required', // Đảm bảo bạn xác định kiểu dữ liệu cho 'phone'
            'password' => 'required|max:255',
            'otp' => 'required', // Đảm bảo bạn xác định kiểu dữ liệu cho 'otp'
            'email' => 'required|email|max:255', // Xác thực trường email
        ]);

        // Tạo một bản ghi mới cho người dùng
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Đảm bảo hủy phiên làm việc hiện tại
        $request->session()->invalidate();

        return redirect('/sign_in'); // Điều hướng đến trang đăng nhập
    }

}
