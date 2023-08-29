<?php

namespace App\Http\Controllers;

use App\Models\CreditCard;
use Illuminate\Http\Request;

class CreditCardController extends Controller
{
    public function index()
    {
        return CreditCard::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand' => ['required'],
            'last_digits' => ['required'],
            'cvv' => ['required'],
            'hash' => ['required'],
            'status' => ['required'],
            'billing_address' => ['required', 'integer'],
        ]);

        return CreditCard::create($request->validated());
    }

    public function show(CreditCard $creditCard)
    {
        return $creditCard;
    }

    public function update(Request $request, CreditCard $creditCard)
    {
        $request->validate([
            'brand' => ['required'],
            'last_digits' => ['required'],
            'cvv' => ['required'],
            'hash' => ['required'],
            'status' => ['required'],
            'billing_address' => ['required', 'integer'],
        ]);

        $creditCard->update($request->validated());

        return $creditCard;
    }

    public function destroy(CreditCard $creditCard)
    {
        $creditCard->delete();

        return response()->json();
    }
}
