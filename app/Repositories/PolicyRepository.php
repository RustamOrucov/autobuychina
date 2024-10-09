<?php

namespace App\Repositories;

use App\Models\Policy;
use App\Repositories\Abstract\AbstractRepository;

class PolicyRepository extends AbstractRepository
{
    protected $modelClass = Policy::class;
}
