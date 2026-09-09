<?php

namespace Database\Factories;

use App\Models\Patient;
use App\Models\Staff;
use App\Models\WeeklyCheckin;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<WeeklyCheckin>
 */
class WeeklyCheckinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_id' => Patient::factory(),
            'recorded_by' => Staff::factory(),
            'date' => $this->faker->date(),
            'weight' => $this->faker->randomFloat(2, 50, 100),
            'habits' => $this->faker->optional()->sentence(),
            'notes' => $this->faker->optional()->sentence(),
            'five_meals' => $this->faker->boolean(),
        ];
    }
}
