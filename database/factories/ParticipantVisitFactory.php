<?php

namespace Database\Factories;

use App\Models\Participant;
use App\Models\ParticipantVisit;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParticipantVisitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ParticipantVisit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'participant_id' => Participant::factory(),
            'site_visit_date' => $this->faker->dateTime()
        ];
    }
}
