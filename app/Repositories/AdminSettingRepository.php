<?php

namespace App\Repositories;

use App\Models\AdminSetting;
use App\Repositories\Abstract\AbstractRepository;

class AdminSettingRepository extends AbstractRepository
{
    protected $modelClass = AdminSetting::class;
}
