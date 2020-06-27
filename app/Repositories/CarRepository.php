<?php

namespace App\Repositories;

use App\Models\Car;

class CarRepository extends BaseRepository {

    /**
     * Create a new CarRepository instance.
     *
     * @param  App\Models\Car $car
     * @return void
     */
    public function __construct(Car $car) 
    {
        $this->model = $car;
    }

    /**
	 * Get all roles.
	 *
	 * @return Illuminate\Support\Collection
	 */
    
    public function indexFront()
    {
        return $this->model->all();
    }

}
