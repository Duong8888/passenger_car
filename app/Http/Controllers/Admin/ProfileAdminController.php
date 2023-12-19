<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function changePassword(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);


        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        $user->update(['password' => Hash::make($request->password)]);
        \Illuminate\Support\Facades\Session::flash('success', 'Đổi mật khẩu thành công.');
        return back()->with(['' => '']);
    }

    public function showChangePasswordForm()
    {
        $user = User::find(auth()->user()->id);
        return view('admin.pages.profile.repassword', ["user" => $user]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
