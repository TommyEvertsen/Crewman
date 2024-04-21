<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employees;
use App\Models\PastAndFutureEmployer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EmployeesFactory extends Factory
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
            'firstName' => fake()->firstName(),
            'lastName' => fake()->lastName(),
            'ZID' => $this->faker->numberBetween(10000, 99999)
        ];
    }
    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterCreating(function (Employees $employee) {
            $employee->pastAndFutureEmployer()->saveMany(PastAndFutureEmployer::factory()->count(2)->make());
        });
    }
}
