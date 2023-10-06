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
        return view('client.pages.blog_details', compact('post'));
    }
    public function show()
    {
        $posts = Posts::all();
        return view('client.pages.blog', compact('posts'));
    }
}
