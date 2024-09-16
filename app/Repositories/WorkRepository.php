<?php

namespace App\Repositories;

use App\Models\Work;
use App\Repositories\Abstract\AbstractRepository;

class WorkRepository extends AbstractRepository
{
    protected $modelClass = Work::class;
}
