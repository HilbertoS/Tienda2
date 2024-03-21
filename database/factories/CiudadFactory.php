<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ciudad>
 */
class CiudadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    { 
        return [
            //
           'nombre' => fake()->city(),
           'codigoPostal' => fake()->postcode(),
           'provincia_id' => fake()->numberBetween(1, 25),
           'created_at' => now(),
           'updated_at' => now(),
        ];
    }
}
