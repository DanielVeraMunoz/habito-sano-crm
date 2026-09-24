<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientRequest;
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
        return view('patients.show', ['patient' => $patient]);
    }
}
