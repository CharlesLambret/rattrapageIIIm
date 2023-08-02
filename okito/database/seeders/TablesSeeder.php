<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Seeder;

class TablesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tables')->insert([ // corrigé ici
            'id' => '1'
        ]);
    }
}
