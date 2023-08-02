<?php

namespace Database\Factories;

use App\Models\Commande;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\test>
 */
class ArticleCommandeFactory extends Factory
{

    public function definition(): array
    {
        return [
            'commandes_id' => Commande::factory(),
            'Article_id' => Article::factory(),
        ];
    }
}