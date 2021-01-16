<?php
namespace App\Libs;

	class Upload{
		public function singleImage($name, $path = null)
		{
			$filename = '';
			$path = $path == null ? $this->makePath() : $path;
			if (request()->hasFile($name)) {
				$filename = request()->file($name)->store($path);
			}
			return $filename;
		}

		public function makePath($type = 'image')
		{
			$year = date("Y");
			$mon = date("m");
			$day = date("d");
			return $type . '/' . $year . '/' .  $mon . '/' .  $day;
		}
	}