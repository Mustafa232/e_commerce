<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Brand as modelRequest;
use DataTables;
use App\Brand as model;

class BrandController extends Controller
{
    private $view = 'admin.brand.';
	private $route = 'brand.';

    public function index()
    {
    	return view($this->view . 'index');
    }

    public function create()
    {
    	return view($this->view . 'create');
    }

    public function store(modelRequest $request)
    {
    	model::create($this->getInput($request));
    	return redirect(route($this->route . 'index'))->withFlashMessage(trans('admin.created'));
    }

    public function edit($id)
    {
    	$brand = model::findOrFail($id);
    	return view($this->view . 'edit', compact('brand'));
    }

    public function update($id, modelRequest $request)
    {
    	$brand = model::findOrFail($id);
    	$brand->update($this->getInput($request));
    	return redirect(route($this->route . 'index'))->withFlashMessage(trans('admin.updated'));
    }

    public function show($id)
    {
    	$brand = model::findOrFail($id);
    	return view($this->view . 'show', compact('brand'));
    }

    public function destroy($id)
    {
    	$brand = model::findOrFail($id)->delete();
    	
    	return redirect(route($this->route . 'index'))->withFlashMessage(trans('admin.deleted'));
    }

    public function confirmation($id, Request $request)
    {
    	$brand = model::findOrFail($id);
    	return view($this->view . 'delete', compact('brand'));
    }

    private function getInput($request)
    {
    	$input = $request->only(['name', 'description', 'status']);
    	$input['slug'] = str_slug($input['name']);
    	if ($request->image != null) {
    		$input['image'] = upload()->singleImage('image');
    	}
    	return $input;
    }

//Ajax functions
    public function loadData(model $brands)
    {
    	$brands = model::all();
    	return DataTables::of($brands)
    	->rawColumns(['action', 'image'])
    	->editColumn('image', function ($model)
    	{
    		
    		return showImage($model->photo);
    	})

    	->editColumn('action', function ($model)
    	{
    		$edit = editBtn(route($this->route . 'edit', $model->id));
    		$delete = deleteBtn(route($this->route . 'delete', $model->id));
    		$show = showBtn(route($this->route . 'show', $model->id));
    		return $edit . ' ' . $show . ' ' . $delete;
    	})
    	->make('true');
    }
}
