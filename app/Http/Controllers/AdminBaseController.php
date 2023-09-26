<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\Request;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;

class AdminBaseController extends Controller
{
    /**
     * @var Builder $model
     */
    public $model;
    public $pathView;
    public $urlbase;
    public $fieldImage;
    public $folderImage;
    public $colums = [];
    public $titleIndex;
    public $titleCreate;
    public $titleShow;
    public $titleEdit;

    /**
     * @throws BindingResolutionException
     */
    public function __construct()
    {
        $this->model = app()->make($this->model);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->model->paginate(5);

        return view($this->pathView . __FUNCTION__, compact('data'))
            ->with('title', $this->titleIndex)
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
        $validator = $this->validateStore($request);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $model = new $this->model;

        $model->fill($request->except([$this->fieldImage]));

        if ($request->hasFile($this->fieldImage)) {
            $tmpPath = Storage::put($this->folderImage, $request->{$this->fieldImage});

            $model->{$this->fieldImage} = 'storage/' . $tmpPath;
        }

        $model->save();

        return back()->with('success', 'Thao tac thanh cong');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model = $this->model->findOrFail($id);

        return view($this->pathView . __FUNCTION__, compact('model'))
            ->with('title', $this->titleShow)
            ->with('colums', $this->colums)
            ->with('urlbase', $this->urlbase);
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
        $validator = $this->validateUpdate($request);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $model = $this->model->findOrFail($id);

        $model->fill($request->except([$this->fieldImage]));

        if ($request->hasFile($this->fieldImage)) {
            $oldImage = $model->{$this->fieldImage};

            $tmpPath = Storage::put($this->folderImage, $request->{$this->fieldImage});

            $model->{$this->fieldImage} = 'storage/' . $tmpPath;
        }

        $model->save();

        if ($request->hasFile($this->fieldImage)) {
            $oldImage = str_replace('storage/', '', $oldImage);
            Storage::delete($oldImage);
        }

        return back()->with('success', 'Thao tac thanh cong');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = $this->model->findOrFail($id);

        $model->delete();

        if (Storage::exists($model->{$this->fieldImage})) {
            $image = str_replace('storage/', '', $model->{$this->fieldImage});
            Storage::delete($image);
        }
    }

}
