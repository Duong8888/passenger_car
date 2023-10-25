<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketReportController extends Controller
{
    public function index(){
        return view('admin.pages.Report.ticket');
    }
}
