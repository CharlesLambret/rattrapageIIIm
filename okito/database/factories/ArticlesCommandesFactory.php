<?php

namespace Database\Factories;

use App\Models\Commandes;
use App\Models\Articles;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\test>
 */
class ArticlesCommandesFactory extends Factory
{

    public function definition(): array
    {
        return [
            'commandes_id' => Commandes::factory(),
            'articles_id' => Articles::factory(),
        ];
    }
}