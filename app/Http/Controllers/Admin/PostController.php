<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends AdminBaseController
{
    public $model = Posts::class;
    public $urlbase = 'admin.posts';
    public $fieldImage = 'posts'; // Điều này phụ thuộc vào cấu hình của bạn
    public $urlIndex = 'posts.index';
    public $folderImage = 'posts/image'; // Điều này phụ thuộc vào cấu hình của bạn
    public $titleIndex = 'Danh sách Bài viết';
    public $titleCreate = 'Thêm mới Bài viết';
    public $titleShow = 'Xem chi tiết bài viết';
    public $titleEdit = 'Cập nhật Bài viết';
    public $colums = [
        'title' => 'Tiêu đề',
        'content' => 'Nội dung',
        'image' => 'Ảnh',
        'slug' => 'Slug',
        'category_id' => 'Danh mục',
        'author_id' => 'Tác giả',
        'action' => 'Action',
    ];

    public function validateStore($request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
            'slug' => 'required',
            'category_id' => 'required', // Ví dụ kiểm tra category_id là một số nguyên
            'author_id' => 'required', // Ví dụ kiểm tra author_id là một số nguyên
            // Thêm các quy tắc kiểm tra khác cho các trường khác
        ]);

        return $validator;

    }

    public function create()
    {
        return view('admin.pages.posts.create');
    }
    public function store( Request $request)
    {
//        dd($request->all());
        // Validate dữ liệu biểu mẫu
        $validator = $this->validateStore($request);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Tạo một model Post mới và lưu vào cơ sở dữ liệu
        $post = new Posts(); // Sửa thành Post::class để đảm bảo tên model đúng
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->slug = $request->input('slug');
        $post->category_id = $request->input('category_id'); // Đặt category_id
        $post->author_id = $request->input('author_id'); // Đặt author_id
        // Đặt các trường khác theo yêu cầu của model Post của bạn

        $post->save();

        return redirect()->route('postsing')->with('success', 'Bài viết được tạo thành công');
    }

    public function edit($id)
    {
        $post = Posts::find($id);

        if (!$post) {
            return redirect()->route('postsing')->with('error', 'Bài viết không tồn tại');
        }

        return view('admin.pages.posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Posts::find($id);

        if (!$post) {
            return redirect()->route('postsing')->with('error', 'Bài viết không tồn tại');
        }

        // Validate dữ liệu biểu mẫu
        $validator = $this->validateStore($request);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Cập nhật thông tin bài viết
        $post->title = $request->input('title');
        $post->subtitle = $request->input('subtitle');
        $post->slug = $request->input('slug');
        $post->category_id = $request->input('category_id');
        $post->author_id = $request->input('author_id');
        // Đặt các trường khác theo yêu cầu của model Post của bạn

        $post->save();

        return redirect()->route('postsing')->with('success', 'Bài viết đã được cập nhật thành công');
    }
    public function destroy($id)
    {
        $post = Posts::find($id);
        if (!$post) {
            return redirect()->route('postsing')->with('error', 'Bài viết không tồn tại');
        }
        $post->delete();
        return redirect()->route('postsing')->with('success', 'Bài viết đã được xóa thành công');
    }
    public function createSlug($slug)
    {
        $post = Posts::where('slug','=',$slug)->first();

        if (!$post) {
            return redirect()->route('postsing')->with('error', 'Bài viết không tồn tại');
        }

        return view('admin.pages.posts.edit', compact('post'));
    }

}
