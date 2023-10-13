<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use App\Http\Controllers\Controller;
use App\Models\PassengerCar;
use Illuminate\Http\Request;

class PassengerCarController extends AdminBaseController
{
    public $model = PassengerCar::class;
    public $pathView = 'admin.pages.car.';
    public $urlbase = 'admin.car.';
    public $fieldImage = 'ticket';
    public $urlIndex = 'ticket.index';
    public $folderImage = 'car/image';
    public $titleIndex = 'Danh sách xe';
    public $titleCreate = 'Thêm mới xe';
    public $titleShow = 'Xem chi tiết xe';
    public $titleEdit = 'Cập nhật xe';
    public $colums = [
        'license_plate' => 'Biển số',
        'capacity' => 'Số gế',
        'price' => 'Giá vé',
        'user' => 'Nhà xe',
        'route' => 'Tuyến đường',
        'action' => 'Thao tác',
    ];

}
