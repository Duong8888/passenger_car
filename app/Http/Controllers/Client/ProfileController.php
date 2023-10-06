<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUser\ProfileUpdateUserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
      /**
     * Display the user's profile form.
     */
    public function index(){
        $user = User::find(4);  // Lấy thông tin từ bảng Album
        //  return response()->json($user, 200, [], JSON_PRETTY_PRINT);
        return view('client.pages.profile.profile',compact('user'));
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
    public function show()
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
    public function update(ProfileUpdateUserRequest $request, $id) //Request $request,
    {
        $user = User::find($id);
        
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
         // Kiểm tra mật khẩu hiện tại

        $user->fill([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
        ])->save();

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('error', 'Mật khẩu hiện tại không chính xác.');
        }

        // Cập nhật mật khẩu mới
        $user->password = Hash::make($request->new_password);
        $user->save();

        // return redirect()->route('profile.index')->with('success', 'Mật khẩu đã được cập nhật.');
        // if ($request->file('image') !== null) {
        //     $image = $request->file('image')->getClientOriginalName();
        //     $request->file('image')->storeAs('public/images/categories/', $image);
        //     $oldImage = $category->image;
        //     Storage::delete('public/images/categories/' . $oldImage);
        //     $category->fill([
        //         'image' => $image,
        //     ])->save();
        // }
        return redirect()->route('profile.index')->with('success', 'Đã sửa thành công');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
