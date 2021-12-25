<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gate extends Model
{
    //
    protected $fillable = [
        'name'
    ];

    public function EntryDeclaration() {
        return $this->hasMany('App\Models\EntryDeclaration');
    }
}
