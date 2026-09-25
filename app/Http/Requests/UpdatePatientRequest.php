<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'email', 'max:255', Rule::unique('patients', 'email')->ignore($this->patient)],
            'phone' => ['required', 'string', 'max:255'],
            'assigned_to' => ['required', 'exists:staff,id'],
            'plan' => ['required', 'string', 'in:suelta,mensual,trimestral,semestral,anual'],
            'sessions_remaining' => ['nullable', 'integer', 'min:0'],
            'status' => ['nullable', 'string', 'in:activo,pausado,inactivo'],
            'notes' => ['nullable', 'string'],
            'diet_plan' => ['nullable', 'string'],
        ];
    }
}
