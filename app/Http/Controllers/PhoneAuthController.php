<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class PhoneAuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
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
            $user->phone = $request->phone;
            $user->save();
            Auth::login($user);
            return redirect(RouteServiceProvider::HOME);
        } else {
            Auth::login($existingUser);
            return redirect(RouteServiceProvider::HOME);
        }
    }
}
