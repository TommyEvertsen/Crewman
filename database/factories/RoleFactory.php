<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $setRole = (rand(1, 2) < 2) ? "Qualification" : "Position";

        return [
            'role_type' => $setRole,
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
        ];
    }
}
