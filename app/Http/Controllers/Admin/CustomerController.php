<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request)
    {

        $customers = Customer::all();
        return view('admin.pages.customer.index', compact('customers'));
    }
    public function add()
    {
        return view('admin.pages.customer.add');
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'departure_point' => 'required',
            'destination' => 'required',
        ], [
            "name.required" => "Vui lòng nhập trường này",
            "phone.required" => "Vui lòng nhập trường này",
            "email.required" => "Vui lòng nhập trường này",

            "departure_point.required" => "Vui lòng nhập trường này",
            "destination.required" => "Vui lòng nhập trường này",
            'email.email' => 'Địa chỉ email không hợp lệ.',

        ]);
        $validate['created_at'] = date("Y-m-d H:m:s");
        $check = Customer::insert($validate);
        if ($check) {
            return back()->with('msgSuccess', 'Thêm thành công');
        }
        return back()->with('msgError', 'Thêm thất bại!');
    }
    public function edit(Customer $customer)
    {
        return view('admin.pages.customer.edit', compact('customer'));
    }
    public function update(Request $request, $id)
    {

        $validate = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'departure_point' => 'required',
            'destination' => 'required',
        ], [
            "name.required" => "Vui lòng nhập trường này",
            "phone.required" => "Vui lòng nhập trường này",
            "email.required" => "Vui lòng nhập trường này",

            "departure_point.required" => "Vui lòng nhập trường này",
            "destination.required" => "Vui lòng nhập trường này",
            'email.email' => 'Địa chỉ email không hợp lệ.',

        ]);
        $validate['created_at'] = date("Y-m-d H:m:s");
        $check = Customer::where('id', $id)->update($validate);
        if ($check) {
            return back()->with('msgSuccess', 'Cập nhật thành công');
        }
        return back()->with('msgError', 'Cập nhật thất bại!');
    }
    public function delete($id)
    {
        $check =
            Customer::destroy($id);
        if ($check) {
            return back()->with('msgSuccess', 'Xóa thành công');
        }
        return back()->with('msgError', 'Xóa thất bại!');
    }
}
