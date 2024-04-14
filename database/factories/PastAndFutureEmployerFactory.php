<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PastAndFutureEmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->numberBetween(1, 99999),
            'name' => fake()->name(),
            'start_date' => Carbon::today()->subDays(rand(1, 365)),
            'end_date' => Carbon::today()->subDays(rand(1, 365)),
        ];
    }
}
