<?php

namespace Database\Factories;

use App\Models\Assignments;
use App\Models\Leaves;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use PhpParser\Node\Expr\Assign;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assignments>
 */
class AssignmentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name() . ' ' . 'Assignment',
            'start_date' => Carbon::today()->subDays(rand(1, 365)),
            'end_date' => Carbon::today()->subDays(rand(1, 365)),
        ];
    }
    /* *
     * Configure the model factory.
     *
     * @return $this
     */
    /*  public function configure()
    {
        return $this->afterCreating(function (Assignments $assignments) {
            $assignments->leaves()->save(Leaves::factory()->make());
        });
    } */
}
