<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\PassengerCar;
use App\Models\Posts;
use App\Models\Ticket;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalUsers = User::all();
        $userCountToday = User::whereDate('created_at', today())->count();
        $admins = User::where('user_type', 'admin')->take(4)->get();
        $totalPosts = Posts::count();
        $postCountToday = Posts::whereDate('created_at', today())->count();
        $totalPassengerCars = PassengerCar::count();
        $passengerCarsCountToday = PassengerCar::whereDate('created_at', today())->count();
        $comments = Comment::all();
        $commentsCountToday = Comment::whereDate('created_at', today())->count();
        $today = now()->toDateString();
        $today = Carbon::now()->toDateString(); // Lấy ngày hôm nay (dạng 'Y-m-d')
        $users = User::whereHas('tickets', function($query) use ($today) {
        $query->whereDate('created_at', $today);})->get();
        // return response()->json($users, 200, [], JSON_PRETTY_PRINT);
        return view('admin.pages.dashboard.index',compact('totalUsers','totalPosts',
        'totalPassengerCars','comments','users','admins','commentsCountToday',
        'userCountToday','postCountToday','passengerCarsCountToday'
    ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
