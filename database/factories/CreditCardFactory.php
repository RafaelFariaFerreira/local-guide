<?php

namespace Database\Factories;

use App\Models\CreditCard;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CreditCardFactory extends Factory
{
    protected $model = CreditCard::class;

    public function definition(): array
    {
        return [
            'brand' => $this->faker->word(),
            'last_digits' => $this->faker->word(),
            'cvv' => $this->faker->word(),
            'hash' => $this->faker->word(),
            'status' => $this->faker->word(),
            'billing_address' => $this->faker->address(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
