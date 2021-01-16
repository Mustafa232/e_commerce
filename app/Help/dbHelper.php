<?php
	// define
use \App\Setting as setting;
use \App\Contact as contact;
use \App\Order as order;

// functions
if (! function_exists('getSettings')) {
	function getSettings($name='site_title')
	{
		$setting = setting::where('name', $name)->first();
		return $setting == null ? $name : $setting->real_value;
	}
}

if (! function_exists('getContact')) {
	function getContact($type = 'data')
	{
		if ($type == 'data') {
			$contact = contact::where('status', 0)->orderBy('created_at', 'desc')->get();
		}else{
			$contact = contact::where('status', 0)->count();
		}
		return $contact;
	}
}

if (! function_exists('getOrder')) {
	function getOrder($type = 'data')
	{
		if ($type == 'data') {
			$order = order::where('seen', 0)->orderBy('created_at', 'desc')->get();
		}else{
			$order = order::where('seen', 0)->count();
		}
		return $order;
	}
}