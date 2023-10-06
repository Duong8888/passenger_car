<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postDetail($slug)
    {
        $post = Posts::where('slug', $slug)->first();
        return view('client.pages.blogDetail', compact('post'));
    }
}
