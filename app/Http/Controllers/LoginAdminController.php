<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginAdminController extends Controller
{
    public function showLoginAdmin(){
        return view('auth.sign_in_admin');
    }
    public function loginAdmin(Request $request)
        {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->route('admin/dashboard'); // Điều hướng đến trang chính sau khi đăng nhập
            }

            return redirect()->route('loginAdmin')->with('error', 'Invalid login credentials.');
        }

        public function logoutAdmin(Request $request){
            Auth::logout();
              // Đảm bảo hủy phiên làm việc hiện tại
            $request->session()->invalidate();
            // Điều hướng đến trang đăng nhập
            return redirect('/admin/loginadmin');
        }
    
}
