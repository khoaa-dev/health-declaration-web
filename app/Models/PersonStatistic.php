<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonStatistic extends Model
{
    public $timestamps = false;
    protected $fillable = 
    ['sl_nguoiCoDauHieu', 'sl_nguoiKhongCo', 'ngay'];
    protected $primaryKey = 'id';
    protected $table = 'statistic_persons';
}
