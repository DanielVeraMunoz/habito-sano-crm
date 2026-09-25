<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Models\Patient;
use App\Models\Staff;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PatientController extends Controller
{
    public function index(): View
    {
        $patients = Patient::all();

        return view('patients.index', ['patients' => $patients]);
    }

    public function create(): View
    {
        $staff = Staff::all();

        return view('patients.create', ['staff' => $staff]);
    }

    public function store(StorePatientRequest $request): RedirectResponse
    {
        $data = $request->validated();

        Patient::create($data);

        return redirect()->route('patients.index');
    }

    public function show(Patient $patient): View
    {
        $weeklyCheckins = $patient->weeklyCheckins()->orderBy('date', 'desc')->get();

        return view('patients.show', ['patient' => $patient, 'weeklyCheckins' => $weeklyCheckins]);
    }

    public function edit(Patient $patient): View
    {
        $staff = Staff::all();

        return view('patients.edit', ['patient' => $patient, 'staff' => $staff]);
    }

    public function update(UpdatePatientRequest $request, Patient $patient): RedirectResponse
    {
        $data = $request->validated();

        $patient->update($data);

        return redirect()->route('patients.index');
    }
}
