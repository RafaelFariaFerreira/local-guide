<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {

        return inertia('Welcome',[
            "countries"=> Country::all(),
            "states" => State::all(),
            "cities"=> City::all(),
        ]);
    }
}
