<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductBatch>
 */
class ProductBatchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'batch_number' => "BATCH-" . $this->faker->randomNumber(6),
            'quantity' => $this->faker->numberBetween(100, 1000),
            'completed_at' => $this->faker->dateTime,
            'product_id' => $this->faker->numberBetween(1, 20),
        ];
    }
}
