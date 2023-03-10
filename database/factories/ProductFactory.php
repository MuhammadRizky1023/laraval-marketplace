<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' =>$this->faker->word(),
            'description' =>$this->faker->text(20),
            'price' =>$this->faker->number_beetwen(1000, 10000),
            'image' => ''
        ];
    }
}
