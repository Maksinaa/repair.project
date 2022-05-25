<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name(),
            'text'=> $this->faker->text(200),
            'rating'=> $this->faker->numberBetween($min = 1, $max = 5),
            'email'=> $this->faker->unique()->safeEmail(),
            'status' => $this->faker->randomElement(['moderation', 'published', 'denied']),

        ];
    }
}
