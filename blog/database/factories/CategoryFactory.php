<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ['Shonen', 'Shojo', 'Seinen', 'Josei', 'Isekai', 'Mecha', 'Slice of Life', 'Fantasía', 'Horror', 'Aventura'];

        return [
            'name' => $this->faker->randomElement($categories) // Selecciona una categoría al azar del arreglo
        ];
    }
}
