<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Assignments;
use App\Models\Employees;
use App\Models\Employers;
use App\Models\Leaves;
use App\Models\Locations;
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
        $employees = Employees::with('pastAndFutureEmployer', 'employer.assignments.assignmentroles', 'employer.assignments.assignmentleaves')->get();

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
            'employerName' => 'required|string|max:40',
            'employeeFName' => 'required|string|max:40',
            'employeeLName' => 'required|string|max:40',

        ]);

        $employer = new Employers();
        $employer->name = $validated['employerName'];
        $employer->save();

        $employees = new Employees();
        $employees->firstName = $validated['employeeFName'];
        $employees->lastName = $validated['employeeLName'];
        $employees->ZID = $createZID;
        $employees->save();

        $employer->employees()->save($employees);

        $futureEmployments = new PastAndFutureEmployer();
        $futureEmployments->name = fake()->company();
        $futureEmployments->start_date  = fake()->date();
        $futureEmployments->end_date  = fake()->date();
        $futureEmployments->save();

        $employees->pastAndFutureEmployer()->save($futureEmployments);

        $assignments = new Assignments();
        $assignments->name = fake()->bs();
        $assignments->start_date  = fake()->date();
        $assignments->end_date  = fake()->date();
        $assignments->save();

        $employer->assignments()->save($assignments);

        $leaves = new Leaves();
        $setLeave = (rand(1, 2) < 2) ? "Vacation" : "Sick leave";
        $leaves->name = $setLeave;
        $leaves->start_date  = fake()->date();
        $leaves->end_date  = fake()->date();
        $leaves->save();

        $assignments->assignmentleaves()->save($leaves);

        $role = new Role();
        $setRole = (rand(1, 2) < 2) ? "Qualification" : "Position";
        $role->role_type = $setRole;
        $role->start_date  = fake()->date();
        $role->end_date  = fake()->date();
        $role->save();

        $assignments->assignmentroles()->save($role);

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
