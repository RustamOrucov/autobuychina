<?php

namespace App\Repositories;

use App\Models\Carmodel;
use App\Repositories\Abstract\AbstractRepository;

class CarModelRepository extends AbstractRepository
{
    protected $modelClass = Carmodel::class;
}
