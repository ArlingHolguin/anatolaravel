<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agencia>
 */
class AgenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company . ' ' . $this->faker->randomElement(['SAS', 'CI', 'Ltda']),
            'nit' => $this->faker->unique()->numberBetween(100000000, 999999999),
            'type' => $this->faker->randomElement(['Principal', 'Sucursal']),
        ];
    }
}
