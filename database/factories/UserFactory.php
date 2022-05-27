<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
       /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'position' => $this->faker->randomElement(
                [
                    'administrator',
                    'master',
                    'consultant'
                ]
            ),
            'office_id' => $this->faker->numberBetween(1, 2),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
        /**
     * Состояние для администратора
     *
     * @return Factory
     */
    public function administrator()
    {
        return $this->state(
            function (array $attributes) {
                return [
                    'position' => 'administrator',
                ];
            }
        );
    }

    /**
     * Состояние для мастера
     *
     * @return Factory
     */
    public function master()
    {
        return $this->state(
            function (array $attributes) {
                return [
                    'position' => 'master',
                ];
            }
        );
    }

    /**
     * Состояние для консультатнта
     *
     * @return Factory
     */
    public function consultant()
    {
        return $this->state(
            function (array $attributes) {
                return [
                    'position' => 'consultant',
                ];
            }
        );
    }
}
