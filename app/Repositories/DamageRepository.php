<?php

namespace App\Repositories;

use App\Models\Damage;
use App\Repositories\Abstract\AbstractRepository;

class DamageRepository extends AbstractRepository
{
    protected $modelClass = Damage::class;
}
