<?php

namespace App\Repositories;

use App\Models\Cylinder;
use App\Repositories\Abstract\AbstractRepository;

class CylinderRepository extends AbstractRepository
{
    protected $modelClass = Cylinder::class;
}
