<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EntryDeclaration extends Model
{
    //
    protected $fillable = [
        'idUser', 'object', 'gateId', 'travelInfor', 'TransportationNo', 'SeatNo', 'DepartureDate', 'ImmigrationDate',
        'CountryOfDeparture', 'ProvinceOfDeparture', 'CountryOfDestination', 'ProvinceOfDestination',
        'PlaceHasBeenTo', 'QuarantinePlace', 'QuarantineWardId', 'ContactWardId', 'ContactAddress',
        'SymptomFever', 'SymptomCough', 'SymptomDifficutlyOfBreathing', 'SymptomSoreThroat', 'SymptomVomiting',
        'SymptomDiarrhea', 'SymptomSkinHeamorrhage', 'SymptomRash', 'ListOfVaccinOrBiological', 'HOEVisitPultyFarm',
        'HOECareForASickPerson', 'QuanrantineFacility', 'CertificateRecoveryCovid', 'TestCovidDate'
    ];

    public function Gate() {
        return $this->belongsTo('App\Models\Gate');
    }

    public function User() {
        return $this->belongsTo('App\Models\User');
    }
}
