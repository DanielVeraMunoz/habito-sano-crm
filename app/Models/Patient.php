<?php

namespace App\Models;

use Database\Factories\PatientFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'surname', 'email', 'phone', 'assigned_to', 'plan', 'sessions_remaining', 'status', 'notes', 'diet_plan'])]

class Patient extends Model
{
    /** @use HasFactory<PatientFactory> */
    use HasFactory;

    public function assignedStaff(): BelongsTo
    {
        return $this->belongsTo(Staff::class, 'assigned_to');
    }

    public function weeklyCheckins(): HasMany
    {
        return $this->hasMany(WeeklyCheckin::class);
    }
}
