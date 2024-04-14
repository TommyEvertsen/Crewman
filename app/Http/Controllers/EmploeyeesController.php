<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Assignments;
use App\Models\Employees;
use App\Models\Employers;
use App\Models\PastAndFutureEmployer;
use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;
use Carbon\Carbon;

class EmploeyeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employees::with('pastAndFutureEmployer', 'employer.assignments')->get();

        return Inertia::render('Employees', [
            'employees' => $employees,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $createZID = rand(10000, 99999);

        $validated = $request->validate([
            'name' => 'required|string|max:40',

        ]);

        $employer = new Employers();
        $employer->name = $validated['name'];
        $employer->save();

        $employees = new Employees();
        $employees->firstName = fake()->name();
        $employees->lastName = fake()->name();
        $employees->ZID = $createZID;
        $employees->save();

        $employer->employees()->save($employees);

        $futureEmployments = new PastAndFutureEmployer();
        $futureEmployments->name = fake()->name();
        $futureEmployments->start_date  = Carbon::today()->subDays(rand(1, 365));
        $futureEmployments->end_date  = Carbon::today()->subDays(rand(1, 365));
        $futureEmployments->save();

        $employees->pastAndFutureEmployer()->save($futureEmployments);

        $assignments = new Assignments();
        $assignments->name = fake()->name();
        $assignments->start_date  = Carbon::today()->subDays(rand(1, 365));
        $assignments->end_date  = Carbon::today()->subDays(rand(1, 365));
        $assignments->save();

        $employer->assignments()->save($assignments);

        /*  $role = new Role();
        $role->role_type = fake()->name();
        $role->start_date  = Carbon::today()->subDays(rand(1, 365));
        $role->end_date  = Carbon::today()->subDays(rand(1, 365));
        $role->save();

        $assignments->roles()->save($role); */



        return redirect(route('employees.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
