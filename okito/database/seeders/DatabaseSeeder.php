<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Articles;
use App\Models\Commandes;
use App\Models\ArticlesCommandes;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = Articles::factory(10)->create();
        $commandes = Commandes::factory(10)->create();
        
        $seeds = $articles + $commandes;

        foreach($seeds as $seed) {
            ArticlesCommandes::factory()->create([
                'articles_id' => $articles->id,
                'commandes_id' => $commandes->id,
            ]);
        }
    }
}