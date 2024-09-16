<?php

namespace App\Repositories;

use App\Models\EngineType;
use App\Repositories\Abstract\AbstractRepository;

class EngineTypeRepository extends AbstractRepository
{
    protected $modelClass = EngineType::class;
}
