<?php

class HomeController extends BaseController {

	protected $layout = 'layouts.home';
	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


	public function getIndex()
	{
		$this->layout->content = View::make('home.index');
	}

	public function getAbout()
	{
		$this->layout->content = View::make('home.about');
	}

	public function getView($input)
	{
		$this->layout->content = View::make('home.'.$input);
	}

}