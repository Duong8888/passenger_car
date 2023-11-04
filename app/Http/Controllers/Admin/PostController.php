<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\AdminBaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\PostRequest as AuthPostRequest;
use App\Models\Posts;
use App\Models\PostsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\PostRequest;
use Illuminate\Http\RedirectResponse;

class PostController extends AdminBaseController
{
    public $model = Posts::class;
    public $urlbase = 'admin.posts';
    public $pathView = 'admin.pages.posts.';
    public $fieldImage = 'image'; // Điều này phụ thuộc vào cấu hình của bạn
    public $urlIndex = 'admin.postsing';
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
        ],[
            'title.required' => 'yêu cầu nhập tiêu đề',
            'content.required' => 'yêu cầu nhập tiêu đề',
            'image.required' => 'yêu cầu nhập tiêu đề',
            'slug.required' => 'yêu cầu nhập tiêu đề',
            'category_id.required' => 'yêu cầu nhập tiêu đề',
            'author_id.required' => 'yêu cầu nhập tiêu đề',
        ]);
        if ($validator->fails()) {
            return $validator;
        }

    }
    


    public function create()
    { 
    

        $category = PostsCategory::all();
        return parent::create()->with(['category' => $category]); // TODO: Change the autogenerated stub
    }


}
