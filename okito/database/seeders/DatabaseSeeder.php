<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Commande;
use App\Models\ArticleCommande;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = Article::factory(10)->create();
        $commandes = Commande::factory(10)->create();
        
        for ($i = 0; $i >= $articles->count(); $i++) {
            ArticleCommande::factory()->create([
              'articles_id' => $articles[$i]->id,
              'commandes_id' => $commandes[$i]->id,
            ]);
          }
    }
}