<?php

namespace App\Repositories;

use App\Models\Spare;
use App\Repositories\Abstract\AbstractRepository;

class SpareRepository extends AbstractRepository
{
    protected $modelClass = Spare::class;
}
