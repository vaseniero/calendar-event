<?php

class HomeController extends BaseController {

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

	/*
		Home page
	*/
	public function home()
	{		
		return View::make('Home');
	}

	public function addEvent(Request $request)
	{
		if(Events::get()->count() > 0) {
			Events::truncate();
		}

		$data = new Events;

		$data->title = $request->title;
		$data->dte_From = date('Y-m-d', strtotime($request->dteFrom));
		$data->dte_To = date('Y-m-d', strtotime($request->dteTo));
		$data->Sun = false;
		$data->Mon = false;
		$data->Tue = false;
		$data->Wed = false;
		$data->Thu = false;
		$data->Fri = false;
		$data->Sat = false;

		$data = $data->save();

		return response()->json($data);
	}

}
