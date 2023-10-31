<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PhoneAuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            if (Auth::user()->user_type === 'admin' || Auth::user()->user_type === 'staff') {
                Auth::logout();
                return view('auth.login');
            } else {
                return redirect()->route('home');
            }
        } else {
            return view('auth.login');
        }
    }

    public function otp()
    {
        return view('auth.otp');
    }
    public function store(Request $request)
    {
        $existingUser = User::where('phone', $request->phone)->first();

        if (!$existingUser) {
            $user = new User();
            if (Str::startsWith($request->phone, '+84')) {
                $phoneNumber = Str::substr($request->phone, 3);
            }
            $user->phone = $phoneNumber;
            $user->save();
            $request->session()->regenerate();
            Auth::login($user);
        } else {
            Auth::login($existingUser);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }
}
