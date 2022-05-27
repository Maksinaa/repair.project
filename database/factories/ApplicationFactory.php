<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'model'=> $this->faker->company(),
            'fault'=> $this->faker->text(15),
            'customer'=> $this->faker->name(),
            'status'=> $this->faker->randomElement(
                [
                    'repair',
                    'approval',
                    'completion'
                ]
            ),
            'user_id'=> $this->faker->numberBetween(2, 4),
            'completion'=> $this->faker->date($format = 'Y-m-d', $max = 'now'),

        ];
    }
}
