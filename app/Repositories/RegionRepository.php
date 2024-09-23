<?php

namespace App\Repositories;

use App\Models\Region;
use App\Repositories\Abstract\AbstractRepository;

class RegionRepository extends AbstractRepository
{
    protected $modelClass = Region::class;
}
