<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
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
            'nombre' => fake()->sentence(3),
            'descripcion' => fake()->sentence(2),
            'imagen' => ' ',
            'categoria_id' => fake()->numberBetween(1, 10),
            'precio' => fake()->numberBetween(5, 1000),
            'descuento' => fake()->numberBetween(0, 30),
            'estado' => fake()->randomElement(['Activo', 'Inactivo']),
        ];
    }
}
