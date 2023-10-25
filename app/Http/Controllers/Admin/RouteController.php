<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use App\Http\Controllers\Controller;
use App\Models\Stops;
use Illuminate\Http\Request;
use App\Models\Routes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RouteController extends AdminBaseController
{
    public $model = Routes::class;
    public $pathView = 'admin.pages.route.';
    public $urlbase = 'admin.route.';
    public $fieldImage = 'route';
    public $urlIndex = 'route.index';
    public $folderImage = 'categories/image';
    public $titleIndex = 'Danh sách tuyến đường';
    public $titleCreate = 'Thêm mới';
    public $titleShow = 'Xem chi tiết';
    public $titleEdit = 'Cập nhật';


    public function index(Request $request)
    {
        parent::index($request);
        $data = Stops::where('user_id', Auth::user()->id)
            ->join('routes', 'stops.route_id', '=', 'routes.id')
            ->select('routes.departure', 'routes.arrival')
            ->distinct()
            ->paginate(10);
        return view($this->pathView . __FUNCTION__, compact('data'))
            ->with('title', $this->titleIndex)
            ->with('colums', $this->colums)
            ->with('urlbase', $this->urlbase)
            ->with('titleCreate', $this->titleCreate);
    }


}
