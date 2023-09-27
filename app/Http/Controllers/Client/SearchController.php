<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Routes;
use App\Models\Stops;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Tìm kiếm tuyến đường theo điểm đến hoặc điểm trả
        $routes = Routes::search($query)->get();

        // Tìm kiếm điểm dừng theo điểm đến hoặc điểm trả
        $stops = Stops::search($query)->get();

        return response()->json(['route' => $routes, 'stops' => $stops]);
    }
}
