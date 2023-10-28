<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use App\Models\PostsCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function detail($id)
    {
        $category = PostsCategory::where('id', '=', $id)->first();
        $posts = Posts::where('category_id', '=', $category->id)->get();
        return view('client.pages.postCategory', compact('posts', 'category'));
    }
}
