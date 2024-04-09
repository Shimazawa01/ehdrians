<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Goals>
 */
class GoalsFactory extends Factory
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
            'amount' => $this->faker->randomFloat(2, 500, 5000), // Random goal amount between 500 and 5000 with 2 decimal places
            'title' => $this->faker->sentence, // Generate a random sentence for the goal title
        ];
    }
}
