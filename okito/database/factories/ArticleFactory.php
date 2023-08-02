<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\test>
 */
class ArticleFactory extends Factory
{

    public function definition(): array
    {
        return [
            'nom' => fake()->randomElement([
                'sushi',
                'maki',
                'canard laqué',
                'soupe miso',
            ]),
            'prix' => fake()->randomFloat(2, 1, 15),
            'description' => fake()->realText(),
            'url' => fake()->url(),
        ];
    }
}