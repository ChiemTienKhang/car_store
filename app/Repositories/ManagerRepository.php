<?php

namespace App\Repositories;

use App\Models\Car;

class ManagerRepository extends BaseRepository {

    /**
     * The Tag instance.
     *
     * @var App\Models\Car
     */
    protected $car;

    /**
     * Create a new ManagerRepository instance.
     *
     * @param  App\Models\Car $car
     * @return void
     */
    public function __construct(Car $car) 
    {
        $this->car = $car;
    }

    /**
     * Get post collection.
     *
     * @param  int  $n
     * @return Illuminate\Support\Collection
     */
    public function indexFront($n)
    {
        $query = $this->car
            ->select('image', 'title', 'cost', 'is_sell');
        return $query->paginate($n);
    }

}