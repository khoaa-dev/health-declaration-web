<?php

use Illuminate\Database\Seeder;
use App\Models\DomesticMoveDeclaration;

class DomesticMoveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++) {
            $domesticMove = new DomesticMoveDeclaration;
            $domesticMove->idUser = 1;
            $domesticMove->vehicle = "Máy bay";
            $domesticMove->flightCode = "VN001";
            $domesticMove->start = "Đà Nẵng";
            $domesticMove->departure = "Cảng hàng không quốc tế";
            $domesticMove->end = "Hà Nội";
            $domesticMove->destination = "Nội Bài";
            $domesticMove->vehicleCode = "VN123";
            $domesticMove->seat = "123";
            $domesticMove->placeTravelTo = "Không";
            $domesticMove->sign = "Không";
            $domesticMove->hasPatient = "Không";
            $domesticMove->hasFromSickCountry = "Không";
            $domesticMove->hasSick = "Không";
            $domesticMove->save();
        }

        for($i = 0; $i < 10; $i++) {
            $domesticMove = new DomesticMoveDeclaration;
            $domesticMove->idUser = 2;
            $domesticMove->vehicle = "Máy bay";
            $domesticMove->flightCode = "VN002";
            $domesticMove->start = "Hồ Chí Minh";
            $domesticMove->departure = "Tân Sơn Nhất";
            $domesticMove->end = "Hà Nội";
            $domesticMove->destination = "Nội Bài";
            $domesticMove->vehicleCode = "VN123";
            $domesticMove->seat = "123";
            $domesticMove->placeTravelTo = "Không";
            $domesticMove->sign = "Không";
            $domesticMove->hasPatient = "Không";
            $domesticMove->hasFromSickCountry = "Không";
            $domesticMove->hasSick = "Không";
            $domesticMove->save();
        }
    }
}
