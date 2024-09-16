<?php

namespace App\Repositories;

use App\Models\MainSlider;
use App\Repositories\Abstract\AbstractRepository;

class MainSliderRepository extends AbstractRepository
{
    protected $modelClass = MainSlider::class;
}
