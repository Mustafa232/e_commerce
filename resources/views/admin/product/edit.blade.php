@extends('admin.layouts.master')

@section('title')
	{{ trans('admin.edit', ['name' => trans('admin.product')]) }}
@endsection

@section('content-header')
  <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ trans('admin.edit', ['name' => trans('admin.product')]) }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item active">{{ trans('admin.edit', ['name' => trans('admin.product')]) }}</li>
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
                <h3 class="card-title">{{ trans('admin.edit', ['name' => trans('admin.product')]) }}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <!-- form start -->
              {!!
              	Form::model($product, [
              		'route' => ['product.update', $product->id],
              		'method' => 'PATCH',
              		'role' => 'form',
                  'files' => true
              	])
              	!!}
                <input type="hidden" name="id" value="{{ $product->id }}">
              	
                  @include('admin.product.form')
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