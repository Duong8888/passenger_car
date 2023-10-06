<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicesController extends AdminBaseController
{
    /**
     * Display a listing of the resource.
     */
    public $model = Service::class;
    public $pathView = 'admin.pages.services.';
    public $urlbase = 'admin.services.';
    public $titleIndex = 'Danh sách dịch vụ';
    public $titleCreate = 'Thêm mới dịch vụ';
    public $titleEdit = 'Cập nhật dịch vụ';
    public $colums = [
        'service_name' => 'Tên dịch vụ',
    ];


    public function index()
    {
        // Lấy danh sách dịch vụ
        $services = $this->model->paginate(5);

        return view($this->pathView . 'index', compact('services'))
            ->with('title', 'Danh sách dịch vụ')
            ->with('colums', $this->colums)
            ->with('urlbase', $this->urlbase);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->pathView . __FUNCTION__)
            ->with('title', $this->titleCreate)
            ->with('colums', $this->colums)
            ->with('urlbase', $this->urlbase);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'sericename' => 'required|max:50',
        ], [
            'sericename.required' => 'Tên dịch vụ là trường bắt buộc.',
            'sericename.max' => 'Tên dịch vụ không được vượt quá 50 ký tự.',
        ]);
        $service = new $this->model;
        $service->service_name = $request->input('sericename');
        $service->save();

        return to_route('service.index')->with('success', 'Created Successfully');
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
        $model = $this->model->findOrFail($id);

        return view($this->pathView . __FUNCTION__, compact('model'))
            ->with('title', $this->titleEdit)
            ->with('colums', $this->colums)
            ->with('urlbase', $this->urlbase);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'sericename' => 'required|max:50',
        ], [
            'sericename.required' => 'Tên dịch vụ là trường bắt buộc.',
            'sericename.max' => 'Tên dịch vụ không được vượt quá 50 ký tự.',
        ]);

        $model = $this->model->findOrFail($id);
        $model->service_name = $request->input('sericename');
        $model->save();

        return to_route('service.index')->with('success', 'Edited Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = $this->model->findOrFail($id);
        $model->delete();
        return to_route('service.index')->with('success', 'Delete Successfully');
    }
}
