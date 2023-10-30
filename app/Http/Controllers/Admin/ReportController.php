<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function UserReport(){
        
        $userCountToday = User::whereDate('created_at', today())->count();
        return view('admin.pages.report.user-report.index');
    }

    public function TicketReport(){
        return view('admin.pages.report.ticket-report.index');
    }
}
