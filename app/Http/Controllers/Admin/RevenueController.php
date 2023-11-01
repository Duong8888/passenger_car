<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\revenue;
use Illuminate\Http\Request;

class RevenueController extends Controller
{
    public function index(Request $request)
    {

        $result = revenue::query();
        $price = revenue::query();
        if ($request->has('start_date') && $request->has('end_date')) {
            $result->orderBy('created_at', "desc")->whereBetween('created_at', [$request->start_date, $request->end_date]);
            $price->whereBetween('created_at', [$request->start_date, $request->end_date]);
        } else {
            $result->orderBy('created_at', "desc")->where('created_at', '=', date('Y-m-d'));
            $price->where('created_at', '=', date('Y-m-d'));
        }

        $revenue = $result->get();
        $totalToday = $price->sum('price');
        return view('admin.pages.revenue.index', compact('revenue', 'totalToday'));
    }
    public function add()
    {
        return view('admin.pages.revenue.add');
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'customer_name' => 'required',
            'price' => 'required',
        ], [
            "name.required" => "Vui lòng nhập trường này",
            "customer_name.required" => "Vui lòng nhập trường này",
            "price.required" => "Vui lòng nhập trường này",


        ]);
        $validate['created_at'] = $request->created_at;
        $check = revenue::insert($validate);
        if ($check) {
            return back()->with('msgSuccess', 'Thêm thành công');
        }
        return back()->with('msgError', 'Thêm thất bại!');
    }
    public function edit(revenue $revenue)
    {
        return view('admin.pages.revenue.edit', compact('revenue'));
    }
    public function update(Request $request, $id)
    {

        $validate = $request->validate([
            'name' => 'required',
            'customer_name' => 'required',
            'price' => 'required',
        ], [
            "name.required" => "Vui lòng nhập trường này",
            "customer_name.required" => "Vui lòng nhập trường này",
            "price.required" => "Vui lòng nhập trường này",


        ]);
        $validate['created_at'] = $request->created_at;
        $check = revenue::where('id', $id)->update($validate);
        if ($check) {
            return back()->with('msgSuccess', 'Cập nhật thành công');
        }
        return back()->with('msgError', 'Cập nhật thất bại!');
    }
    public function delete($id)
    {
        $check =
            revenue::destroy($id);
        if ($check) {
            return back()->with('msgSuccess', 'Xóa thành công');
        }
        return back()->with('msgError', 'Xóa thất bại!');
    }
}
