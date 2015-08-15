<?php

class LookbookController extends BaseController {

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

	public function index()
	{
		
		$isMobile=Agent::isMobile();
		//$isMobile=true;

		if ($isMobile){
			return View::make('mobile/lookbook');
		}
		else{
			return View::make('desktop/lookbook');
		}
		
	}

	public function detail($idLook)
	{
		$isMobile=Agent::isMobile();
		//$isMobile=true;

		if ($isMobile){
			return View::make('mobile/lookbook-detail');
		}
		else{
			return View::make('desktop/lookbook-detail');
		}


	}

	
}
