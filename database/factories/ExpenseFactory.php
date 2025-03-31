<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'spent_at' => $this->faker->dateTime(),
            'amount' => $this->faker->randomFloat(2, 1, 1000),
            'category_id' => Category::pluck('id')->random(),
            'notes' => $this->faker->sentence()
        ];
    }
}
