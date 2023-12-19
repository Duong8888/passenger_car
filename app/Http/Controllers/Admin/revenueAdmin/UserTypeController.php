<?php

namespace App\Http\Controllers\Admin\revenueAdmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserTypeController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.pages.revenue.usertype');
    }

    public function filter_by_date(Request $request){
        $data = $request->all();
        $form_date = $data['form_date'];
        $to_date = Carbon::parse($data['to_date'])->addDay()->toDateString();
        $tickets = User::whereBetween('created_at', [$form_date, $to_date])->orderBy('created_at', 'ASC')->get();
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
    
    public function filter_by_select(Request $request){
       $data = $request->all();
    //    echo $today = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s');
       $dauthangnay = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
       $dau_thangtruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
       $cuoi_thangtruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();
       $sub7days = Carbon::now('Asia/Ho_Chi_Minh')->subDays(7)->toDateString();
       $sub365days = Carbon::now('Asia/Ho_Chi_Minh')->subDays(365)->toDateString();
       $now = Carbon::tomorrow('Asia/Ho_Chi_Minh')->toDateString();

       if($data['dashboard_value'] == '7ngay'){
        $tickets = User::whereBetween('created_at', [$sub7days, $now])->orderBy('created_at', 'ASC')->get();
       }elseif($data['dashboard_value'] == 'thangtruoc'){
        $tickets = User::whereBetween('created_at', [$dau_thangtruoc, $cuoi_thangtruoc])->orderBy('created_at', 'ASC')->get();
       }elseif($data['dashboard_value'] == 'thangnay'){
        $tickets = User::whereBetween('created_at', [$dauthangnay, $now])->orderBy('created_at', 'ASC')->get();
       }else{
        $tickets = User::whereBetween('created_at', [$sub365days, $now])->orderBy('created_at', 'ASC')->get();
       }
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
    public function dayrevenue(Request $request)
    {
        $sub60days = Carbon::now('Asia/Ho_Chi_Minh')->subDays(30)->toDateString();
        $now = Carbon::tomorrow('Asia/Ho_Chi_Minh')->toDateString();
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
}