<?php

namespace App\Models;

use Database\Factories\PatientIntakeFormFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable('patient_id', 'initial_weight', 'data')
]

class PatientIntakeForm extends Model
{
    /** @use HasFactory<PatientIntakeFormFactory> */
    use HasFactory;

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    protected function casts(): array
    {
        return [
            'data' => 'array',
        ];
    }
}
