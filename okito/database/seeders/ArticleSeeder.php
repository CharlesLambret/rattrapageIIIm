<?php
namespace Database\Seeders; 

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        DB::table('articles')->insert([
            'nom' => 'Article 1',
            'description' => 'Description de l\'article 1',
            'url' => 'https://img.tablemi.com/okito_169/menu/dishes/511ad290-4980-4232-8dff-3e40165e3c0c.png',
            'prix' => 10.99
        ]);
    }
}