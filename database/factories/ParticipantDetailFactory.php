<?php

namespace Database\Factories;

use App\Models\Participant;
use App\Models\ParticipantDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParticipantDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ParticipantDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'participant_id' => Participant::factory(),
            'bank_name' => $this->faker->company(),
            'bank_address' => $this->faker->address(),
            'account_holder' => $this->faker->name(),
            'account_type' => $this->faker->randomElement(['checking', 'savings']),
            'currency' => $this->faker->randomElement(['USD', 'GBP']),
            'account_number' => $this->faker->numberBetween(10000000, 99999999),
            'sort_code' => $this->faker->numberBetween(100000, 999999),
            'iban' => $this->faker->iban(),
            'swift' => $this->faker->swiftBicNumber(),
            'routing_number' => $this->faker->randomNumber(),
            'transit_number' => $this->faker->randomNumber(),
        ];
    }
}
