<?php

namespace App\Http\Controllers\admin\permission;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionController extends Controller
{
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.pages.rolepermission.index',compact('users','roles','permissions'));
    }
    public function create()
    {
        $roles = Role::where('name', '!=', 'SupperAdmin')->get();
        $permissions = Permission::all();
        return view('admin.pages.rolepermission.create',compact('roles','permissions'));
    }
    public function store(Request $request)
    {
        if ($request->input('action') === 'createRole') {
            $this->storeRole($request);
            return redirect()->route('rolePermission.index')->with('successRole', 'Role đã được tạo thành công.');
        }elseif ($request->input('action') === 'createPermission') {
            $this->storePermission($request);
            return redirect()->route('rolePermission.create')->with('successsPermission-', 'Permission đã được tạo thành công.');
        }
    }
    public function storeRole(Request $request)
    {
        $request->validate([
            'nameRole' => 'required|unique:roles,name',
        ], [
            'nameRole.required' => 'Tên role không được để trống.',
            'nameRole.unique' => 'Role đã tồn tại.',
        ]);

        $role = new Role();
        $role->name = $request->input('nameRole');
        $role->givePermissionTo($request->input('permissions'));
        $role->save();
    }
    public function storePermission(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name',
        ], [
            'name.required' => 'Permission ko được để trống.',
            'name.unique' => 'Permission đã trùng mất rồi.',
        ]);
        $permission = new Permission();
        $permission->name = $request->input('name');
        $permission->save();
    }
    public function edit(string $id)
    {
        $roles = Role::where('name', '!=', 'SupperAdmin')->get();
        $role = Role::find($id);
        $permissions = Permission::all();
        //  return response()->json($rol, 200, [], JSON_PRETTY_PRINT);

        return view('admin.pages.rolepermission.edit',compact('roles','permissions','role'));
    }
    public function update(Request $request, string $id)
    {
        $role = Role::findOrFail($id);
        $request->validate([
            'permissions' => 'array',
        ]);
        $role->syncPermissions($request->input('permissions'));
        return redirect()->route('rolePermission.index')->with('success', 'Bạn đã sửa lại vai trò cho Quyền thành công');
    }
    public function delete(string $id)
    {
        Permission::where('id',$id)->delete();
        return redirect()->route('rolePermission.create')
            ->with('success', 'Bạn đã xóa vai trò thành công');
    }
    public function destroy(string $id)
    {
        Role::where('id',$id)->delete();
        return redirect()->route('rolePermission.index')
            ->with('success', 'Bạn đã xóa Quyền thành công');
    }
}
