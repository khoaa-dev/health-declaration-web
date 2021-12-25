<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    //
    protected $fillable = [
        'name'
    ];

    public function Province() {
        return $this->hasMany('App\Models\Province');
    }
}
