<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postDetail()
    {
        return view('client.pages.blogDetail');
    }
}
