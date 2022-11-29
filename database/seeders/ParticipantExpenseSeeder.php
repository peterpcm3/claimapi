<?php

namespace Database\Seeders;

use App\Models\ParticipantExpense;
use Illuminate\Database\Seeder;

class ParticipantExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ParticipantExpense::factory()
            ->count(30)
            ->hasExpenses(5)
            ->create();

        ParticipantExpense::factory()
            ->count(30)
            ->hasExpenses(8)
            ->create();
    }
}
