<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\AdminBaseController;
use App\Http\Controllers\Controller;
use App\Models\Stops;
use Illuminate\Http\Request;

class StopsController extends AdminBaseController
{
    /**
     * Display a listing of the resource.
     */

    /**
     * Show the form for creating a new resource.
     */
    public $model = Stops::class;
    public $pathView = 'admin.pages.stops.';
    public $urlbase = 'admin.stops.';
    public $urlIndex = 'stop.index';
    public $titleIndex = 'Danh sách điểm dừng';
    public $titleCreate = 'Thêm mới điểm dừng';
    public $titleEdit = 'Cập nhật điểm dừng';
    public $colums = [
        'stop_name' => 'Tên điểm dừng',
        'stop_type' => 'loại điểm dừng',
        'route_id' => 'tuyến đường',
        'user_id' => 'người đi',
    ];

    public function index(Request $request)
    {
        $stops = $this->model->with('route')->paginate(1000);
        //  return response()->json($stops, 200, [], JSON_PRETTY_PRINT);

        return view($this->pathView . 'index', compact('stops'))
            ->with('title', 'Danh sách điểm dừng')
            ->with('colums', $this->colums)
            ->with('urlbase', $this->urlbase);
    }
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
