<?php

namespace App\Http\Controllers\admin\permission;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Models\Role;

class UserPermissionController extends Controller
{
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('admin.pages.userpermission.index',compact('users','roles'));
    }
    public function edit(Request $request, string $id) 
    {
        $user = User::find($id);
        $roles = Role::whereNotIn('name', ['SupperAdmin'])->get();
        $roleId = $user->roles->pluck('id')->all();
        //    return response()->json($request, 200, [], JSON_PRETTY_PRINT);
        return view('admin.pages.userpermission.permission',compact('user','roles','roleId'));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $roleName = $request->input('role');
        $role = Role::where('name', $roleName)->first();
        $user->syncRoles([$role->name]);
        $roles = $request->input('role');
        if($roles == 'user'){
            User::where('id',$id)->update(['user_type'=>'user']);
        }else if($roles == 'Nhà xe'){
            User::where('id',$id)->update(['user_type'=>'staff']);
        }else{
            User::where('id',$id)->update(['user_type'=>'admin']);
        }
        return Redirect::route('admin.permission.index')->with('success', 'Vai trò đã được cập nhật thành công.');
    }
}
