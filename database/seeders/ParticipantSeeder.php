<?php

namespace Database\Seeders;

use App\Models\Participant;
use Illuminate\Database\Seeder;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Participant::factory()
            ->count(20)
            ->hasParticipantDetails(3)
            ->hasParticipantVisits(6)
            ->create();

        Participant::factory()
            ->count(20)
            ->hasParticipantDetails(2)
            ->hasParticipantVisits(4)
            ->create();
    }
}
