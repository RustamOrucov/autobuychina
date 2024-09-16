<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Abstract\AbstractRepository;

class UserRepository extends AbstractRepository
{
    protected $modelClass = User::class;
}
