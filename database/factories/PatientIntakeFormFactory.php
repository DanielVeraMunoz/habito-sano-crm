<?php

namespace Database\Factories;

use App\Models\Patient;
use App\Models\PatientIntakeForm;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PatientIntakeForm>
 */
class PatientIntakeFormFactory extends Factory
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
            'initial_weight' => $this->faker->randomFloat(2, 50, 100),
            'data' => [
                // cómo llegó / contacto adicional (name, phone y email ya están en `patients`)
                'como_me_conocio' => $this->faker->sentence(),
                'domicilio' => $this->faker->streetAddress(),
                'codigo_postal' => $this->faker->postcode(),
                'localidad' => $this->faker->city(),

                // medidas de la primera visita (weight ya está en `initial_weight`)
                'talla' => $this->faker->numberBetween(150, 190),
                'peso_normal' => $this->faker->randomFloat(2, 50, 90),

                // datos personales/médicos
                'edad' => $this->faker->numberBetween(18, 75),
                'fecha_nacimiento' => $this->faker->date(),
                'profesion' => $this->faker->jobTitle(),
                'peso_con_20_anos' => $this->faker->randomFloat(2, 45, 90),
                'hijos' => $this->faker->numberBetween(0, 4),
                'peso_antes_embarazo' => $this->faker->optional()->randomFloat(2, 45, 90),
                'cirugias' => $this->faker->optional()->sentence(),
                'medicacion' => $this->faker->optional()->sentence(),

                // histórico de dietas
                'edad_motivo_ganancia_peso' => $this->faker->sentence(),
                'dietas_hechas' => $this->faker->optional()->sentence(),
                'kilos_antes_primera_dieta' => $this->faker->optional()->randomFloat(2, 45, 110),
                'peso_minimo_conseguido' => $this->faker->optional()->randomFloat(2, 45, 90),
                'kilos_que_baja' => $this->faker->optional()->randomFloat(2, 1, 20),
                'tiempo_en_bajarlos' => $this->faker->optional()->word(),
                'tiempo_que_se_mantiene' => $this->faker->optional()->word(),

                // hábitos actuales
                'hora_levantarse' => $this->faker->time('H:i'),
                'desayuno' => $this->faker->sentence(),
                'media_manana' => $this->faker->sentence(),
                'hora_comida' => $this->faker->time('H:i'),
                'media_tarde' => $this->faker->sentence(),
                'hora_cena' => $this->faker->time('H:i'),
                'alcohol' => $this->faker->sentence(),
                'postre' => $this->faker->sentence(),
                'pan' => $this->faker->sentence(),
                'arroz' => $this->faker->sentence(),
                'legumbre' => $this->faker->sentence(),
                'harina_trigo' => $this->faker->sentence(),
                'patata' => $this->faker->sentence(),
                'bolleria' => $this->faker->sentence(),
                'verduras' => $this->faker->sentence(),
                'frutas' => $this->faker->sentence(),
                'digestiones' => $this->faker->optional()->sentence(),
                'agua' => $this->faker->sentence(),
                'dolor_cabeza' => $this->faker->optional()->sentence(),
                'mareos' => $this->faker->optional()->sentence(),
                'varices' => $this->faker->optional()->sentence(),
                'funcion_intestinal' => $this->faker->optional()->sentence(),
                'diuresis' => $this->faker->optional()->sentence(),
                'fur' => $this->faker->optional()->date(),
            ],
        ];
    }
}
