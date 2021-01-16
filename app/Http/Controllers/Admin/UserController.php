<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User as userRequest;
use DataTables;
use App\User;

class UserController extends Controller
{
    public function index()
    {
    	return view('admin.user.index');
    }

    public function create()
    {
    	return view('admin.user.create');
    }

    public function store(userRequest $request)
    {
    	User::create($request->all());
    	return redirect(route('user.index'))->withFlashMessage(trans('admin.created'));
    }

    public function edit($id)
    {
    	$user = User::findOrFail($id);
    	return view('admin.user.edit', compact('user'));
    }

    public function update($id, userRequest $request)
    {
    	$user = User::findOrFail($id);
    	$user->update($request->all());
    	return redirect(route('user.index'))->withFlashMessage(trans('admin.updated'));
    }

    public function show($id)
    {
    	$user = User::findOrFail($id);
    	return view('admin.user.show', compact('user'));
    }

    public function destroy($id)
    {
    	$user = User::findOrFail($id);
    	if ($id != 1) {
    		$user->delete();
    	}
    	return redirect(route('user.index'))->withFlashMessage(trans('admin.deleted'));
    }

    public function confirmation($id, Request $request)
    {
    	$user = User::findOrFail($id);
    	return view('admin.user.delete', compact('user'));
    }

    public function password($id, Request $request)
    {
    	$request->validate(['password' => 'required|string|min:6']);
    	$user = User::findOrFail($id);
    	$user->update(['password' => $request->password]);
    	return redirect()->back()->withFlashMessage(trans('admin.updated'));
    }

//Ajax functions
    public function loadData(User $users)
    {
    	$users = User::all();
    	return DataTables::of($users)
    	->rawColumns(['action'])
    	->editColumn('action', function ($model)
    	{
    		$edit = editBtn(route('user.edit', $model->id));
    		$delete = deleteBtn(route('user.delete', $model->id));
    		$show = showBtn(route('user.show', $model->id));
    		return $edit . ' ' . $show . ' ' . $delete;
    	})
    	->make('true');
    }
}
