<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //
    protected $fillable = [
        'name', 'nationalityId'
    ];

    public function Nationality() {
        return $this->belongsTo('App\Models\Nationality');
    }

    public function District() {
        return $this->hasMany('App\Models\District');
    }
}
