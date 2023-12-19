<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\PostsCategory;
use Illuminate\Http\Request;
use App\Models\Posts;
class BlogController extends Controller
{
    public function blog($id)
    {
        $post = Posts::findOrFail($id);
        $categories = PostsCategory::query()->get();
        return view('client.pages.blogs.blog_details', compact('post', 'categories'));
    }

    public function show()
    {
        $posts = Posts::query()->paginate(6);
        return view('client.pages.blogs.blog', compact('posts'));
    }

}
