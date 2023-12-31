<?php

namespace App\Http\Controllers;

use App\Models\Firebase;
use App\Models\Routes;
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
    public $urlIndex;

    protected $firebase;
    /**
     * @throws BindingResolutionException
     */
    public function __construct(Firebase $firebase = null)
    {
        $this->firebase = $firebase;
        $this->model = app()->make($this->model);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = $this->model->orderBy('id','desc')->paginate(10);

        return view($this->pathView . __FUNCTION__, compact('data'))
            ->with('title', $this->titleIndex)
            ->with('colums', $this->colums)
            ->with('urlbase', $this->urlbase)
            ->with('titleCreate', $this->titleCreate);
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
            $request->images = $request->{$this->fieldImage};
            $url_image = $this->firebase->updateImageSingle($request);
            $model->{$this->fieldImage} = $url_image;
        }

        $model->save();

        return redirect()->route($this->urlIndex)->with('success', 'Created Successfully');
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

        $model = $this->model->findOrFail($id);

        $model->fill($request->except([$this->fieldImage]));

        if ($request->hasFile($this->fieldImage)) {
            $request->images = $request->{$this->fieldImage};
            $url_image = $this->firebase->updateImageSingle($request);
            $model->{$this->fieldImage} = $url_image;
        }

        $model->save();

        return to_route($this->urlIndex)->with('success', 'Edited Successfully!');
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
        return to_route($this->urlIndex)->with('success', 'Delete Successfully!');
    }

    public function moveFileImage($request){
        if ($request->hasFile('photo')) {

            $image      = $request->file('photo');
            $image_name = time() . '.' . $image->extension();

            $image = Image::make($request->file('photo'))
                ->resize(120, 120, function ($constraint) {
                    $constraint->aspectRatio();
                });

            //here you can define any directory name whatever you want, if dir is not exist it will created automatically.
            Storage::putFileAs('public/images/1/smalls/' . $image_name, (string)$image->encode('png', 95), $image_name);
        }
    }

}
