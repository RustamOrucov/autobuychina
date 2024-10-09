<?php

namespace App\Repositories;

use App\Models\ReportModel;
use App\Repositories\Abstract\AbstractRepository;

class ReportRepository extends AbstractRepository
{
    protected $modelClass = ReportModel::class;
}
