<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PassengerCar;
use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\PDF;
 
class RevenueAdminController extends Controller
{



    public function index(Request $request)
    {
        return view('admin.pages.revenue.index');
    }

    public function filter_by_date(Request $request)
    {
        $data = $request->all();
        $form_date = $data['form_date'];
        $to_date = $data['to_date'];
    
        $tickets = Ticket::whereBetween('date', [$form_date, $to_date])->orderBy('date', 'ASC')->get();
        $chart_data = $tickets->groupBy('date')->map(function ($items) {
            return [
                'date' => $items->first()->date,
                'quantity' => $items->sum('quantity'),
                'total_price' => $items->sum('total_price'),
            ];
        })->values()->all();
    
        // Tạo một đối tượng PDF
        $pdf = PDF::loadView('your_view', compact('chart_data'));
        
        // Lưu file PDF
        $pdf->save('revenue_report.pdf');
        
        // Trả về file PDF để tải xuống
        return response()->download('revenue_report.pdf')->deleteFileAfterSend();
    }
    
    public function filter_by_select(Request $request)
    {
        $data = $request->all();
        // ...
        // (Các đoạn mã xử lý khác trong hàm filter_by_select)
        $dauthangnay = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
        $dau_thangtruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
        $cuoi_thangtruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();
        $sub7days = Carbon::now('Asia/Ho_Chi_Minh')->subDays(7)->toDateString();
        $sub365days = Carbon::now('Asia/Ho_Chi_Minh')->subDays(365)->toDateString();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
 
        if($data['dashboard_value'] == '7ngay'){
         $tickets = Ticket::whereBetween('date',[$sub7days,$now])->orderBy('date','ASC')->get();
        }elseif($data['dashboard_value'] == 'thangtruoc'){
         $tickets = Ticket::whereBetween('date',[$dau_thangtruoc,$cuoi_thangtruoc])->orderBy('date','ASC')->get();
        }elseif($data['dashboard_value'] == 'thangnay'){
         $tickets = Ticket::whereBetween('date',[$dauthangnay,$now])->orderBy('date','ASC')->get();
        }else{
         $tickets = Ticket::whereBetween('date',[$sub365days,$now])->orderBy('date','ASC')->get();
        }
 
        $chart_data = [];
        $chart_data = $tickets->groupBy('date')->map(function ($items) {
            return [
                'date' => $items->first()->date,
                'quantity' => $items->sum('quantity'),
                'total_price' => $items->sum('total_price'),
            ];
        })->values()->all();
          return response()->json($chart_data);
        echo $data = json_encode($chart_data);
    
        // Tạo một đối tượng PDF
        $pdf = PDF::loadView('your_view', compact('chart_data'));
        
        // Lưu file PDF
        $pdf->save('revenue_report.pdf');
        
        // Trả về file PDF để tải xuống
        return response()->download('revenue_report.pdf')->deleteFileAfterSend();
    }
    
    // public function dayrevenue(Request $request)
    // {
    //     $sub60days = Carbon::now('Asia/Ho_Chi_Minh')->subDays(60)->toDateString();
    //     $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
    //     $tickets = Ticket::whereBetween('date', [$sub60days, $now])->orderBy('date', 'ASC')->get();
    
    //     $chart_data = [];
    //     $chart_data = $tickets->groupBy('date')->map(function ($items) {
    //         return [
    //             'date' => $items->first()->date,
    //             'quantity' => $items->sum('quantity'),
    //             'total_price' => $items->sum('total_price'),
    //         ];
    //     })->values()->all();
    
    //     // Tạo một đối tượng PDF
    //     $pdf = PDF::loadView('your_view', compact('chart_data'));
        
    //     // Lưu file PDF
    //     $pdf->save('revenue_report.pdf');
        
    //     // Trả về file PDF để tải xuống
    //     return response()->download('revenue_report.pdf')->deleteFileAfterSend();
    // }















    // public function filter_by_date(Request $request){
    //     $data = $request->all();
    //     $form_date = $data['form_date'];
    //     $to_date = $data['to_date'];

    //     $tickets = Ticket::whereBetween('date',[$form_date,$to_date])->orderBy('date','ASC')->get();
    //     $chart_data = [];
    //     $chart_data = $tickets->groupBy('date')->map(function ($items) {
    //         return [
    //             'date' => $items->first()->date,
    //             'quantity' => $items->sum('quantity'),
    //             'total_price' => $items->sum('total_price'),
    //         ];
    //     })->values()->all();
    //       return response()->json($chart_data);
    //     echo $data = json_encode($chart_data);;
    // }
    
    // public function filter_by_select(Request $request){
    //    $data = $request->all();
    // //    echo $today = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s');
    //    $dauthangnay = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
    //    $dau_thangtruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
    //    $cuoi_thangtruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();
    //    $sub7days = Carbon::now('Asia/Ho_Chi_Minh')->subDays(7)->toDateString();
    //    $sub365days = Carbon::now('Asia/Ho_Chi_Minh')->subDays(365)->toDateString();
    //    $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

    //    if($data['dashboard_value'] == '7ngay'){
    //     $tickets = Ticket::whereBetween('date',[$sub7days,$now])->orderBy('date','ASC')->get();
    //    }elseif($data['dashboard_value'] == 'thangtruoc'){
    //     $tickets = Ticket::whereBetween('date',[$dau_thangtruoc,$cuoi_thangtruoc])->orderBy('date','ASC')->get();
    //    }elseif($data['dashboard_value'] == 'thangnay'){
    //     $tickets = Ticket::whereBetween('date',[$dauthangnay,$now])->orderBy('date','ASC')->get();
    //    }else{
    //     $tickets = Ticket::whereBetween('date',[$sub365days,$now])->orderBy('date','ASC')->get();
    //    }

    //    $chart_data = [];
    //    $chart_data = $tickets->groupBy('date')->map(function ($items) {
    //        return [
    //            'date' => $items->first()->date,
    //            'quantity' => $items->sum('quantity'),
    //            'total_price' => $items->sum('total_price'),
    //        ];
    //    })->values()->all();
    //      return response()->json($chart_data);
    //    echo $data = json_encode($chart_data);

    // }
    public function dayrevenue(Request $request){
       $sub60days = Carbon::now('Asia/Ho_Chi_Minh')->subDays(60)->toDateString();
       $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
       $tickets = Ticket::whereBetween('date',[$sub60days,$now])->orderBy('date','ASC')->get();
        
       $chart_data = [];
       $chart_data = $tickets->groupBy('date')->map(function ($items) {
           return [
               'date' => $items->first()->date,
               'quantity' => $items->sum('quantity'),
               'total_price' => $items->sum('total_price'),
           ];
       })->values()->all();
         return response()->json($chart_data);
       echo $data = json_encode($chart_data);
       $pdf = PDF::loadView('your_view', compact('chart_data'));
    
       // Lưu file PDF
       $pdf->save('revenue_report.pdf');
       
       // Trả về file PDF để tải xuống
       return response()->download('revenue_report.pdf')->deleteFileAfterSend();

    }


}