<?php

namespace App\Http\Controllers;

use App\Models\PostsCategory;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    public function index(Request $request)
    {

        $categories = PostsCategory::all();
        return view('admin.category.index', compact('categories'));
    }
    public function add()
    {
        return view('admin.category.add');
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'category_name' => 'required|max:50|unique:posts_categories,category_name',
            'parent_id' => 'required|numeric',
        ], [
            "category_name.required" => "Vui lòng nhập trường này",
            "category_name.unique" => "Tên này đã tồn tại!",
            "category_name.max" => "Tối đa :max kí tự",
            "parent_id.required" => "Vui lòng lựa chọn",
            "parent_id.numeric" => "Giá trị phải là số",
        ]);
        $validate['created_at'] = date("Y-m-d H:m:s");
        $check = PostsCategory::insert($validate);
        if ($check) {
            return back()->with('msgSuccess', 'Thêm thành công');
        }
        return back()->with('msgError', 'Thêm thất bại!');
    }
    public function edit(PostsCategory $category)
    {
        return view('admin.category.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {

        $validate = $request->validate([
            'category_name' => 'required|max:50|unique:posts_categories,category_name,' . $id,
            'parent_id' => 'required|numeric',
        ], [
            "category_name.required" => "Vui lòng nhập trường này",
            "category_name.unique" => "Tên này đã tồn tại!",
            "category_name.max" => "Tối đa :max kí tự",
            "parent_id.required" => "Vui lòng lựa chọn",
            "parent_id.numeric" => "Giá trị phải là số",
        ]);
        $validate['created_at'] = date("Y-m-d H:m:s");
        $check = PostsCategory::where('id', $id)->update($validate);
        if ($check) {
            return back()->with('msgSuccess', 'Cập nhật thành công');
        }
        return back()->with('msgError', 'Cập nhật thất bại!');
    }
    public function delete($id)
    {
        $check =
            PostsCategory::destroy($id);
        if ($check) {
            return back()->with('msgSuccess', 'Xóa thành công');
        }
        return back()->with('msgError', 'Xóa thất bại!');
    }
}
