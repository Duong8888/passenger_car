<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Routes;
use Illuminate\Support\Facades\Validator;

class RouteController extends AdminBaseController
{
    public $model = Routes::class;
    public $pathView = 'admin.pages.route.';
    public $urlbase = 'admin.routes.';
    public $fieldImage = 'route';
    public $urlIndex = 'route.index';
    public $folderImage = 'categories/image';
    public $titleIndex = 'Danh sách Danh mục';
    public $titleCreate = 'Thêm mới Danh mục';
    public $titleShow = 'Xem chi tiết danh mục';
    public $titleEdit = 'Cập nhật Danh mục';
    public function validateStore($request)
    {
        $validator = Validator::make($request->all(), [
            'slug' => 'required',

        ]);

        if ($validator->fails()) {
            return $validator;
        }
    }
}
