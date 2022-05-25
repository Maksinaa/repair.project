<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->text(5),

            'value'=> $this->faker->text(15),

            'description'=> $this->faker->paragraph(1,true) ,
        ];
    }

    /**
     * Состояние для имени
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function name()
    {
        return $this->state(
            function (array $attributes) {
                return [
                    'name' => 'name',
                    'value' => 'ИП Столбов С.Ю.',
                    'description' => 'Название индивидуального предпринимателя',
                ];
            }
        );
    }
    /**
     * Состояние для ИНН
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function inn()
    {
        return $this->state(
            function (array $attributes) {
                return [
                    'name' => 'inn',
                    'value' => $this->faker->inn(),
                    'description' => 'ИНН индивидуального предпринимателя',
                ];
            }
        );
    }
    /**
     * Состояние для ICQ
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function icq()
    {
        return $this->state(
            function (array $attributes) {
                return [
                    'name' => 'icq',
                    'value' => $this->faker->inn(),
                    'description' => 'ICQ индивидуального предпринимателя',
                ];
            }
        );
    }
}
