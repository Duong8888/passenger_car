<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminManagementController extends Controller
{
    public function index(Request $request){
        $users = User::all();
        return view('admin.pages.AdminManagement.index',compact('users'));
    }
    public function add(Request $request){
        if($request->post()){
            $params = $request->except('_token');
            $users = User::create($params);
         
         if($users->id){
            Session::flash('success','thêm mới thành công');
            return redirect()->route('route_adminmanagement_add');
         }
      }
        return view('admin.pages.AdminManagement.add');
    }
    public function edit(Request $request,$id){
        $users = User::find($id);
        if($request -> isMethod('POST')){
          User::where('id',$id)
          ->update($request->except('_token'));
          if($request){
            Session::flash('success','Sửa thành công dữ liệu người dùng');
            return redirect()->route('route_adminmanagement_edit',['id'=>$id]);
        }
        }
        return view('admin.pages.AdminManagement.edit',compact('users'));
    }
    public function delete(Request $request,$id){
        User::where('id',$id)->delete();
        Session::flash('success','xóa thành công'.$id);
        return redirect()->route('route_adminmanagement_index');
    }
}
