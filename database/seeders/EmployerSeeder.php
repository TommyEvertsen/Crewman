<?php

namespace Database\Seeders;

use App\Models\Assignments;
use App\Models\Employees;
use App\Models\Employers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employers::factory(10)
            ->has(Employees::factory()->count(1), 'employees')
            ->has(Assignments::factory()->count(1), 'assignments')
            ->create();
    }
}
