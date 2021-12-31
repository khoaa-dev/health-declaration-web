<?php

use Illuminate\Database\Seeder;
use App\Models\DomesticGuestDeclaration;

class DomesticGuestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++) {
            $domesticGuest = new DomesticGuestDeclaration;
            $domesticGuest->idUser = 1;
            $domesticGuest->placeTravelTo = "Không";
            $domesticGuest->sign = "Không";
            $domesticGuest->hasPatient = "Không";
            $domesticGuest->hasFromSickCountry = "Không";
            $domesticGuest->hasSick = "Không";
            $domesticGuest->save();
        }

        for($i = 0; $i < 10; $i++) {
            $domesticGuest = new DomesticGuestDeclaration;
            $domesticGuest->idUser = 2;
            $domesticGuest->placeTravelTo = "Không";
            $domesticGuest->sign = "Không";
            $domesticGuest->hasPatient = "Không";
            $domesticGuest->hasFromSickCountry = "Không";
            $domesticGuest->hasSick = "Không";
            $domesticGuest->save();
        }
    }
}
