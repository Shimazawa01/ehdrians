<?php

namespace Database\Factories;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ExpensesFactory extends Factory
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
            'amount' => $this->faker->randomFloat(2, 10, 1000), // Generate a random float between 10 and 1000 with 2 decimal places
            'note' => $this->faker->sentence, // Generate a random sentence for the note
        ];
    }
}
