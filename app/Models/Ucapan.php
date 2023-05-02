<?php

namespace App\Models;

use Carbon\Carbon;
setlocale(LC_TIME, 'id_ID');
\Carbon\Carbon::setLocale('id');
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ucapan extends Model
{
    use HasFactory;
    protected $table = "ucapan";
    protected $guarded =[];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }
}
