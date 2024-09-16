<?php

namespace App\Repositories;

use App\Models\Social;
use App\Repositories\Abstract\AbstractRepository;

class SocialRepository extends AbstractRepository
{
    protected $modelClass = Social::class;
}
