@extends('admin.layouts.master')

@section('title')
	{{ trans('admin.edit', ['name' => trans('admin.user')]) }}
@endsection

@section('content-header')
  <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ trans('admin.edit', ['name' => trans('admin.user')]) }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item active">{{ trans('admin.edit', ['name' => trans('admin.user')]) }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection

@section('content')
	<div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{ trans('admin.edit', ['name' => trans('admin.user')]) }}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <!-- form start -->
              {!!
              	Form::model($user, [
              		'route' => ['user.update', $user->id],
              		'method' => 'PATCH',
              		'role' => 'form'
              	])
              	!!}
                <input type="hidden" name="id" value="{{ $user->id }}">
              	
                  @include('admin.user.form')
                  
              	
              </div>
              	<div class="card-footer">
                  <button type="submit" class="btn btn-primary">{{ trans('admin.submit') }}</button>
                </div>
              	{!! Form::close() !!}

                <hr>
                <div class="card-header">
                <h3 class="card-title">{{ trans('admin.editPass') }}</h3>
                </div>
                <div class="card-body">
                {!!
                Form::open([
                  'url' => route('user.password', $user->id),
                  'method' => 'PATCH',
                  'role' => 'form'
                ])
                !!}
                <div class="form-group">
                                   <label for="{{ trans('admin.password') }}">{{ trans('admin.password') }}</label>
                                          {!!
                     Form::password('password', [
                            'class' => 'form-control',
                            'placeholder' =>  trans('admin.password') ,
                            'required'
                     ])
                     !!}
                     
                     @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
              </div>
              </div>
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary">{{ trans('admin.submit') }}</button>
                </div>
                {!! Form::close() !!}
                
            </div>
            <!-- /.card -->

            

          </div>
      </div>
@endsection