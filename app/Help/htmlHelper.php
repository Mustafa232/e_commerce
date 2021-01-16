<?php
	if (! function_exists('editBtn')) {
	function editBtn($url)
	{
		return '<a href="'.$url.'" class="btn btn-primary"><i class="fa fa-edit"></i></a>';
	}
}

if (! function_exists('deleteBtn')) {
	function deleteBtn($url)
	{
		return '<a href="'.$url.'" class="btn btn-danger"><i class="fa fa-trash"></i></a>';
	}
}

if (! function_exists('showBtn')) {
	function showBtn($url)
	{
		return '<a href="'.$url.'" class="btn btn-info"><i class="fa fa-eye"></i></a>';
	}
}

if (! function_exists('showStatus')) {
	function showStatus($val)
	{
		$text = $val ? trans('active') : trans('inactive');
		$class = $val ? 'success' : 'danger';
		return '<span class="label label-'. $class . '">'. $text . '</span>';
	}
}

if (! function_exists('showImage')) {
	function showImage($link, $width = '100px', $height = '100px')
	{
		
		return '<img src="'. $link . '" style="width: '.$width.'; height: '.$height.'" />';
	}
}