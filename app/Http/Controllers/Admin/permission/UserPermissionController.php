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
    public function edit(string $id)
    {
        $user = User::find($id);
        $roles = Role::whereNotIn('name', ['SupperAdmin'])->get();
        $roleId = $user->roles->pluck('id')->all();
        //    return response()->json($roleID, 200, [], JSON_PRETTY_PRINT);
        return view('admin.pages.userpermission.permission',compact('user','roles','roleId'));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $roleName = $request->input('role');
        $role = Role::where('name', $roleName)->first();
        $user->syncRoles([$role->name]);
        return Redirect::route('permission.index')->with('success', 'Vai trò đã được cập nhật thành công.');
    }
}
