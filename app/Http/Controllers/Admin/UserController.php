<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    public function index(Request $request){
        $users = User::all();
        return view('admin.pages.Staff.index',compact('users'));
    }
    public function add(Request $request){
        if($request->post()){
            $params = $request->except('_token');
            $users = User::create($params);
         
         if($users->id){
            Session::flash('success','User added successfully');
            return redirect()->route('route_staff_add');
         }
      }
        return view('admin.pages.Staff.add');
    }
    public function edit(Request $request,$id){
        $users = User::find($id);
        if($request -> isMethod('POST')){
          User::where('id',$id)
          ->update($request->except('_token'));
          if($request){
            Session::flash('success','Sửa thành công dữ liệu người dùng');
            return redirect()->route('route_staff_edit',['id'=>$id]);
        }
        }
        return view('admin.pages.Staff.edit',compact('users'));
    }
    public function delete(Request $request,$id){
        User::where('id',$id)->delete();
        Session::flash('success','xóa thành công'.$id);
        return redirect()->route('route_staff_index');
    }
}
