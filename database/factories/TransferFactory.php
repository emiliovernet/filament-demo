<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Account;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transfer>
 */
class TransferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->date(),
            'type' => fake()->randomElement(['payment', 'deposit', 'transfer']),
            'source_account_id' => Account::inRandomOrder()->first()->id,
            'destination_account_id' => Account::inRandomOrder()->first()->id,
            'amount' => fake()->randomFloat(2, 0, 1000),
        ];
    }
}
