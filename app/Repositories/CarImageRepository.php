<?php

namespace App\Repositories;

use App\Models\CarImage;
use App\Repositories\Abstract\AbstractRepository;

class CarImageRepository extends AbstractRepository
{
    protected $modelClass = CarImage::class;
}
