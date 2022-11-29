<?php

namespace Database\Seeders;

use App\Models\Study;
use Illuminate\Database\Seeder;

class StudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Study::factory()
            ->count(10)
            ->create();
    }
}
