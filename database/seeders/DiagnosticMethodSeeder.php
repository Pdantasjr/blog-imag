<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DiagnosticMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DiagnosticMethodSeeder::factory()->count(8)->create();
    }
}
