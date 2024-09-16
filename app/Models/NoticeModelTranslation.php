<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticeModelTranslation extends Model
{
    use HasFactory;
    protected $table='noticemodels_translations';
    protected $guarded = [];
    public $timestamps=false;
}
