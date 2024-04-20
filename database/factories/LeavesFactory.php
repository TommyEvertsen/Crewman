<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Leaves>
 */
class LeavesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $setLeave = (rand(1, 2) < 2) ? "Vacation" : "Sick leave";

        return [
            'name' => $setLeave,
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
        ];
    }
}
