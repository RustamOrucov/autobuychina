<?php

namespace App\Repositories;

use App\Models\EngineWork;
use App\Repositories\Abstract\AbstractRepository;

class EngineWorkRepository extends AbstractRepository
{
    protected $modelClass = EngineWork::class;
}
