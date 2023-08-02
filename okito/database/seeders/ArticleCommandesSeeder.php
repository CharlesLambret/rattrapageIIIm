<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleCommandesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('articles_commandes')->insert([
            ['idcommande' => '1', 'idarticle' => '1'],
            ['idcommande' => '1', 'idarticle' => '2'], // corrigé ici
            ['idcommande' => '1', 'idarticle' => '3']
        ]);
    }
}
