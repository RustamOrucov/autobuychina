<?php

namespace App\Repositories;

use App\Models\Market;
use App\Repositories\Abstract\AbstractRepository;

class MarketRepository extends AbstractRepository
{
    protected $modelClass = Market::class;

}
