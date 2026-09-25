<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeeklyCheckinRequest;
use App\Models\Patient;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class WeeklyCheckinController extends Controller
{
    public function create(Patient $patient): View
    {
        return view('weekly_checkins.create', ['patient' => $patient]);
    }

    public function store(StoreWeeklyCheckinRequest $request, Patient $patient): RedirectResponse
    {
        $data = $request->validated();
        $data['recorded_by'] = auth()->id();

        $patient->weeklyCheckins()->create($data);

        return redirect()->route('patients.show', $patient);
    }
}
