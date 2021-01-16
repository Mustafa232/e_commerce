@extends('admin.layouts.master')

@section('title')
	{{ trans('admin.show', ['name' => trans('admin.order')]) }}
@endsection

@section('content-header')
  <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ trans('admin.show', ['name' => trans('admin.order')]) }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item active">{{ trans('admin.show', ['name' => trans('admin.order')]) }}</li>
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
                <h3 class="card-title">{{ trans('admin.show', ['name' => trans('admin.order')]) }}</h3>
              </div>
              <!-- /.card-header -->
              
              	<div class="card-body">
                  <table id="data-get" class="table table-bordered table-striped">
                  
                  <tbody>
                    <tr>
                      <th>{{ trans('admin.id') }}</th>
                      <td>{{ $order->id }}</td>
                    </tr>
                    <tr>
                      <th>{{ trans('admin.user') }}</th>
                      <td>{{ $order->user->name }}</td>
                    </tr>
                    <tr>
                      <th>{{ trans('admin.address') }}</th>
                      <td>{{ $order->address }}</td>
                    </tr>
                    <tr>
                      <th>{{ trans('admin.total_price') }}</th>
                      <td>{{ $order->total_price }}</td>
                    </tr>
                    <tr>
                      <th>{{ trans('admin.currency') }}</th>
                      <td>{{ $order->currency }}</td>
                    </tr>
                    
                    <tr>
                      <th>{{ trans('admin.created_at') }}</th>
                      <td>{{ $order->created_at }}</td>
                    </tr>
                    <tr>
                      <th>{{ trans('admin.action') }}</th>
                      <td>{!! deleteBtn(route('order.delete', $order->id)) !!}</td>
                    </tr>
                    <tr class="text-center">
                      <td colspan="2">{{ trans('admin.order_details') }}</td>
                    </tr>
                    @foreach($order->orderDetails()->get() as $item)
                    <tr>
                      <th>{{ $item->product }}</th>
                      <td>{{ trans('admin.quantaty') }} : {{ $item->quantaty }} | {{ trans('admin.price') }} : {{ $item->price }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                  
                </table>

                {!!
                Form::model($order, [
                  'route' => ['order.update', $order->id],
                  'method' => 'PATCH',
                  'role' => 'form',
                ])
                !!}

                <div class="form-group">
                    <label for="{{ trans('admin.status') }}">{{ trans('admin.status') }}</label>
                      {!!
                Form::select('status', status(), null, [
                  'class' => 'form-control',
                  'placeholder' =>  trans('admin.status') ,
                ])
                !!}
                
                     @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
              </div>

              <button class="btn btn-primary">{{ trans('admin.submit') }}</button>

              {!! Form::close() !!}

                </div>
            </div>
            <!-- /.card -->

            

          </div>
      </div>
@endsection