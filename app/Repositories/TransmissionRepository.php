<?php

namespace App\Repositories;

use App\Models\Transmission;
use App\Repositories\Abstract\AbstractRepository;

class TransmissionRepository extends AbstractRepository
{
    protected $modelClass = Transmission::class;
}
