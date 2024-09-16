<?php

namespace App\Repositories;

use App\Models\AuctionTime;
use App\Repositories\Abstract\AbstractRepository;

class AuctionTimeRepository extends AbstractRepository
{
    protected $modelClass = AuctionTime::class;
}
