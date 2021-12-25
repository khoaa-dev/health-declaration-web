<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    //
    protected $fillable = [
        'name', 'districtId'
    ];

    public function District() {
        return $this->belongsTo('App\Models\District');
    }
}
