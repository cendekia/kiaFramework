<?php

namespace App\Http\Composers;

use App\Models\Page;

class NavigationComposer {

	public function __construct(Page $page)
	{
		$this->page = $page;
	}

	/**
	 * Default method.
	 *
	 * @return Response
	 */
	public function compose($view)
	{
		$view->with('menus', $this->page->all());
	}

}