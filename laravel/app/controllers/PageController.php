<?php

class PageController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Page Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showPage($page)
	{
		$viewTemplate = 'page.' . $page;
		if (!View::exists($viewTemplate)) {
			App::abort(404);
		}

    $data = array(
      'title' => 'HTML template',
    );

    $data['content'] = View::make($viewTemplate);
    return View::make('layout', $data);
	}

}
