<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;
class CarRegisterController extends Controller
{
    public function index()
    {
        return view('client.pages.car-register.index');
    }
}
