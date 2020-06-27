<?php

namespace App\Http\Controllers;

use App\Jobs\ChangeLocale;

class HomeController extends Controller
{

	/**
	 * Display the home page.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('front.index');
	}

}
