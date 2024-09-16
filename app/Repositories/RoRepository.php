<?php

namespace App\Repositories;

use App\Models\Ro;
use App\Repositories\Abstract\AbstractRepository;

class RoRepository extends AbstractRepository
{
    protected $modelClass = Ro::class;
}
