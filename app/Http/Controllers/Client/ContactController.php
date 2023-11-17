<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        // Lấy thông tin người dùng hiện tại
        $users = auth()->user();

        // Truyền thông tin người dùng tới view
        return view('client.pages.contact.contact', compact('users'));
    }


}
