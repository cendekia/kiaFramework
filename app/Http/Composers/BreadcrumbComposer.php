<?php

namespace App\Http\Composers;

use Illuminate\Support\Facades\Request;

class BreadCrumbComposer {

	public function __construct()
	{
		$this->path = Request::path();
	}

	/**
	 * Default method.
	 *
	 * @return Response
	 */
	public function compose($view)
	{
		$paths = explode('/', $this->path);
		$breadcrumbs = (object) [];
		$link = false;

		foreach ($paths as $index => $path) {
			$breadcrumbs->{$path}['name'] = $path;
			$link = ( $link ) ? $link.'/'.$path : '/'.$path;
			$breadcrumbs->{$path}['link'] = ( count($paths) == ($index+1) ) ? '#' : $link;
			$breadcrumbs->{$path}['alias'] = ucwords(str_replace('-', ' ', $path));
		}

		$view->with('breadcrumbs', $breadcrumbs);
	}

}