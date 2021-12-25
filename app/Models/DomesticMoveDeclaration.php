<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DomesticMoveDeclaration extends Model
{
    //
    protected $fillable = [
        'idUser', 'vehicle', 'flightCode', 'start', 'departure', 
        'end', 'destination', 'vehicleCode', 'seat', 'placeTravelTo',
        'sign', 'contactWithSickPerson', 'contactWithPeopleFromCovidCountries',
        'contactWithPeopleHasManifestation'
    ];

    public function User() {
        return $this->belongsTo('App\Models\User');
    }
}
