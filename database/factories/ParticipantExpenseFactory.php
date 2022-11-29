<?php

namespace Database\Factories;

use App\Models\ParticipantDetail;
use App\Models\ParticipantExpense;
use App\Models\ParticipantVisit;
use App\Models\Study;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParticipantExpenseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ParticipantExpense::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'study_id' => Study::factory(),
            'participant_detail_id' => ParticipantDetail::factory(),
            'participant_visit_id' => ParticipantVisit::factory(),
        ];
    }
}
