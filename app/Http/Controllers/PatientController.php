<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\View\View;

class PatientController extends Controller
{
    public function index(): View
    {
        $patients = Patient::all();

        return view('patients.index', ['patients' => $patients]);
    }
}
