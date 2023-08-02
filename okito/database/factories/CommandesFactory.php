<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\test>
 */
class CommandesFactory extends Factory
{

    public function definition(): array
    {
        return [
            'table' => fake()->randomNumber(2),
        ];
    }
}