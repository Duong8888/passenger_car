<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use App\Http\Controllers\Controller;
use App\Models\Stops;
use App\Models\VietnameseProvinces;
use Illuminate\Http\Request;
use App\Models\Routes;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RouteController extends AdminBaseController
{
    public $model = Routes::class;
    public $pathView = 'admin.pages.route.';
    public $urlbase = 'admin.route.';
    public $fieldImage = 'route';
    public $urlIndex = 'route.index';
    public $folderImage = 'categories/image';
    public $titleIndex = 'Danh sách tuyến đường';
    public $titleCreate = 'Thêm mới tuyến đường';
    public $titleShow = 'Xem chi tiết';
    public $titleEdit = 'Cập nhật';


    public function index(Request $request)
    {
        parent::index($request);
        $dataRoute = VietnameseProvinces::all();
        $data = Stops::where('user_id', Auth::user()->id)
            ->join('routes', 'stops.route_id', '=', 'routes.id')
            ->select('routes.departure', 'routes.arrival')
            ->distinct()
            ->paginate(10);
        return view($this->pathView . __FUNCTION__, compact('data', 'dataRoute'))
            ->with('title', $this->titleIndex)
            ->with('colums', $this->colums)
            ->with('urlbase', $this->urlbase)
            ->with('titleCreate', $this->titleCreate);
    }

    public function store(Request $request)
    {
//        return parent::store($request); // TODO: Change the autogenerated stub
        $departure = $request->input('route-departure');
        $arrival = $request->input('route-arrival');
        $departureArr = $request->input('departure');
        $arrivalArr = $request->input('arrival');
        $stops = new Stops();
        $route = Routes::where('departure', $departure)
            ->where('arrival', $arrival)
            ->first();
        if (!$route) {
            $slug = Str::slug($departure . " đi " . $arrival);
            $route = Routes::create([
                'slug' => $slug,
                'departure' => $departure,
                'arrival' => $arrival,
                'price' => '0',
            ]);
        }

        foreach ($arrivalArr as $key => $value){
            $stops->stop_name = $value;
            $stops->stop_type = 1;
            $stops->route_id = $route->id;
            $stops->user_id = Auth::user()->id;
            $stops->order = $key;
            $stops->save();
        }
        foreach ($departureArr as $key => $value) {
            $stops->stop_name = $value;
            $stops->stop_type = 0;
            $stops->route_id = $route->id;
            $stops->user_id = Auth::user()->id;
            $stops->order = $key;
            $stops->save();
        }
        return back();
    }

}
