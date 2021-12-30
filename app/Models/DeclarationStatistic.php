<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeclarationStatistic extends Model
{
    public $timestamps = false;
    protected $fillable = 
    ['sl_diChuyenNoiDia', 'sl_nguoiNhapCanh', 'sl_khaiBaoToanDan', 'ngay'];
    protected $primaryKey = 'id';
    protected $table = 'statistic_declarations'
}
