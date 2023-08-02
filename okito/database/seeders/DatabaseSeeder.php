<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleCommande;
use App\Models\Commande;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $articles = Article::factory(10)->create();
      $commandes = Commande::factory(10)->create();
      
      foreach ($commandes as $commande) {
        $commande->articles()->attach([$articles[rand(0,9)->id]]);
      }
    }
}