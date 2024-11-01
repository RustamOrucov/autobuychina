<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticeModel extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    protected $table = 'noticemodels';
    protected $guarded = [];
    public $translationModel=NoticeModelTranslation::class;
    public $translatedAttributes = ['title','header','content'];
}
