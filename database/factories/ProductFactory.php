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
            'name' => $this->faker->name,
            'product_category_id' => '1',
            'image' => "https://source.unsplash.com/products/400x400",
            'quantity' => $this->faker->numberBetween(1200, 5000),
            'price' => $this->faker->numberBetween(1, 1300),
            'bhatta_id'  => 1,
        ];
    }
}
