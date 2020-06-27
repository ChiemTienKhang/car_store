<?php

namespace App\Repositories;

use App\Models\Seller,
    App\Models\Customer,
    App\Models\Car;

class SellerRepository extends BaseRepository {

    /**
     * The Tag instance.
     *
     * @var App\Models\Customer
     */
    protected $customer;

    /**
     * The Tag instance.
     *
     * @var App\Models\Car
     */
    protected $car;

    /**
     * Create a new SellerRepository instance.
     *
     * @param  App\Models\Car $car
     * @param  App\Models\Seller $seller
     * @param  App\Models\Customer $customer
     * @return void
     */
    public function __construct(
        Seller $seller,
        Customer $customer,
        Car $car) 
    {
        $this->model = $seller;
        $this->car = $car;
        $this->customer = $customer;
    }

    /**
     * Get post collection.
     *
     * @param  int  $n
     * @return Illuminate\Support\Collection
     */
    public function indexFront($n)
    {
        $query = $this->model
                ->select('cars.image', 'cars.title', 'cars.cost', 'cars.is_sell', 'customers.name')
                ->join('cars', 'cars.id', '=', 'sellers.car_id')
                ->join('customers', 'customers.id', '=', 'sellers.customer_id');
        return $query->paginate($n);
    }

}