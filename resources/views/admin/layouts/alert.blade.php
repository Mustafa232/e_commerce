@if(session()->has('flash_message'))
<div class="alert alert-success">
	{{ session()->get('flash_message') }}
</div>
@endif

@if(session()->has('error_message'))
<div class="alert alert-danger">
	{{ session()->get('error_message') }}
</div>
@endif