<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUser\ProfileUpdateUserRequest;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
      /**
     * Display the user's profile form.
     */

    public function index(Request $request){
        $user = auth()->user(); // Lấy thông tin từ bảng Album
        // dd($user->id);
        // $user = User::all();
        // $tickets = Ticket::where('user_id',$user->id )->get();
        $tickets = Ticket::where('user_id', $user->id) // Lọc theo user_id của người dùng đăng nhập
                  ->where('phone', 'like', '%' . $request->key . '%') // Lọc theo số điện thoại
                  ->get();
        // ->where('phone','like','%'.$request->key.'%')
        //  return response()->json($user, 200, [], JSON_PRETTY_PRINT);
        return view('client.pages.profile.profile',compact('user','tickets'));

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
    public function edit(Request $request, $id)
    {
      //
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $id)
    {
        $user = auth()->user();
        if ($request->input('action') === 'updateInfo') {
            $this->updateInfo($request, $user);
            return redirect()->route('profile.index')->with('successInfo', 'Thông tin đã được cập nhật thành công.');
        }elseif ($request->input('action') === 'updatePassword') {
            $this->updatePassword($request, $user);
            return redirect()->route('profile.index');
        }
    }

    private function updateInfo(Request $request, $user)
    {
        $request->validate([
            'name' => 'required|max:15',
            'email' => 'required|email|unique:users,email,'.$user->id,
            // 'phone' => 'required|numeric|digits:10|unique:users,phone,'.$user->id,
        ], [
            'name.required' => 'Tên là trường bắt buộc.',
            'name.max' => 'Tên không được vượt quá 15 ký tự.',
            'email.required' => 'Email là trường bắt buộc.',
            'email.email' => 'Email phải là địa chỉ email hợp lệ.',
            'email.unique' => 'Email đã được sử dụng bởi người dùng khác.',
            // 'phone.required' => 'Số điện thoại là trường bắt buộc.',
            // 'phone.numeric' => 'Số điện thoại chỉ được chứa số.',
            // 'phone.digits' => 'Số điện thoại phải có 10 chữ số.',
            // 'phone.unique' => 'Số điện thoại đã được sử dụng bởi người dùng khác.',
        ]);
            $name = $request->input('name');
            $email = $request->input('email');
            // $phone = $request->input('phone');

            $user->fill([
                'name' => $name,
                'email' => $email,
                // 'phone' => $phone,
            ])->save();
    }

    private function updatePassword(Request $request, $user)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6',
            'new_password_confirmation' => 'required|same:new_password'
        ], [
            'current_password.required' => 'Password là trường bắt buộc.',
            'new_password' => 'Password là trường bắt buộc.',
            'new_password.min' => 'Password tối thiểu 6 số',
            'new_password_confirmation' =>  'Password là trường bắt buộc.',
            'new_password_confirmation.same' =>  'Mật khẩu không trùng khớp',
        ]);
        if (Hash::check($request->input('current_password'), $user->password)) {
            $user->password = Hash::make($request->input('new_password'));
            $user->save();
            return redirect()->route('profile.index')->with('successPassword', 'Mật khẩu đã được cập nhật thành công.');
        } else {
            return redirect()->route('profile.index')->with('errorPassword', 'Mật khẩu hiện tại không chính xác.');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    // đây là hiện thị vé tikets
    // public function indexTK(){
    //     $tickets = DB::table('tickets')->select('id','username','phone','email','user_id','passenger_car_id','quantity','total_price','payment_method','status','created_at')->get();
    //     // return response()->json($tickets->passengerCars, 200, [], JSON_PRETTY_PRINT);
    //     return view('client.pages.profile.profile',compact('tickets'));
    // }


    public function ticketDetails(Request $request,$id){
        $user = auth()->user();
        $tickets = Ticket::find($id);
        //  return response()->json($user->tickets, 200, [], JSON_PRETTY_PRINT);
        return view('client.pages.ticketdetails.index',compact('user','tickets'));
    }
}
