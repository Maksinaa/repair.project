<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //предложение от 2-5 случайных слов
            'name'=> $this->faker->sentence(mt_rand(2,5), true),
            //случайная цена от 500 до 5000
            'price'=> $this->faker->numberBetween($min = 500, $max = 5000),
            //описание из 1 предложения
            'note'=> $this->faker->paragraph(1,true) ,
        ];
    }
}
