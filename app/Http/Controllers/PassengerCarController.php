<?php

namespace App\Http\Controllers;

use App\Models\PassengerCar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PassengerCarController extends Controller
{
    public function index(Request $request){
        $passenger_cars= DB::table('passenger_cars')->select('id','license_plate','capacity','description','user_id','route_id')->get();
        return view('admin.layouts.PassengerCar.index',compact('passenger_cars'));
    }
    public function add(Request $request){
        if($request->post()){
            $params = $request->except('_token');
            $passenger_cars = PassengerCar::create($params);
         
         if($passenger_cars->id){
            Session::flash('success','thêm mới thành công');
            return redirect()->route('route_passengerCar_add');
         }
      }
        return view('admin.layouts.PassengerCar.add');
    }
    public function edit(Request $request,$id){
        $passenger_cars = PassengerCar::find($id);
        if($request -> isMethod('POST')){
          PassengerCar::where('id',$id)
          ->update($request->except('_token'));
          if($request){
            Session::flash('success','Sửa thành công dữ liệu người dùng');
            return redirect()->route('route_passengerCar_index',['id'=>$id]);
        }
        }
        return view('admin.layouts.PassengerCar.edit',compact('passenger_cars'));
    }
    public function delete(Request $request,$id){
        PassengerCar::where('id',$id)->delete();
        Session::flash('success','xóa thành công'.$id);
        return redirect()->route('route_user_index');
    }
}
