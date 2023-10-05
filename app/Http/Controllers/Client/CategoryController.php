<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\PostsCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function detail(PostsCategory $category)
    {
        return view('client.pages.postCategory', compact('category'));
    }
}
