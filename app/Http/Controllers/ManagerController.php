<?php namespace App\Http\Controllers;

use App\Repositories\ManagerRepository;

class ManagerController extends Controller {

/**
	 * The ManagerRepository instance.
	 *
	 * @var App\Repositories\ManagerRepository
	 */
    protected $manager_gestion;

    /**
	 * The pagination number.
	 *
	 * @var int
	 */
    protected $nbrPages;

/**
	 * Create a new ManagerController instance.
	 *
	 * @param  App\Repositories\ManagerRepository $manager_gestion
	 * @return void
	*/

    public function __construct(
		ManagerRepository $manager_gestion)
	{
        $this->manager_gestion = $manager_gestion;
        $this->nbrPages = 2;
	}	

/**
	 * Display a listing cars which manager manage.
	 *
	 * @return Response
	 */
    public function indexFront()
	{
        $managers = $this->manager_gestion->indexFront($this->nbrPages);
        $pages = $managers->render();
        return view('front.manager.index', compact('managers', 'pages'));
    }

}