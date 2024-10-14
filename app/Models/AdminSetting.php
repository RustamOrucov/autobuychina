<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminSetting extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    protected $table='admin_settings';
    protected $guarded=[];
    public $translationModel=AdminSettingTranslation::class;
    public $translatedAttributes = ['mobile_footer','footer_text','mobile_copyright'];
}
