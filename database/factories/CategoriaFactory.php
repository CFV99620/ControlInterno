<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Nombre'    => fake()->text(50),
            'Precio'    => fake()->randomFloat(2, 0.01, 9999.99),
            'Cantidad'  => fake()->numberBetween(1, 100000),
        ];
    }
}
