<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'website_id' => $this->faker->numberBetween(1,24),
            'user_id' => $this->faker->numberBetween(2, 26)
        ];
    }
}
