<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;
use App\Order as model;

class OrderController extends Controller
{
    private $view = 'admin.order.';
	private $route = 'order.';

    public function index()
    {
    	return view($this->view . 'index');
    }

    

    public function show($id)
    {
    	$order = model::findOrFail($id);
    	$order->update(['seen' => 1]);
    	return view($this->view . 'show', compact('order'));
    }

    public function update($id, Request $request)
    {
    	$status = $request->validate(['status' => 'required|boolean']);
    	$order = model::findOrFail($id);
    	$order->update($status);
    	return redirect()->back()->withFlashMessage(trans('admin.updated'));
    }

    public function destroy($id)
    {
    	$order = model::findOrFail($id)->delete();
    	
    	return redirect(route($this->route . 'index'))->withFlashMessage(trans('admin.deleted'));
    }

    public function confirmation($id, Request $request)
    {
    	$order = model::findOrFail($id);
    	return view($this->view . 'delete', compact('order'));
    }

    

//Ajax functions
    public function loadData(model $orders)
    {
    	$orders = model::all();
    	return DataTables::of($orders)
    	->rawColumns(['action'])
    	->editColumn('action', function ($model)
    	{
    		$delete = deleteBtn(route($this->route . 'delete', $model->id));
    		$show = showBtn(route($this->route . 'show', $model->id));
    		return $show . ' ' . $delete;
    	})
    	->make('true');
    }
}
