<?php

namespace App\Models;

use Database\Factories\WeeklyCheckinFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[
    Fillable('patient_id', 'recorded_by', 'date', 'weight', 'habits', 'notes', 'five_meals')
]

class WeeklyCheckin extends Model
{
    /** @use HasFactory<WeeklyCheckinFactory> */
    use HasFactory;

    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class, 'recorded_by');
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    protected function casts(): array
    {
        return [
            'date' => 'date',
        ];
    }
}
