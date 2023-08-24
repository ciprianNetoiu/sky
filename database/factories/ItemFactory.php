<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'answer' => fake()->name(),
            'clue' => fake()->unique()->safeEmail(),
            'length' => fake()->numberBetween(2, 6),
            'date' => now(),
            'direction' => 'across',
        ];
    }
}
