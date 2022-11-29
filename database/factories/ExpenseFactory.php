<?php

namespace Database\Factories;

use App\Models\Expense;
use App\Models\ParticipantExpense;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpenseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Expense::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'participant_expense_id' => ParticipantExpense::factory(),
            'expense_type' => $this->faker->randomElement(['rail_fare', 'taxi_fare', 'parking', 'mileage', 'other']),
            'other_description' => $this->faker->realTextBetween(50, 200),
            'amount' => $this->faker->randomNumber(6),
            'currency' => $this->faker->randomElement(['USD', 'GBP']),
            'info' => $this->faker->sentence(),
        ];
    }
}
