@extends('admin.layouts.master')

@section('title')
	{{ trans('admin.show', ['name' => trans('admin.product')]) }}
@endsection

@section('content-header')
  <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ trans('admin.show', ['name' => trans('admin.product')]) }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item active">{{ trans('admin.show', ['name' => trans('admin.product')]) }}</li>
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
                <h3 class="card-title">{{ trans('admin.show', ['name' => trans('admin.product')]) }}</h3>
              </div>
              <!-- /.card-header -->
              
              	<div class="card-body">
                  <table id="data-get" class="table table-bordered table-striped">
                  
                  <tbody>
                    <tr>
                      <th>{{ trans('admin.id') }}</th>
                      <td>{{ $product->id }}</td>
                    </tr>
                    <tr>
                      <th>{{ trans('admin.name') }}</th>
                      <td>{{ $product->name }}</td>
                    </tr>
                    <tr>
                      <th>{{ trans('admin.slug') }}</th>
                      <td>{{ $product->slug }}</td>
                    </tr>
                    <tr>
                      <th>{{ trans('admin.user') }}</th>
                      <td>{{ $product->user->name }}</td>
                    </tr>
                    <tr>
                      <th>{{ trans('admin.category') }}</th>
                      <td>{{ $product->category->name }}</td>
                    </tr>
                    <tr>
                      <th>{{ trans('admin.brand') }}</th>
                      <td>{{ $product->brand->name }}</td>
                    </tr>
                    @if($product->image != null)
                    <tr>
                      <th>{{ trans('admin.image') }}</th>
                      <td><img src="{{ $product->photo }}" style="width: 150px; height: 150px;"></td>
                    </tr>
                    @endif
                    <tr>
                      <th>{{ trans('admin.details') }}</th>
                      <td>{!! $product->details !!}</td>
                    </tr>
                    <tr>
                      <th>{{ trans('admin.action') }}</th>
                      <td>{!! editBtn(route('product.edit', $product->id)) . ' ' . deleteBtn(route('product.delete', $product->id)) !!}</td>
                    </tr>
                  </tbody>
                  
                </table>
                </div>
            </div>
            <!-- /.card -->

            

          </div>
      </div>
@endsection