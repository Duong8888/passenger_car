<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\PassengerCar;
use App\Models\Posts;
use App\Models\Ticket;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user(); // Lấy thông tin người dùng hiện tại
    
            if ($user->user_type == 'admin') {
                $totalUsers = User::all();
                $admins = User::where('user_type', 'admin')->take(4)->get();
                $totalPosts = Posts::count();
                $totalPassengerCars = PassengerCar::count();
                $comments = Comment::all();
                $userCountToday = User::whereDate('created_at', today())->count();
                $postCountToday = Posts::whereDate('created_at', today())->count();
                $passengerCarsCountToday = PassengerCar::whereDate('created_at', today())->count();
                $commentsCountToday = Comment::whereDate('created_at', today())->count();
                $today = Carbon::now()->toDateString();
                $tickets = Ticket::whereDate('created_at', $today)->get();
                $contacts = Contact::whereDate('created_at', $today)->get();
            }
            else if($user->user_type == 'staff'){
                $userId = Auth::id();
                $totalUsers = Ticket::join('passenger_cars', 'passenger_cars.id', '=', 'tickets.passenger_car_id')
                    ->where('passenger_cars.user_id', $userId)
                    ->sum('tickets.quantity');//
                $userCountToday = Ticket::join('passenger_cars', 'passenger_cars.id', '=', 'tickets.passenger_car_id')
                    ->where('passenger_cars.user_id', $userId)
                    ->whereDate('tickets.created_at', Carbon::today())
                    ->sum('tickets.quantity');
                $comments = Comment::join('passenger_cars', 'passenger_cars.id', '=', 'comments.passenger_car_id')
                    ->where('passenger_cars.user_id', $userId)
                    ->count();//
                $passengerCar = PassengerCar::where('user_id', $userId)->get();
                $passengerCarsCountToday = PassengerCar::where('user_id', $userId)
                    ->whereDate('created_at', Carbon::today())
                    ->count();
                $totalPosts = Posts::where('author_id', $userId)->count();//
                $postCountToday = Posts::where('author_id', $userId)
                    ->whereDate('created_at', Carbon::today())
                    ->count();
                $commentsCountToday = Comment::join('passenger_cars', 'passenger_cars.id', '=', 'comments.passenger_car_id')
                    ->where('passenger_cars.user_id', $userId)
                    ->whereDate('comments.created_at', Carbon::today())
                    ->count();
                //
                $admins = User::where('user_type', 'admin')->take(4)->get();
                $totalPosts = Posts::where('author_id', $userId)->count();//
                $totalPassengerCars = PassengerCar::where('user_id', $userId)->count();//
                $today = Carbon::now()->toDateString();
                $tickets = Ticket::whereDate('created_at', $today)->get();
                $contacts = Contact::whereDate('created_at', $today)->get();
            }
        }
    
        return view('admin.pages.dashboard.index', compact(
            'totalUsers', 'totalPosts', 'totalPassengerCars', 'comments', 'admins',
            'commentsCountToday', 'userCountToday', 'postCountToday',
            'passengerCarsCountToday', 'tickets', 'contacts'
        ));
    }
    public function dayrevenue(Request $request)
    {
        $sub60days = Carbon::now('Asia/Ho_Chi_Minh')->subDays(30)->toDateString();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $tickets = User::whereBetween('created_at', [$sub60days, $now])->orderBy('created_at', 'ASC')->get();
        $chart_data = [];
        foreach ($tickets as $val) {
            $date = Carbon::parse($val->created_at)->toDateString();
            $user_type = $val->user_type;
            if (!isset($chart_data[$date])) {
                $chart_data[$date] = [
                    'created_at' => $date,
                    'count' => 0,
                    'user_type' => [
                        'admin' => 0,
                        'staff' => 0,
                        'user' => 0,
                    ],
                ];
            }
            $chart_data[$date]['count']++;
            $chart_data[$date]['user_type'][$user_type]++;
        }

        $flattened_data = [];
        foreach ($chart_data as $date_data) {
            $flattened_data[] = [
                'created_at' => $date_data['created_at'],
                'count' => $date_data['count'],
                'user_type_admin' => $date_data['user_type']['admin'],
                'user_type_staff' => $date_data['user_type']['staff'],
                'user_type_user' => $date_data['user_type']['user'],
            ];
        }
        return response()->json($flattened_data);
        // 
        $chart_data = [];
        foreach ($tickets as $val) {
            $date = Carbon::parse($val->created_at)->toDateString();
            $status = $val->status;
    
            if (!isset($chart_data[$date])) {
                $chart_data[$date] = [
                    'created_at' => $date,
                    'count' => 0,
                    'status' => [
                        'Chưa xử lý' => 0,
                        'Đã xử lý' => 0,
                    ],
                ];
            }
    
            $chart_data[$date]['count']++;
            $chart_data[$date]['status'][$status]++;
        }
    
        $flattened_data = [];
        foreach ($chart_data as $date_data) {
            $flattened_data[] = [
                'created_at' => $date_data['created_at'],
                'count' => $date_data['count'],
                'status_Chưa_xử_lý' => $date_data['status']['Chưa xử lý'],
                'status_Đã_xử_lý' => $date_data['status']['Đã xử lý'],
            ];
        }
    
        return response()->json($flattened_data);
    }
    public function dayrevenue1(Request $request){
        $sub60days = Carbon::now('Asia/Ho_Chi_Minh')->subDays(60)->toDateString();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $tickets = Ticket::whereBetween('date',[$sub60days,$now])->orderBy('date','ASC')->get();
         
        $chart_data1 = [];
        $chart_data1 = $tickets->groupBy('date')->map(function ($items) {
            return [
                'date' => $items->first()->date,
                'quantity' => $items->sum('quantity'),
                'total_price' => $items->sum('total_price'),
            ];
        })->values()->all();
          return response()->json($chart_data1);
        echo $data = json_encode($chart_data1);
 
    }
    public function dayrevenue2(Request $request){
        $userId = Auth::id();
        $passengerCar = PassengerCar::where('user_id', $userId)->get();
        $tickets = collect();
        $sub60days = Carbon::now('Asia/Ho_Chi_Minh')->subDays(30)->toDateString();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        foreach ($passengerCar as $car) {
            $carTickets = $car->tickets()->whereBetween('date', [$sub60days, $now])->orderBy('date', 'ASC')->get();
            $tickets = $tickets->merge($carTickets);
        }
        $chart_data2 = [];
        $chart_data2 = $tickets->groupBy('date')->map(function ($items) {
            return [
                'date' => $items->first()->date,
                'quantity' => $items->sum('quantity'),
                'total_price' => $items->sum('total_price'),
            ];
        })->values()->all();
          return response()->json($chart_data2);
        echo $data = json_encode($chart_data2);

    }
    public function dayrevenue3(Request $request){
        $userId = Auth::id();
        $passengerCar = PassengerCar::where('user_id', $userId)->get();
        $tickets = collect();
        $sub60days = Carbon::now('Asia/Ho_Chi_Minh')->subDays(30)->toDateString();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        foreach ($passengerCar as $car) {
            $carTickets = $car->tickets()->whereBetween('date', [$sub60days, $now])->orderBy('date', 'ASC')->get();
            $tickets = $tickets->merge($carTickets);
        }
        $chart_data3 = [];
        $chart_data3 = $tickets->groupBy('date')->map(function ($items) {
            return [
                'date' => $items->first()->date,
                'quantity' => $items->sum('quantity'),
                'total_price' => $items->sum('total_price'),
            ];
        })->values()->all();
          return response()->json($chart_data3);
        echo $data = json_encode($chart_data3);

    }
}
