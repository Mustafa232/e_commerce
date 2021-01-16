@include('admin.layouts.header')
@include('admin.layouts.menu')
@include('admin.layouts.sidebar')
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<div class="content-header">
  		@yield('content-header')
  	</div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
    	@include('admin.layouts.alert')
    	@yield('content')
    	</section>
  	</div>
  	<!-- /.content-wrapper -->
@include('admin.layouts.footer')
