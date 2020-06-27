<?php namespace App\Http\Controllers;

use App\Repositories\CarRepository;

class CarController extends Controller {

/**
	 * The BlogRepository instance.
	 *
	 * @var App\Repositories\CarRepository
	 */
	protected $car_gestion;
    
/**
	 * Create a new CarController instance.
	 *
	 * @param  App\Repositories\CarRepository $car_gestion
	 * @return void
	*/

    public function __construct(
		CarRepository $car_gestion)
	{
		$this->car_gestion = $car_gestion;
	}	

/**
	 * Display a listing cars which customer can choose to buy.
	 *
	 * @return Response
	 */
	public function indexFront()
	{
        $cars = $this->car_gestion->indexFront();
		return view('front.customer.index', compact('cars'));
	}

}