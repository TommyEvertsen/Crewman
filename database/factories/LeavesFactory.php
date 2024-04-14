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
        return [
            'role_type' => fake()->name(),
            'start_date' => Carbon::today()->subDays(rand(1, 365)),
            'end_date' => Carbon::today()->subDays(rand(1, 365)),
        ];
    }
}
