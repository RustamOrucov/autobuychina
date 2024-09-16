<?php

namespace App\Repositories;

use App\Models\Odometer;
use App\Repositories\Abstract\AbstractRepository;

class OdometerRepository extends AbstractRepository
{
    protected $modelClass = Odometer::class;
}
