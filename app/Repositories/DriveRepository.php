<?php

namespace App\Repositories;

use App\Models\Drive;
use App\Repositories\Abstract\AbstractRepository;

class DriveRepository extends AbstractRepository
{
    protected $modelClass = Drive::class;
}
