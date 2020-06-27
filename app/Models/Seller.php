<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;

class Seller extends Model {

    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
    protected $table = 'sellers';
    
    /**
	 * One to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function car() 
	{
		return $this->belongsTo('App\Models\Car');
    }
    
    /**
	 * One to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function customer() 
	{
		return $this->belongsTo('App\Models\Customer');
	}

}