<?php

namespace App\Repositories;

use App\Models\Car;
use App\Repositories\Abstract\AbstractRepository;

class CarRepository extends AbstractRepository
{
    protected $modelClass = Car::class;
}  
