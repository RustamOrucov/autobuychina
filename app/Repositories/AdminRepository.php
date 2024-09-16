<?php

namespace App\Repositories;

use App\Models\AdminModel;
use App\Repositories\Abstract\AbstractRepository;

class AdminRepository extends AbstractRepository
{
    protected $modelClass = AdminModel::class;
}
