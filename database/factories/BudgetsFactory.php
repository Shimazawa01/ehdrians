<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Budgets>
 */
class BudgetsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10), // Assuming you have 10 users in your users table
            'amount' => $this->faker->randomFloat(2, 100, 10000), // Random budget amount between 100 and 10000 with 2 decimal places
        ];
    }
}
