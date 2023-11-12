<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->unique()->sentence; // Genera un título único
        return [
            'title' => $title,
            'slug' => Str::slug($title, '-'),
            'excerpt' => $this->faker->text(200),
            'body' => $this->faker->text(500),
            'published' => $this->faker->boolean(80), // 80% de probabilidad de ser true
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
            'user_id' => \App\Models\User::inRandomOrder()->first()->id
        ];
    }
}
