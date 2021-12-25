<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DomesticGuestDeclaration extends Model
{
    //
    protected $fillable = [
        'idUser', 'placeTravelTo', 'sign', 'contactWithPeopleFromCovidCountries',
        'contactWithSickPerson', 'contactWithPeopleHasManifestation'
    ];

    public function User() {
        return $this->belongsTo('App\Models\User');
    }
}
