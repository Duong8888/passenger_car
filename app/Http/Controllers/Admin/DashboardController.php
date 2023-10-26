<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\PassengerCar;
use App\Models\Posts;
use App\Models\Ticket;
use App\Models\User;
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
        $users = User::has('tickets')
            ->with(['tickets' => function($query) {
                $query->orderBy('created_at', 'desc');
            }])
            ->take(5)->get();
            $users->transform(function($user) {
                $user->latest_ticket = $user->tickets->first();
                return $user;
            });

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
