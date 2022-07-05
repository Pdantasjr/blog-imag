<?php

namespace Database\Seeders;

use App\Models\DiagnosticMethod;
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
        DiagnosticMethod::factory()->count(8)->create();
    }
}
