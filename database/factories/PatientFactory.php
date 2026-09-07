<?php

namespace Database\Factories;

use App\Models\Patient;
use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'assigned_to' => Staff::factory(),
            'plan' => $this->faker->randomElement(['suelta', 'mensual', 'trimestral', 'semestral', 'anual']),
            'sessions_remaining' => $this->faker->numberBetween(0, 10),
            'status' => $this->faker->randomElement(['activo', 'pausado', 'inactivo']),
            'notes' => $this->faker->optional()->paragraph(),
            'diet_plan' => $this->faker->optional()->paragraph(),
        ];
    }
}
