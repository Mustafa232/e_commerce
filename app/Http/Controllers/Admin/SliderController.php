<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Slider as modelRequest;
use DataTables;
use App\Slider as model;

class SliderController extends Controller
{
    private $view = 'admin.slider.';
	private $route = 'slider.';

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
    	$slider = model::findOrFail($id);
    	return view($this->view . 'edit', compact('slider'));
    }

    public function update($id, modelRequest $request)
    {
    	$slider = model::findOrFail($id);
    	$slider->update($this->getInput($request));
    	return redirect(route($this->route . 'index'))->withFlashMessage(trans('admin.updated'));
    }

    public function show($id)
    {
    	$slider = model::findOrFail($id);
    	return view($this->view . 'show', compact('slider'));
    }

    public function destroy($id)
    {
    	$slider = model::findOrFail($id)->delete();
    	
    	return redirect(route($this->route . 'index'))->withFlashMessage(trans('admin.deleted'));
    }

    public function confirmation($id, Request $request)
    {
    	$slider = model::findOrFail($id);
    	return view($this->view . 'delete', compact('slider'));
    }

    private function getInput($request)
    {
    	$input = $request->only(['title']);
    	if ($request->image != null) {
    		$input['image'] = upload()->singleImage('image');
    	}
    	
    	return $input;
    }

//Ajax functions
    public function loadData(model $sliders)
    {
    	$sliders = model::all();
    	return DataTables::of($sliders)
    	->rawColumns(['action'])
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
