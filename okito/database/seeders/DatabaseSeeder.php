<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(ArticleSeeder::class);
        $this->call(CommandesSeeder::class);
        $this->call(ArticleCommandesSeeder::class);
        $this->call(TablesSeeder::class); 
    }
}
