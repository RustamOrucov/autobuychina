<?php

namespace App\Repositories;

use App\Models\FuelType;
use App\Repositories\Abstract\AbstractRepository;

class FuelTypeRepository extends AbstractRepository
{
    protected $modelClass = FuelType::class;
}
