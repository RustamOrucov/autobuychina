<?php

namespace App\Repositories;

use App\Models\Damage;
use App\Models\Dealer;
use App\Repositories\Abstract\AbstractRepository;

class DealerRepository extends AbstractRepository
{
    protected $modelClass = Dealer::class;

}
