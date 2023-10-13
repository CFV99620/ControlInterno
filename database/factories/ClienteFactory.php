<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Nombre'        => fake()->name,
            'Telefono'      => fake()->phoneNumber,
            'Direccion'     => fake()->address,
            'Referencia'    => fake()->sentence,
            'Coordenadas'   => fake()->latitude . ', ' . fake()->longitude,
        ];
    }
}
