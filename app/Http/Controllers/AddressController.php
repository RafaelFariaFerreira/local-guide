<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;

class AddressController extends Controller
{
    public function index()
    {
        $request = request()->validate([
            'country' => ['nullable', 'exists:countries,id'],
            'state' => ['nullable', 'exists:states,id']
        ]);

        return inertia('Welcome', [
            "countries" => Country::all(),
            "states" => isset($request['country']) ? Country::find($request['country'])->states : array(),
            "cities" => isset($request['state']) ? State::find($request['state'])->cities : array(),
        ]);
    }


}
