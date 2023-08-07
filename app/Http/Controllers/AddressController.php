<?php

namespace App\Http\Controllers;


class AddressController extends Controller
{
    public function index()
    {
        $request = request()->validate([
            'country' => ['nullable', 'exists:countries,id'],
            'state' => ['nullable', 'exists:states,id']
        ]);

        return inertia('Welcome', [
            "countries" => \App\Models\Country::all(),
            "states" => isset($request['country']) ? \App\Models\Country::find($request['country'])->states : array(),
            "cities" => isset($request['state']) ? \App\Models\State::find($request['state'])->cities : array(),
        ]);
    }


}
