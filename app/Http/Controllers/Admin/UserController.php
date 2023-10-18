<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $role = Role::create(['name' => 'staff']);
        // $permission = Permission::create(['name' => 'add passengerCar']); //tạo các quyền chay
        // $permission = Permission::create(['name' => 'edit passengerCar']);
        // $permission = Permission::create(['name' => 'delete passengerCar']);


        // $role = Role::find(2);
        // $permission = Permission::find(4);
        // $role->givePermissionTo($permission); //Thằng admin có quyền ?
//       $permission->assignRole($role); //Ngược lại cái vai trò được thêm vào thằng ?
//        $role->syncPermissions($permissions);//có rồi thì ko ko thêm nữa mà đè luôn, dùng thêm nhiều
        // $permission->syncRoles($roles); //có rồi thì ko ko thêm nữa mà đè luôn,thêm nhiều
        //Xóa quyền
        // $role->revokePermissionTo($permission);
         // $permission->removeRole($role);
        //
        // dd(auth()->user());
        // auth()->user()->syncRoles(['admin']);

        // user có id là bn có thể sửa all
        // $user = User::find(1);
        // $user->assignRole('writer');



        return view('admin.pages.userpermission.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
