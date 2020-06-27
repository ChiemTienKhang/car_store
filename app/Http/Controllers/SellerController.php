<?php namespace App\Http\Controllers;

use App\Repositories\SellerRepository;

class SellerController extends Controller {

/**
	 * The SellerRepository instance.
	 *
	 * @var App\Repositories\SellerRepository
	 */
    protected $seller_gestion;
    
    
/**
	 * The pagination number.
	 *
	 * @var int
	 */
    protected $nbrPages;

/**
	 * Create a new SellerController instance.
	 *
	 * @param  App\Repositories\SellerRepository $seller_gestion
	 * @return void
	*/
    public function __construct(
        SellerRepository $seller_gestion) 
    {
        $this->seller_gestion = $seller_gestion;
        $this->nbrPages = 2;
    }

/**
	 * Display a listing cars which seller be selled or not
	 *
	 * @return Response
	 */
    public function indexFront()
	{
        $sellers = $this->seller_gestion->indexFront($this->nbrPages);
        $pages = $sellers->render();
        return view('front.seller.index', compact('sellers', 'pages'));
    }

}