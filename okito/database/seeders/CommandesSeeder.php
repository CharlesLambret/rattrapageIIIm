<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommandesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('commandes')->insert([
            'table' => '1',
        ]);
    }
}
