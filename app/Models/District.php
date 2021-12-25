<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //
    protected $fillable = [
        'name', 'provinceId'
    ];

    public function Province() {
        return $this->belongsTo('App\Models\Province');
    }
}
