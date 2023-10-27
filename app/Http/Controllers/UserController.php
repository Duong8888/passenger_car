<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(UserRequest $request){
        $users = DB::table('users')->select('id','name','email','phone')->get();
        return view('admin.layouts.User.index',compact('users'));
    }   
    public function add(UserRequest $request){
        if($request->post()){
            $params = $request->except('_token');
            $users = User::create($params);
         
         if($users->id){
            Session::flash('success','thêm mới thành công');
            return redirect()->route('route_user_add');
         }
      }
        return view('admin.layouts.User.add');
    }
    public function edit(UserRequest $request,$id){
        $users = User::find($id);
        if($request -> isMethod('POST')){
          User::where('id',$id)
          ->update($request->except('_token'));
          if($request){
            Session::flash('success','Sửa thành công dữ liệu người dùng');
            return redirect()->route('route_user_edit',['id'=>$id]);
        }
        }
        return view('admin.layouts.User.edit',compact('users'));
    }
    public function delete(UserRequest $request,$id){
        User::where('id',$id)->delete();
        Session::flash('success','xóa thành công'.$id);
        return redirect()->route('route_user_index');
    }
    
}
