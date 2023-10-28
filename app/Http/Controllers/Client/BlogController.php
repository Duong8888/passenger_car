<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;
class BlogController extends Controller
{
    public function blog($id)
    {
        $post = Posts::findOrFail($id);
        return view('client.pages.blogs.blog_details', compact('post'));
    }
    public function show()
    {
        $posts = Posts::query()->paginate(8);
        return view('client.pages.blogs.blog', compact('posts'));
    }
//    public function getAllCategories(){
////        $categories = Posts::all();
////        return $categories;
////    }
}
