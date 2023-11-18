<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginAdminController extends Controller
{
    public function showLoginAdmin()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('auth.sign_in_admin');
    }

    public function loginAdmin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return view('auth.sign_in_admin');
    }

    public function logoutAdmin(Request $request)
    {
        Auth::logout();
        // Đảm bảo hủy phiên làm việc hiện tại
        $request->session()->invalidate();
        // Điều hướng đến trang đăng nhập
        return redirect()->route('login_admin');
    }


}
