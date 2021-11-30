<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'website_id' => $this->faker->numberBetween(1,50),
            'title' => $this->faker->sentence(7),
            'content' => $this->faker->paragraph,
            'editor' => $this->faker->numberBetween(1,35)
        ];
    }
}
