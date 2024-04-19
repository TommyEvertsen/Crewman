<?php

use App\Models\Employees;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('past_and_future_employers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->foreignIdFor(Employees::class, 'employees_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('past_and_future_employers');
    }
};
