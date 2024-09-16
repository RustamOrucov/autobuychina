<?php

namespace App\Repositories;

use App\Models\EngineVolume;
use App\Repositories\Abstract\AbstractRepository;

class EngineVolumeRepository extends AbstractRepository
{
    protected $modelClass = EngineVolume::class;
}
