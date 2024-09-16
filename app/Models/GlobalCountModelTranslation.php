<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalCountModelTranslation extends Model
{
    use HasFactory;

    protected $table = 'globalcounts_translations';
    protected $guarded = [];
    public $timestamps = false;

    public function globalCount()
{
    return $this->belongsTo(GlobalCountModel::class, 'global_count_id');
}

}
