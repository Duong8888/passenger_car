<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request){
        $user = auth()->user();
        return view('client.pages.contact.contact',compact('user'));
    }

}
