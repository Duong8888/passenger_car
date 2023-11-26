<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PassengerCar;
use App\Models\PassengerCarWorkingTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        $car = PassengerCar::query()->where('user_id', $id)->with('route','workingTime')->whereNotNull('route_id')->get();
        return view('admin.pages.schedule.index',compact('car'));
    }
    public function update(Request $request){
        $time = PassengerCarWorkingTime::query()->findOrFail($request->id);
        $msg = '';
        if ($time){
            $time->update(['status'=>$request->status]);
            $data = ['value'=>$request->status,'id'=>$request->id];
//            if($request->status == 1){
//
//            }else if($request->status == 2){
//
//            }
        }else{
            $data = 'Bản gi không tồn tại.';
        }
        return response()->json($data);
    }
}
