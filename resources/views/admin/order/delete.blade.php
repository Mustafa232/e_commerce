@extends('admin.layouts.master')

@section('title')
	{{ trans('admin.delete', ['name' => trans('admin.order')]) }}
@endsection

@section('content-header')
  <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ trans('admin.delete', ['name' => trans('admin.order')]) }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item active">{{ trans('admin.delete', ['name' => trans('admin.order')]) }}</li>
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
                <h3 class="card-title">{{ trans('admin.delete', ['name' => trans('admin.order')]) }}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="center-block">
                    <div class="card card-danger">
                      <div class="card-header">
                        {{ trans('admin.del', ['id' => $order->id]) }}
                      </div>
                      <div class="card-body">
                        <p>{{ trans('admin.delMsg') }}</p>
                        {!!
                Form::open([
                  'url' => route('order.destroy', $order->id),
                  'method' => 'DELETE',
                ])
                !!}
</div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">{{ trans('admin.yes') }}</button>
                  <a href="{{ route('order.index') }}" class=" btn btn-default">{{ trans('admin.cancel') }}</a>
                </div>

                {!! Form::close() !!}
                      </div>
                    </div>
                  </div>
                  </div>
                  <!-- /.card -->
            </div>
            

            

          </div>
      
@endsection