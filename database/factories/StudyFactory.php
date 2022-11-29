<?php

namespace Database\Factories;

use App\Models\Study;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Study::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reference' => $this->faker->randomNumber(),
            'type' => $this->faker->randomElement(['medical', 'other']),
            'description' => $this->faker->sentence(),
        ];
    }
}
