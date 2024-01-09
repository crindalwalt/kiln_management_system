<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stakeholder>
 */
class StakeholderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstNameMale(),
            'last_name' => $this->faker->firstNameMale(),
            'CNIC' => "31202100010000",
            'opening_balance' => 0,
            'phone' => $this->faker->phoneNumber,
            'balance' => $this->faker->numberBetween(10000, 10000000),
            'status' => "active",
            'city' => $this->faker->city(),
            'user_group_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
