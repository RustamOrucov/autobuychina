<?php

namespace App\Repositories;

use App\Models\Sold;
use App\Repositories\Abstract\AbstractRepository;

class SoldRepository extends AbstractRepository
{
    protected $modelClass = Sold::class;
}
