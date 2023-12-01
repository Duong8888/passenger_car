<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request)
    {
       
        return view('client.pages.about.about');
    }
    
    public function vision(Request $request)
    {
        
        return view('client.pages.about.vision');
    }
    public function mission(Request $request)
    {
        
        return view('client.pages.about.mission');
    }
}
