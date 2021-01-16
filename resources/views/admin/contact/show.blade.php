@extends('admin.layouts.master')

@section('title')
	{{ trans('admin.show', ['name' => trans('admin.contact')]) }}
@endsection

@section('content-header')
  <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ trans('admin.show', ['name' => trans('admin.contact')]) }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item active">{{ trans('admin.show', ['name' => trans('admin.contact')]) }}</li>
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
                <h3 class="card-title">{{ trans('admin.show', ['name' => trans('admin.contact')]) }}</h3>
              </div>
              <!-- /.card-header -->
              
              	<div class="card-body">
                  <table id="data-get" class="table table-bordered table-striped">
                  
                  <tbody>
                    <tr>
                      <th>{{ trans('admin.id') }}</th>
                      <td>{{ $contact->id }}</td>
                    </tr>
                    <tr>
                      <th>{{ trans('admin.name') }}</th>
                      <td>{{ $contact->name }}</td>
                    </tr>
                    <tr>
                      <th>{{ trans('admin.email') }}</th>
                      <td>{{ $contact->email }}</td>
                    </tr>
                    <tr>
                      <th>{{ trans('admin.phone') }}</th>
                      <td>{{ $contact->phone }}</td>
                    </tr>
                    <tr>
                      <th>{{ trans('admin.subject') }}</th>
                      <td>{{ $contact->subject }}</td>
                    </tr>
                    <tr>
                      <th>{{ trans('admin.message') }}</th>
                      <td>{{ $contact->message }}</td>
                    </tr>
                    <tr>
                      <th>{{ trans('admin.sent_at') }}</th>
                      <td>{{ $contact->created_at }}</td>
                    </tr>
                    <tr>
                      <th>{{ trans('admin.action') }}</th>
                      <td>{!! deleteBtn(route('contact.delete', $contact->id)) !!}</td>
                    </tr>
                  </tbody>
                  
                </table>
                </div>
            </div>
            <!-- /.card -->

            

          </div>
      </div>
@endsection