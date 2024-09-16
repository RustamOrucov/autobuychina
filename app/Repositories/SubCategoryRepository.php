<?php

namespace App\Repositories;

use App\Models\Subcategory;
use App\Repositories\Abstract\AbstractRepository;

class SubCategoryRepository extends AbstractRepository
{
    protected $modelClass = Subcategory::class;
}
