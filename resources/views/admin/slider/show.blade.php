@extends('admin.layouts.master')

@section('title')
	{{ trans('admin.show', ['name' => trans('admin.slider')]) }}
@endsection

@section('content-header')
  <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ trans('admin.show', ['name' => trans('admin.slider')]) }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item active">{{ trans('admin.show', ['name' => trans('admin.slider')]) }}</li>
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
                <h3 class="card-title">{{ trans('admin.show', ['name' => trans('admin.slider')]) }}</h3>
              </div>
              <!-- /.card-header -->
              
              	<div class="card-body">
                  <table id="data-get" class="table table-bordered table-striped">
                  
                  <tbody>
                    <tr>
                      <th>{{ trans('admin.id') }}</th>
                      <td>{{ $slider->id }}</td>
                    </tr>
                    <tr>
                      <th>{{ trans('admin.title') }}</th>
                      <td>{{ $slider->title }}</td>
                    </tr>
                    
                    
                    @if($slider->image != null)
                    <tr>
                      <th>{{ trans('admin.image') }}</th>
                      <td><img src="{{ $slider->photo }}" style="width: 150px; height: 150px;"></td>
                    </tr>
                    @endif
                    
                    <tr>
                      <th>{{ trans('admin.action') }}</th>
                      <td>{!! editBtn(route('slider.edit', $slider->id)) . ' ' . deleteBtn(route('slider.delete', $slider->id)) !!}</td>
                    </tr>
                  </tbody>
                  
                </table>
                </div>
            </div>
            <!-- /.card -->

            

          </div>
      </div>
@endsection