@extends('admin.layouts.master')

@section('title')
	{{ trans('admin.pages') }}
@endsection

@section('content-header')
  <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ trans('admin.page') }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item active">{{ trans('admin.page') }}</li>
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
                <h3 class="card-title">{{ trans('admin.pages') }} | <a href="{{ route('page.create') }}">{{ trans('admin.create', ['name' => trans('admin.page')]) }}</a></h3>
              </div>
              <!-- /.card-header -->
              
            

              
              <div class="card-body">
                <table id="data-get" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>{{ trans('admin.id') }}</th>
                    <th>{{ trans('admin.title') }}</th>
                    <th>{{ trans('admin.slug') }}</th>
                    <th>{{ trans('admin.action') }}</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>{{ trans('admin.id') }}</th>
                    <th>{{ trans('admin.title') }}</th>
                    <th>{{ trans('admin.slug') }}</th>
                    <th>{{ trans('admin.action') }}</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
          
              
            </div>
            <!-- /.card -->

            

          </div>
          <!-- /.col -->
      </div>
@endsection

@section('script')
  <script>
  $(function () {
    
    $('#data-get').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
      "processing": true,
        "serverSide": true,
        "ajax": "{{ route('admin.page.data') }}",
        "columns": [
            { "data": "id", "name" : "id" },
            { "data": "title", "name" : "title" },
            { "data": "slug", "name" : "slug" },
            { "data": "action", "name" : "" },
        ]
    });
  });
</script>
@endsection