<?php

namespace Database\Seeders;

use App\Models\Exams;
use Illuminate\Database\Seeder;

class ExamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exams::factory()->count(300)->create();
    }
}
