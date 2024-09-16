<?php

namespace App\Repositories;

use App\Models\Ban;
use App\Repositories\Abstract\AbstractRepository;

class BanRepository extends AbstractRepository
{
    protected $modelClass = Ban::class;
}
