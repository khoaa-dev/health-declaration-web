<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\District;
use App\Models\Nationality;
use App\Models\Ward;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $nationalities = Nationality::all();
        $provinces = Province::all();
        $districts = District::all();
        $wards = Ward::all()->take(100);
        return view('home')->with('provinces', $provinces)->with('nationalities', $nationalities)
        ->with('districts', $districts)->with('wards', $wards);
    }
}
