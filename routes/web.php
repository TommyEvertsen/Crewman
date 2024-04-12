<?php

use App\Http\Controllers\ProfileController;
use App\Models\Employees;
use App\Models\Employers;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/employees', function () {

    $employees = Employees::with('employer.name')->get();
    $employer = Employers::all();

    return Inertia::render('Employees', [
        'employees' => $employees,
        'employer' => $employer,
    ]);
})->name('employees');





Route::get('/newemployee', function () {

    return Inertia::render('NewEmployee', []);
})->name('newEmployee');

require __DIR__ . '/auth.php';
