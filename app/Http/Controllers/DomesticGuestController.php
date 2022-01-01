<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DomesticGuestDeclaration;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Rules\Captcha;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Support\Facades\Validator;


class DomesticGuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            // 'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            'g-recaptcha-response' => new Captcha(),
        ]);
        $user = new User;
        $user->fullName = $request->fullName;
        $user->idCard = $request->idCard;
        $user->YoB = $request->YoB;
        $user->address = $request->address;
        $user->wardId = $request->wardId;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->nationalityId = $request->nationalityId;
        $user->gender = $request->gender;
        $user->update();

        DB::table('users')
            ->where('email', $request->email)
            ->update([
                'fullName' => $request->fullName,
                'idCard' => $request->idCard,
                'YoB' => $request->YoB,
                'address' => $request->address,
                'wardId' => $request->wardId,
                'phone' => $request->phone,
                'email' => $request->email,
                'nationalityId' => $request->nationalityId,
                'gender' => $request->gender
            ]);
        
        if($request->placeTravelTo == 0) {
            $placeTravelTo = "Không";
        } else {
            $placeTravelTo = $request->placeTravelTo1;
        }

        if($request->sign == 0) {
            $sign = "Không";
        } else {
            $sign = $request->signNote;
        }

        if($request->hasPatient == 1) {
            $hasPatient = "Có";
        } else {
            $hasPatient = "Không";
        }

        if($request->hasFromSickCountry == 1) {
            $hasFromSickCountry = "Có";
        } else {
            $hasFromSickCountry = "Không";
        }

        if($request->hasSick == 1) {
            $hasSick = "Có";
        } else {
            $hasSick = "Không";
        }

        

        $idUser = DB::table('users')->select('id')->where('email', $request->email)->get()[0]->id;



        $domesticGuest = new DomesticGuestDeclaration;
        $domesticGuest->idUser = $idUser;
        $domesticGuest->placeTravelTo = $placeTravelTo;
        $domesticGuest->sign = $sign;
        $domesticGuest->hasPatient = $hasPatient;
        $domesticGuest->hasFromSickCountry = $hasFromSickCountry;
        $domesticGuest->hasSick = $hasSick;
        $domesticGuest->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $domesticGuest->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $domesticGuest->save();
        
        return redirect()->route('announ');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
