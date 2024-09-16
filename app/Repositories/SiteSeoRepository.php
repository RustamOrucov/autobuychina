<?php

namespace App\Repositories;

use App\Models\SiteSeo;
use App\Repositories\Abstract\AbstractRepository;

class SiteSeoRepository extends AbstractRepository
{
    protected $modelClass = SiteSeo::class;
}
