<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;

class Car extends Model {

    use DatePresenter;

    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'cars';
	
	/**
	 * One to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\hasMany
	 */
	public function sellers() 
	{
	  return $this->hasMany('App\Models\Seller');
	}
    
}