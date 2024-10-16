<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Transaction;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'transaction_title' => fake()->name(),
            'description' => fake()-> sentence(),
            'status' => fake()-> randomElement(['successful','declined']),
            'total_amount' =>fake()->randomFloat(2,100,10000),
            'transaction_number' =>fake()->numerify('##########'),
        ];
    }
}
