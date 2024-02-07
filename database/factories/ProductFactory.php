<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraph,
            'category_id' => function () {
                return \App\Models\Category::factory()->create()->id;
            },
        ];
    }
}
