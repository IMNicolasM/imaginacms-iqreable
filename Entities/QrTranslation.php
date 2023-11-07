<?php

namespace Modules\Iqreable\Entities;

use Illuminate\Database\Eloquent\Model;

class QrTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'iqreable__qr_translations';
}
