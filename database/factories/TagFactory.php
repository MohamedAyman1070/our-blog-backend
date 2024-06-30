<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = join(" ", fake()->unique()->words(fake()->numberBetween(1, 3)));

        return [
            'name' => $name,
            'description' => fake()->paragraph(1),
            'color' => fake()->hexColor(),
            'slug' => Str::slug($name)
        ];
    }
}