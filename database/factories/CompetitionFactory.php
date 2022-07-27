<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Competition>
 */
class CompetitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'slug' => Str::slug(fake()->sentence(), '-'),
            'description' => fake()->paragraph(2, true),
            'category' => fake()->randomElement(['capture-the-flag', 'competitive-programming', 'data-mining']),
            'created_at' => fake()->date()
        ];
    }
}
