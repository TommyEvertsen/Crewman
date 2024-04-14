<?php

namespace Database\Seeders;

use App\Models\Employees;
use App\Models\PastAndFutureEmployer;
use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employees::factory(1)
        ->has(PastAndFutureEmployer::factory()->count(1), 'pastAndFutureEmployer')
            ->create();
    }
}
