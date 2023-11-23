<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PassengerCar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        $car = PassengerCar::query()->where('user_id', $id)->with('route','workingTime')->get();
        return view('admin.pages.schedule.index',compact('car'));
    }
}
