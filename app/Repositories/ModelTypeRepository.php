<?php

namespace App\Repositories;

use App\Models\Modeltype;
use App\Repositories\Abstract\AbstractRepository;

class ModelTypeRepository extends AbstractRepository
{
    protected $modelClass = Modeltype::class;
}
