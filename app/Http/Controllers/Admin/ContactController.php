<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ContactController extends Controller
{
    public function index(Request $request){
        $users = Contact::all();
        return view('admin.pages.contact.index',compact('users'));
    }

    public function edit(Request $request,$id){
        $status = $request->status;
        Contact::query()->where('id', $id)->update(['status'=> $status]);

        return redirect()->back();
    }
    public function delete(Request $request,$id){
        User::where('id',$id)->delete();
        Session::flash('success','xóa thành công'.$id);
        return redirect()->route('route_staff_index');
    }
}
