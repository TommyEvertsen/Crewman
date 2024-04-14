<?php

namespace Database\Seeders;

use App\Models\PastAndFutureEmployer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PastAndFutureEmployerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PastAndFutureEmployer::factory()->count(1)->create();
    }
}
